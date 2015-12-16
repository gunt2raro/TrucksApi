<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/***
* Dano Esq Tractor Controller Class
****/
class DanoEsqTractor extends Model
{
	// Table definition 
    protected $table = 'dano_esq_tractor_tb';
	// Table primary key
	public $primaryKey = 'dano_esq_tractor_id';
	// model timestamps
	public $timestamps = true;
	//Fillable object
	protected $fillable = array( 'comentario', 'foto_url' );
}//End of DanoEsqTractor model class
