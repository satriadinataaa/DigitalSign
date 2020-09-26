<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_Pokja extends Eloquent
{
	protected $table		= 'pokja';
    protected $primaryKey	= 'id';
    
    public function dokumentasi(){
        require_once __DIR__ . '/M_Dokumentasi.php';
		return $this->hasMany('M_Dokumentasi', 'id_dokumentasi', 'id');
    }
    public function dokumentasivideo(){
        require_once __DIR__ . '/M_DokumentasiVideo.php';
		return $this->hasMany('M_DokumentasiVideo', 'id_dokumentasi', 'id');
    }

}