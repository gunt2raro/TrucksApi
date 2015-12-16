<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsqCajaTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esq_caja_tb', function (Blueprint $table) {
            $table->increments('esq_caja_id');
			
			$table->integer('caja_id')->unsigned();
			$table->string('lado_a');
			$table->string('lado_b');
			$table->string('puerta_trasera');

            $table->foreign( 'caja_id' )->references( 'caja_id' )->on( 'caja_tb' );
			
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
        Schema::drop('esq_caja_tb');
    }
}
