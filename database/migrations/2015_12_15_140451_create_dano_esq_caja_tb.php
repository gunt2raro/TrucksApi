<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanoEsqCajaTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dano_esq_caja_tb', function (Blueprint $table) {
			
            $table->increments('dano_esq_caja_id');
			
			$table->integer( 'esq_caja_id' )->unsigned();
			$table->text( 'comentario' );
			$table->string( 'foto_url' );
			
            $table->foreign( 'esq_caja_id' )->references( 'esq_caja_id' )->on( 'esq_caja_tb' );
			
            $table->timestamps();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dano_esq_caja_tb');
    }
}
