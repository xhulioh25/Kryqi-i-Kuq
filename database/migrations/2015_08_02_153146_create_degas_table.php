<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDegasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dega', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('dega',50);
			$table->integer('varet_nga')->unsigned()->nullable();
			$table->integer('qyteti')->unsigned();
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
		Schema::drop('dega');
	}

}
