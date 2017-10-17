<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CheckHypothesisLab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('hl_sex', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('name', 25);
	    });
	    Schema::create('hl_survival', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('name', 25);
	    });
	    Schema::create('hl_shock_type', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('name', 25);
	    });
	    Schema::create('hl_init_final', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('name', 25);
	    });
        Schema::create('hl_pations', function (Blueprint $table) {
        	$table->integer('id')->unsigned();
        	$table->integer('age');
        	$table->integer('height');
        	$table->integer('sex_id')->unsigned();
        	$table->integer('survival_id')->unsigned();
        	$table->integer('shock_type_id')->unsigned();
        	$table->integer('sp');
        	$table->integer('map');
        	$table->integer('hr');
        	$table->integer('dp');
        	$table->integer('mvp');
        	$table->integer('bsa');
        	$table->integer('ci');
        	$table->integer('at');
        	$table->integer('mct');
        	$table->integer('uo');
        	$table->integer('pvi');
        	$table->integer('rci');
        	$table->integer('hgb');
        	$table->integer('hct');
        	$table->integer('init_final_id')->unsigned();
        	$table->foreign('sex_id')->references('id')->on('hl_sex')->onDelete('cascade');
	        $table->foreign('survival_id')->references('id')->on('hl_survival')->onDelete('cascade');
	        $table->foreign('shock_type_id')->references('id')->on('hl_shock_type')->onDelete('cascade');
	        $table->foreign('init_final_id')->references('id')->on('hl_init_final')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hl_pations');
	    Schema::dropIfExists('hl_sex');
	    Schema::dropIfExists('hl_survival');
	    Schema::dropIfExists('hl_shock_type');
	    Schema::dropIfExists('hl_init_final');
    }
}
