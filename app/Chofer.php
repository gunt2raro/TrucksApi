<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/***
* Chofer model class
* @description - xxx
***/
class Chofer extends Model
{
	// Table definition 
    protected $table = 'chofer_tb';
	// Table primary key
	public $primaryKey = 'chofer_id';
	// model timestamps
	public $timestamps = true;
	//Fillable
	protected $fillable = array('nombre', 'apellido_p', 'apellido_m', 'licencia', 'sexo', 'foto_url');
}//End of chofer model class