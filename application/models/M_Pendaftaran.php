<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_Pendaftaran extends Eloquent
{
	protected $table		= 'pendaftaran';
    protected $primaryKey	= 'id';
    
}