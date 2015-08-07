<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNjohuriShtesesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('njohuri_shtese', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('njohuri_shtese',50);
			$table->timestamps();
		});

		Schema::create('njohuri_person', function(Blueprint $table){
			$table->integer('njohuri')->unsigned();
			$table->foreign('njohuri')->references('id')->on('njohuri_shtese');
			$table->integer('personi')->unsigned();
			$table->foreign('personi')->references('id')->on('personat');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('njohuri_shtese');
	}

}
