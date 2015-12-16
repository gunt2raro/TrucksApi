<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsqTractorTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esq_tractor_tb', function (Blueprint $table) {
			
            $table->increments('esq_tractor_id');
			
			$table->integer('tractor_id')->unsigned();
			$table->string('lado_a');
			$table->string('lado_b');
			$table->string('frente');

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
        Schema::drop('esq_tractor_tb');
    }
}
