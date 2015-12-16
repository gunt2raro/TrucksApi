<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/***
* Caja model class
***/
class Caja extends Model
{
	// Table definition 
    protected $table = 'caja_tb';
	// Table primary key
	public $primaryKey = 'caja_id';
	// model timestamps
	public $timestamps = true;
	//Fillable
	protected $fillable = array( 'num_identificador', 'num_economico', 'placa', 'created_at' );
}//End of caja model class