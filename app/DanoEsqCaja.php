<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/***
* Dano Esq Caja controller class
*
***/
class DanoEsqCaja extends Model
{
	// Table definition 
    protected $table = 'dano_esq_caja_tb';
	// Table primary key
	public $primaryKey = 'dano_esq_caja_id';
	// model timestamps
	public $timestamps = true;
	//Fillable object
	protected $fillable = array( 'comentario', 'foto_url' );
}//End of dano esq caja controller class
