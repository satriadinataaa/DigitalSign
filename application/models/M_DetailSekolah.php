<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_DetailSekolah extends Eloquent
{
	protected $table		= 'detail_sekolah';
    protected $primaryKey	= 'id';

    public function school(){
        require_once __DIR__ . '/M_Schools.php';
		return $this->belongsTo('M_Schools', 'id_sekolah', 'id');
    }
    
}