<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_Berita extends Eloquent
{
	protected $table		= 'berita';
    protected $primaryKey	= 'id';
    
}