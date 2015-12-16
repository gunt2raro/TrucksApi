<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EsqTractor extends Model
{
	// Table definition 
    protected $table = 'esq_tractor_tb';
	// Table primary key
	public $primaryKey = 'esq_tractor_id';
	// model timestamps
	public $timestamps = true;
	//Fillable object
	protected $fillable = array( 'lado_a', 'lado_b', 'frente' );
}//End of EsqTractor model class
