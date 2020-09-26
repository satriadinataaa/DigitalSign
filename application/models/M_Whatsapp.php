<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_Whatsapp extends Eloquent
{
	protected $table		= 'whatsapp';
    protected $primaryKey	= 'id';
    
}