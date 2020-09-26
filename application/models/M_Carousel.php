<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class M_Carousel extends Eloquent
{
	protected $table		= 'carousel';
    protected $primaryKey	= 'id';
    
}