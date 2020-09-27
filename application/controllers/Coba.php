<?php
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;
use ParagonIE\EasyRSA\KeyPair;

use ParagonIE\EasyRSA\EasyRSA;

class Coba extends MY_Controller
{
    private $p;
    private $q,$n,$totient,$e,$d;
    public $cipherteks;

    
	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');
        $this->module = 'coba';
    }  

    public function ttd1()
    {
        $keyPair = KeyPair::generateKeyPair(4096);

        $secretKey = $keyPair->getPrivateKey();
        $publicKey = $keyPair->getPublicKey();
        $hash = "iniHASHmd5";        
        $sign1 = EasyRSA::encrypt2($hash, $secretKey);
        echo $sign1;
    }

    public function ttd2($signSebelum)
    {
        $keyPair = KeyPair::generateKeyPair(4096);

        $secretKey = $keyPair->getPrivateKey();
        $publicKey = $keyPair->getPublicKey();        
        $sign2 = EasyRSA::encrypt2($signSebelum, $secretKey);
        echo $sign2;
    }

    public function verif()
    {
        $hash = "iniHASHmd5";    
        $keyPair = KeyPair::generateKeyPair(4096);        
        $secretKey = $keyPair->getPrivateKey();
        $publicKey = $keyPair->getPublicKey();
        
        // $pk = KeyPair::setPublicKey($publicKey->getKey());
        $c1 = EasyRSA::rsaEncryptPure($hash, $secretKey);        
        $b1 = EasyRSA::encrypt2($hash, $secretKey);
        $c2 = EasyRSA::rsaDecryptPure($c1, $publicKey);
        $b2 = EasyRSA::decrypt2($b1, $publicKey);
        echo $c2;
        echo '<br><br><br>';
        echo $b2; exit;
        // echo $pk->getPublicKey(); exit;
        //sign ttd 1
            
        

        //verify
        $decrypt = EasyRSA::decrypt2($sign1, $publicKey->getKey());
        echo $decrypt; die();
        $keyPair = KeyPair::generateKeyPair(4096);

        $secretKey2 = $keyPair->getPrivateKey();
        $publicKey2 = $keyPair->getPublicKey();

        //ttd selanjutnya verify dulu
        $decrypt = EasyRSA::decrypt2($sign1, $publicKey);
        $sign2 = EasyRSA::encrypt2($sign1, $secretKey2);

        $dec2 = EasyRSA::decrypt2($sign2, $publicKey2);
        $decrypt = EasyRSA::decrypt2($dec2, $publicKey);
        echo $dec2;
        echo '<br><br><br>';
        echo $decrypt;
        // echo $sign2;
        // $signature = EasyRSA::sign($message, $publicKey);
        // $signature1 = EasyRSA::decrypt($signature, $secretKey);
        //ttd ke 2

        // $ciphertext = EasyRSA::encrypt($signature.$delimiter.$flag, $publicKey);

        // $signature1 = EasyRSA::decrypt($ciphertext, $secretKey);
        
        // //verif DS
        // if (EasyRSA::verify($message, $signature1, $publicKey)) {
        //     echo  'Signature is valid!';
        // } else {
        //     echo 'Tidak valid';
        // }
    }
  
}
