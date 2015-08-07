<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personat', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('emer');
			$table->string('mbiemer');
			$table->integer('vendlindja')->unsigned();//fk person -> qytet
			$table->date('datelindja');
			$table->integer('profesioni')->unsigned();//fk person -> profesion
			$table->boolean('gjinia');
			$table->integer('gjendja_civile')->unsigned();//fk person -> gjendja_civile
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
		Schema::drop('personat');
	}

}
