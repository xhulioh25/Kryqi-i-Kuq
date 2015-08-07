<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontaktsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kontakt', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('personi')->unsigned();//fk kontakt -> person
			$table->string('email',30);
			$table->string('celular',8);
			$table->string('telefon',8);
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
		Schema::drop('kontakt');
	}

}
