<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_AlbumPhoto extends Eloquent
{
	protected $table		= 'photoalbum';
    protected $primaryKey	= 'id';
    
    public function photo(){
        require_once __DIR__ . '/M_Photo.php';
		return $this->hasMany('M_Photo', 'album', 'id');
    }

}