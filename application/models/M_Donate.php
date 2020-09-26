<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_Donate extends Eloquent
{
	protected $table		= 'donasi';
    protected $primaryKey	= 'id_donasi';
    
  

}