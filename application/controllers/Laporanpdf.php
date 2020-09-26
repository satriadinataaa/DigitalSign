<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function make_pdf($id){
         $p=$this->db->get_where('pendaftaran',array('id'=>$id))->row_array();
         
        
         $pdf = new FPDF();
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Formulir Pendaftaran',0,1,'C');
        $pdf->SetFont('Arial','B',12);
       // $pdf->Cell(190,7,'Izin Mendirikan Bangunan',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);
        //$pdf->Cell(10,10,'I',1,0,'C');
        $pdf->Cell(85,10,'Nama Siswa',1,0,'C');
        $pdf->Cell(85,10,$p['nama_siswa'],1,0,'C');
        $pdf->Ln(10);
        $pdf->Cell(85,10,'Jenis Kelamin',1,0,'C');
        $pdf->Cell(85,10,$p['jenis_kelamin'],1,0,'C');
        $pdf->Ln(10);
        $pdf->Cell(85,10,'Tempat/ Tanggal Lahir',1,0,'C');
        $pdf->Cell(85,10,$p['tempat_lahir'].' / '.$p['tanggal_lahir'],1,0,'C');
        $pdf->Ln(10);
        $pdf->Cell(85,10,'Cabang - Jenjang',1,0,'C');
        $pdf->Cell(85,10,$p['cabang'].' / '.$p['jenjang'],1,0,'C');
        $pdf->Ln(10);
        $pdf->Cell(85,10,'Nama Orang Tua',1,0,'C');
        $pdf->Cell(85,10,$p['nama_ortu'],1,0,'C');
        $pdf->Ln(10);
        $pdf->Cell(85,10,'Telepon Orang Tua',1,0,'C');
        $pdf->Cell(85,10,$p['telepon_ortu'],1,0,'C');
        $pdf->Ln(10);
        $pdf->Cell(85,10,'Email',1,0,'C');
        $pdf->Cell(85,10,$p['email'],1,0,'C');
        $pdf->Ln(10);
        $pdf->Cell(85,10,'Pekerjaan',1,0,'C');
        $pdf->Cell(85,10,$p['pekerjaan'],1,0,'C');
        $pdf->Ln(10);
        $pdf->Cell(85,10,'Pendidikan',1,0,'C');
        $pdf->Cell(85,10,$p['pendidikan'],1,0,'C');
        $pdf->Ln(10);
        $pdf->Cell(85,10,'Alamat',1,0,'C');
        $pdf->Cell(85,10,$p['alamat'],1,0,'C');
        $pdf->Ln(10);
        $pdf->Output();
       }
       

}