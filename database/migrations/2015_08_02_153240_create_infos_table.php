<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('personi')->unsigned();
			$table->integer('qendra')->unsigned();
			$table->integer('pozicioni')->unsigned();
			$table->integer('programi')->unsigned();
			$table->boolean('disponimi');
			$table->integer('gatishmeria')->unsigned();
			$table->date('koha')->nullable();
			$table->date('rregjistrimi');
			$table->date('viti_i_fundit')->nullable();
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
		Schema::drop('info');
	}

}
