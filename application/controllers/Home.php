<?php
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;
use ParagonIE\EasyRSA\KeyPair;

use ParagonIE\EasyRSA\EasyRSA;

class Home extends MY_Controller
{
    private $p;
    private $q,$n,$totient,$e,$d;
    public $cipherteks;

    
	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');
        $this->module = 'home';

      
	}
    public function testRSA(){
        $keyPair = KeyPair::generateKeyPair(2048);
        $secretKey = $keyPair->getPrivateKey();
        $publicKey = $keyPair->getPublicKey();

        $message = "test";
        $ciphertext = EasyRSA::encrypt($message, $publicKey);
        echo $ciphertext;
        $plaintext = EasyRSA::decrypt($ciphertext, $secretKey);
        echo $plaintext;


    }
    public function index()
	{
       
        if($this->POST('submitFirst')){
            //insert code here
            $keyPair = KeyPair::generateKeyPair(2048);
            $secretKey = $keyPair->getPrivateKey();
            $publicKey = $keyPair->getPublicKey();
            //$publicKey->getKey(); <-- code to print key;

        }      

        if($this->POST('submitSec')){
            //insert code here
            $keyPair = KeyPair::generateKeyPair(2048);
            $secretKey = $keyPair->getPrivateKey();
            $publicKey = $keyPair->getPublicKey();

            //$publicKey->getKey(); <-- code to print key;
        }      

        $this->data['title']  = 'Beranda';
        $this->data['content']   = 'beranda';
        $this->template($this->data, $this->module);
    }

    public function check()
	{
       
        if($this->POST('submitFirst')){
            //insert code here
            $keyPair = KeyPair::generateKeyPair(2048);
            $secretKey = $keyPair->getPrivateKey();
            $publicKey = $keyPair->getPublicKey();
            //$publicKey->getKey(); <-- code to print key;

        }      

        if($this->POST('submitSec')){
            //insert code here
            $keyPair = KeyPair::generateKeyPair(2048);
            $secretKey = $keyPair->getPrivateKey();
            $publicKey = $keyPair->getPublicKey();

            //$publicKey->getKey(); <-- code to print key;
        }      

        $this->data['title']  = 'Periksa Integritas';
        $this->data['content']   = 'check';
        $this->template($this->data, $this->module);
    }

    
    /*function setP(){
        $this->p = $this->generatePrime();
    }
    
    function setQ(){
        $this->q = $this->generatePrime();
    }
    
    function primeCheck($number){ 
        if ($number == 1) 
        return 0; 
        for ($i = 2; $i <= $number/2; $i++){ 
            if ($number % $i == 0) 
                return 0; 
        } 
        return 1; 
    } 

    function generatePrime(){
        do{
            $number = mt_rand(1000,10000000);
            $flag= $this->primeCheck($number);
        }
        while($flag != 1);

        return $number;
    }

    function getPublickey(){
        $this->e = $this->generatePrime();
    }

    function calculateN(){
        $this->setP();
        $this->setQ();
      
        $n = $this->p*$this->q;
        echo $n;         
    }

    function getTotient(){
        $p = $this->p - 1;
        $q = $this->q - 1;
        $this->totient = $p * $q;
    }

    function gcd(){
        $e = $this->e;
        $totient = $this->totient;
        if($e<$totient){
            $temp = $e;
            $e = $totient;
            $totient = $temp;
        }
        while($totient != 0){
            $r = $e % $totient;
            $e = $totient;
            $totient = $r;
        }
        return $e;
    }
	
    public function test()
	{
		$phpWord = new PhpWord();
		$section = $phpWord->addSection();
		$section->addText('Hello World !');
		
		$writer = new Word2007($phpWord);
		
		$filename = 'simple';
		
		header('Content-Type: application/msword');
        	header('Content-Disposition: attachment;filename="'. $filename .'.docx"'); 
		header('Cache-Control: max-age=0');
		
		$writer->save('php://output');
	}*/


}
