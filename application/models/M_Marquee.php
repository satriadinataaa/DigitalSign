<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_Marquee extends Eloquent
{
	protected $table		= 'marquee';
    protected $primaryKey	= 'id';
    
}