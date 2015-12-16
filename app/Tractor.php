<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/***
* Tractor
* Model class tractor that extends model
***/
class Tractor extends Model
{
	// Table definition 
    protected $table = 'tractor_tb';
	// Table primary key
	public $primaryKey = 'tractor_id';
	// model timestamps
	public $timestamps = true;
	// fillable object
	protected $fillable = array( 'chofer_id', 'user_id', 'placas', 'id_vehicular', 'num_economico', 'marca' );
}//End of Tractor model class
