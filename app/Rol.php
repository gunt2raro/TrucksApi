<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/***
* Rol model class
***/
class Rol extends Model
{
    //Rol table varialbe
	protected $table = 'rol_tb';
	//Table primary key
	public $primaryKey = 'rol_id';
	// model timestamps
	public $timestamps = true;
	//Fillable object
	protected $fillable = array( 'descripcion', 'valor' );
}//End of rol class model
