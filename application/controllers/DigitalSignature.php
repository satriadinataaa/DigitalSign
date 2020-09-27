<?php
use ParagonIE\EasyRSA\KeyPair;
use ParagonIE\EasyRSA\EasyRSA;

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
            if($this->upload($file_name, 'uploads', 'inputFile'))
                echo 'sukses';
            else 
                echo 'gagal';
        }
        
        // return redirect('/');
    }


}