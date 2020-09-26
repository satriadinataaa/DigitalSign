<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_Schools extends Eloquent
{
	protected $table		= 'schools';
    protected $primaryKey	= 'id';

    public function users(){
        require_once __DIR__ . '/M_Users.php';
		return $this->hasMany('M_Users', 'school', 'id');
    }

    public function data_sekolah(){
        require_once __DIR__ . '/M_DataSekolah.php';
		return $this->hasOne('M_DataSekolah', 'id_sekolah', 'id');
    }
    
}