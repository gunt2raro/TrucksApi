<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caja_tb', function (Blueprint $table) {
            $table->increments( 'caja_id' );
            $table->integer( 'tractor_id' )->unsigned();
            $table->string( 'num_identificador' );
            $table->string( 'num_economico' );
            $table->string( 'placa' );
            $table->foreign( 'tractor_id' )->references( 'tractor_id' )->on( 'tractor_tb' );
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
        Schema::drop('caja_tb');
    }
}
