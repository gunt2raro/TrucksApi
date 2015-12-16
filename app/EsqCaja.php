<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/***
* EsqCaja controller class
****/
class EsqCaja extends Model
{
	// Table definition 
    protected $table = 'esq_caja_tb';
	// Table primary key
	public $primaryKey = 'esq_caja_id';
	// model timestamps
	public $timestamps = true;
	//Fillable object
	protected $fillable = array( 'lado_a', 'lado_b', 'puerta_trasera' );
}//End of EsqCaja model Class
