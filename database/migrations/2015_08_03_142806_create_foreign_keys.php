<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personat', function($table){
			$table->foreign('vendlindja')->references('id')->on('qytet');
			$table->foreign('profesioni')->references('id')->on('profesioni');
			$table->foreign('gjendja_civile')->references('id')->on('gjendja_civile');
		});
		Schema::table('dega', function($table){
			$table->foreign('varet_nga')->references('id')->on('dega');
			$table->foreign('qyteti')->references('id')->on('qytet');
		});
		Schema::table('kontakt', function($table){
			$table->foreign('personi')->references('id')->on('personat');
		});
		Schema::table('info', function($table){
			$table->foreign('personi')->references('id')->on('personat');
			$table->foreign('qendra')->references('id')->on('dega');
			$table->foreign('pozicioni')->references('id')->on('pozicioni');
			$table->foreign('programi')->references('id')->on('programi');
			$table->foreign('gatishmeria')->references('id')->on('gatishmeria');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
