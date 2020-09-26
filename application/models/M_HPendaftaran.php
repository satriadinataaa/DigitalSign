<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_HPendaftaran extends Eloquent
{
	protected $table		= 'judulpendaftaran';
    protected $primaryKey	= 'id';
    
}