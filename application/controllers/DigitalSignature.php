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
            try {
                $berkas_file = $_FILES['inputFile']['tmp_name'];
                if(empty($berkas_file))
                    throw new Exception("Error Processing Request", 1);

                $id = mt_rand(1,100);
                $file_name = $id . preg_replace('/\s+/', '_', $_FILES['inputFile']['name']);

                $hash_file =  md5_file($berkas_file);
                $keyPair = KeyPair::generateKeyPair(4096);
                $secretKey = $keyPair->getPrivateKey();
                $publicKey = $keyPair->getPublicKey();

                $sign = EasyRSA::rsaEncryptPure($hash_file, $secretKey); 
                $data['sign'] = $sign;
                $data['publicKey'][0] = $publicKey->getKey();
                $this->createExcel('Sign-1-'.$file_name, $data);
                $this->data['pvtkey'] = $secretKey->getKey();
                                
                $this->data['title']  = 'Hasil Signature';
                $this->data['content']   = 'postsign';
                return $this->template($this->data, $this->module);
            } catch (Exception $e) {
                $this->flashmsg("Pastikan input file dengan benar.", "danger");
                return redirect('/');
            }
        }
                
        return show_404();
    }

    public function sign_next()
    {
        if($this->POST('submitSec')) {
            try {
                $berkas_file = $_FILES['berkas']['tmp_name'];
                $berkas_sign = $_FILES['sign']['tmp_name'];
                if(empty($berkas_file) || empty($berkas_sign))
                    throw new Exception("Error Processing Request", 1);

                $id = mt_rand(1,100);
                $file_name = $id . preg_replace('/\s+/', '_', $_FILES['sign']['name']);            
                
                $excel_data = $this->readExcel($berkas_sign);
                
                $keyPair = KeyPair::generateKeyPair(4096);
                $secretKey = $keyPair->getPrivateKey();
                $publicKey = $keyPair->getPublicKey();

                $sign = EasyRSA::rsaEncryptPure($excel_data[1][0], $secretKey); 
                $data['sign'] = $sign;
                $data['publicKey'] = [];
                for($i=0; $i<count($excel_data)-1; $i++) {
                    $data['publicKey'][$i] = $excel_data[$i+1][1];
                }
                $data['publicKey'][count($excel_data)-1] = $publicKey->getKey();
                // $this->dump($data['publicKey']); exit;
                $this->createExcel('Sign-'.count($excel_data).'-'.$file_name, $data);
                $this->data['pvtkey'] = $secretKey->getKey();
                
                
                $this->data['title']  = 'Hasil Signature';
                $this->data['content']   = 'postsign';
                return $this->template($this->data, $this->module);
            } catch (Exception $e) {
                $this->flashmsg("Pastikan input file dengan benar.", "danger");
                return redirect('/');
            }
        }
        
        return show_404();
    }

    public function verify()
    {
        if($this->POST('submitFirst')) {
            try {
                $berkas_file = $_FILES['berkas']['tmp_name'];
                $berkas_sign = $_FILES['sign']['tmp_name'];
               
                if(empty($berkas_file) || empty($berkas_sign))
                   throw new Exception("Error Processing Request", 1);
                    
                $check = $this->verif_sign($berkas_file, $berkas_sign);
                
                if($check == 1){
                    $this->data['stat'] = "success";
                    $this->data['msg'] = "Proses Verifikasi Sukses. Integritas File Terjamin.";
                }
                else{
                    $this->data['stat'] = "danger";
                    $this->data['msg'] = "Proses Verifikasi Gagal. Integritas File Tidak Terjamin.";
                }    
                $this->data['title']  = 'Hasil Verifikasi';
                $this->data['content']   = 'postverif';
                return $this->template($this->data, $this->module);                  
            } catch (Exception $e) {
                $this->flashmsg("Pastikan input file dengan benar.", "danger");
                return redirect('/');
            }
        }
        return show_404();
    }

    protected function verif_sign($berkas, $sign)
    {
        $hash_file = md5_file($berkas);
        $excel_data = $this->readExcel($sign);
        $sign = $excel_data[1][0];
        
        // $this->dump($list_sign); exit;
        for($i=count($excel_data)-1; $i>1; $i--) {
            $public_key = KeyPair::setPublicKey($excel_data[$i][1]);
            $sign = EasyRSA::rsaDecryptPure($sign, $public_key);
        }
        $public_key = KeyPair::setPublicKey($excel_data[1][1]);
        $hash = EasyRSA::rsaDecryptPure($sign, $public_key);

        if(strcmp($hash_file, $hash) == 0) {
            return true;              
        } else {
            return false;
        }
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