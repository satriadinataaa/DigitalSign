<?php
use ParagonIE\EasyRSA\KeyPair;
use ParagonIE\EasyRSA\EasyRSA;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DigitalSignature extends MY_Controller
{
    private $secretKey;
    private $publicKey;

	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');
        $this->module = 'home';

        //generate key pair for user
        $keyPair = KeyPair::generateKeyPair(4096);
        $this->secretKey = $keyPair->getPrivateKey();
        $this->publicKey = $keyPair->getPublicKey();
    }

    public function sign_first()
    {
        if($this->POST('submitFirst')) {
            $id = mt_rand(1,100);
            $file_name = $id . preg_replace('/\s+/', '_', $_FILES['inputFile']['name']);
            if(!$this->upload($file_name, 'uploads', 'inputFile'))
                return 'gagal';
            
            $hash_file =  md5_file(base_url('uploads/'.$file_name));
            $keyPair = KeyPair::generateKeyPair(4096);
            $secretKey = $keyPair->getPrivateKey();
            $publicKey = $keyPair->getPublicKey();

            $sign = EasyRSA::rsaEncryptPure($hash_file, $secretKey); 
            $data['row'][0] = $sign;
            $data['column'][0] = $publicKey->getKey();
            $this->createExcel($file_name, $data);
            echo 'sukses, baiknya redirect ke page yg munculin private sign dia, sama button donlod excel';
            return;
        }
        
        return redirect('/');
    }

    protected function createExcel($file_name, $data)
    {
        $dir = dirname(__DIR__, 2);

        //remove format file
        $file_name = explode('.', $file_name);
        array_pop($file_name);
        $file_name = implode('', $file_name);
        $file_name = dirname(__DIR__, 2).'/file/'.$file_name.'.xlsx';

        //$data ada index row dan column
        \PhpOffice\PhpSpreadsheet\Shared\File::setUseUploadTempDirectory(true);
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->getCell('A1')->setValue('Signature');
        $sheet->getCell('B1')->setValue('Public Key');

        //write sign and public key to excel
        for($i=0; $i<count($data['row']); $i++) {
            $row = $i+2;
            $sheet->getCell('A'.$row)->setValue($data['row'][$i]);
            $sheet->getCell('B'.$row)->setValue($data['column'][$i]);
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save($file_name);
    }


}