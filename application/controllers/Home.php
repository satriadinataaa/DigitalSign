<?php
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\Word2007;
class Home extends MY_Controller
{
    var $API ="";
	public function __construct()
	{
		parent::__construct();
       // $this->API="https://api.kawalcorona.com/indonesia";
        $this->load->library('session');
        $this->module = 'home';

        $this->load->model('M_Whatsapp');
        $this->data['wa'] = M_Whatsapp::first();
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
	}

	public function index()
	{
        $this->load->model('M_Carousel');
        $this->load->model('M_KataMutiara');
        $this->load->model('M_Berita');
        $this->load->model('M_Marquee');
        $this->data['carousel'] = M_Carousel::Orderby('id','desc')->limit(1)->first();
        if($this->data['carousel']){
        $this->data['carouselsamping'] = M_Carousel::where('id','!=',$this->data['carousel']->id)->Orderby('id','desc')->get();
        }
        else{
            $this->data['carouselsamping'] = null;
        }
        $this->data['katamutiara'] = M_KataMutiara::Orderby('id','desc')->limit(1)->first();
        //$this->data['katamutiara'] = $data['mutiara'][0]->katamutiara;
        
        $this->data['berita'] = M_Berita::Orderby('id','desc')->limit(4)->get();
        $this->data['marquee'] = M_Marquee::first();
        $this->data['title']  = 'Beranda';
        $this->data['content']   = 'beranda';
        $this->template($this->data, $this->module);
    }

    

}
