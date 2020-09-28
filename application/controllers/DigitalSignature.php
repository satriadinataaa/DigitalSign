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
            $data['sign'] = $sign;
            $data['publicKey'][0] = $publicKey->getKey();
            $this->createExcel($file_name, $data);
            $this->data['pvtkey'] = $secretKey->getKey();
            
            
            $this->data['title']  = 'Hasil Signature';
            $this->data['content']   = 'postsign';
            $this->template($this->data, $this->module);
            //echo 'sukses, baiknya redirect ke page yg munculin private sign dia, sama button donlod excel';
            return;
        }
        
        return show_404();
    }

    public function sign_next()
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
            $data['sign'] = $sign;
            $data['publicKey'][0] = $publicKey->getKey();
            $this->createExcel($file_name, $data);
            echo 'sukses, baiknya redirect ke page yg munculin private sign dia, sama button donlod excel';
            return;
        }
        
        return show_404();
    }

    public function verify()
    {
        if($this->POST('submitFirst')) {
            if(empty($_FILES['berkas']['name']) || empty($_FILES['sign']['name']))
                echo 'woi';
            
            $hash_file = md5_file($_FILES['berkas']['tmp_name']);
            $excal_data = $this->readExcel($_FILES['sign']['tmp_name']);
            $sign = $excal_data[1][0];
            
            // $this->dump($list_sign); exit;
            for($i=count($excal_data)-1; $i>1; $i--) {
                $public_key = KeyPair::setPublicKey($excal_data[$i][1]);
                $sign = EasyRSA::rsaDecryptPure($sign, $public_key);
            }
            $public_key = KeyPair::setPublicKey($excal_data[1][1]);
            $hash = EasyRSA::rsaDecryptPure($sign, $public_key);

            if(strcmp($hash_file, $hash) == 0) {
                $this->data['stat'] = 'success';
                $this->data['msg'] = "Proses Verifikasi Sukses. Integritas File Terjamin";
                //echo 'valid';                
            } else {
                $this->data['stat']= 'danger';
                $this->data['msg'] = "Proses Verifikasi Gagal. Integritas File Tidak Terjamin";
                //echo 'tidak valid';
            }
            $this->data['title']  = 'Hasil Verifikasi';
            $this->data['content']   = 'postverif';
            $this->template($this->data, $this->module);
            return;
        }
        return show_404();
    }

    protected function createExcel($file_name, $data)
    {
        $dir = dirname(__DIR__, 2);

        //remove format file
        $file_name = explode('.', $file_name);
        array_pop($file_name);
        $file_name = implode('', $file_name);
        $namafile = $file_name.'.xlsx';
        $file_name = dirname(__DIR__, 2).'/file/'.$file_name.'.xlsx';
        
        \PhpOffice\PhpSpreadsheet\Shared\File::setUseUploadTempDirectory(true);
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->getCell('A1')->setValue('Last Signature');
        $sheet->getCell('B1')->setValue('List Public Key');
        $sheet->getCell('A2')->setValue($data['sign']);
        //write sign and public key to excel
        for($i=0; $i<count($data['publicKey']); $i++) {
            $row = $i+2;            
            $sheet->getCell('B'.$row)->setValue($data['publicKey'][$i]);
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save($file_name);
        $this->data['filename'] = $namafile;

    }

    protected function readExcel($file_name)
    {
        // $file_name = dirname(__DIR__, 2). '/file/53akte.xlsx';
        $file_type = 'Xlsx';
        /**  Create a new Reader of the type defined in $inputFileType  **/
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($file_type);
        /**  Load $inputFileName to a Spreadsheet Object  **/
        $spreadsheet = $reader->load($file_name);
        $worksheet = $spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray();
        return $rows;
    }

}