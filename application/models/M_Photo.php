<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_Photo extends Eloquent
{
	protected $table		= 'photo';
    protected $primaryKey	= 'id';
    
    public function albumPhoto(){
        require_once __DIR__ . '/M_AlbumPhoto.php';
		return $this->belongsTo('M_AlbumPhoto', 'album', 'id');
    }

}