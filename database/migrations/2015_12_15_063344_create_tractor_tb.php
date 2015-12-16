<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTractorTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tractor_tb', function (Blueprint $table) {
            $table->increments('tractor_id' );
			$table->integer('chofer_id')->unsigned();
			$table->integer('user_id')->unsigned();
            $table->string( 'placas' );
            $table->string( 'id_vehicular' );
            $table->string( 'num_economico' );
            $table->string( 'marca' );
            $table->foreign( 'chofer_id' )->references( 'chofer_id' )->on( 'chofer_tb' );
            $table->foreign( 'user_id' )->references( 'id' )->on( 'users' );
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
        Schema::drop('tractor_tb');
    }
}
