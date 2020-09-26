<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_Users extends Eloquent
{
	protected $table		= 'users';
    protected $primaryKey	= 'id';
    
    public function schools(){
        require_once __DIR__ . '/M_Schools.php';
		return $this->belongsTo('M_Schools', 'school', 'id');
    }

}