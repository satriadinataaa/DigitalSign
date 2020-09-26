<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_DokumentasiVideo extends Eloquent
{
	protected $table		= 'dokumentasivideo';
    protected $primaryKey	= 'id';
    
    public function pokja(){
        require_once __DIR__ . '/M_Pokja.php';
		return $this->hasOne('M_Pokja', 'id', 'id_pokja');
    }

}