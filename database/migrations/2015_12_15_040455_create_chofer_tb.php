<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoferTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chofer_tb', function (Blueprint $table) {
            $table->increments( 'chofer_id' );
			$table->string( 'nombre' );
			$table->string( 'apellido_p' );
			$table->string( 'apellido_m' )->nullable();
			$table->string( 'licencia' );
			$table->enum('sexo', ['F', 'M']);
			$table->integer( 'edad' )->nullable();
			$table->date('fecha_nacimiento');
			$table->string( 'foto_url' )->nullable();
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
        Schema::drop('chofer_tb');
    }
}
