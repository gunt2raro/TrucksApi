<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanoEsqTractorTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dano_esq_tractor_tb', function (Blueprint $table) {
            
            $table->increments('dano_esq_tractor_id');
			
			$table->integer( 'esq_tractor_id' )->unsigned();
			$table->text( 'comentario' );
			$table->string( 'foto_url' );
			
            $table->foreign( 'esq_tractor_id' )->references( 'esq_tractor_id' )->on( 'esq_tractor_tb' );
			
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
        Schema::drop('dano_esq_tractor_tb');
    }
}
