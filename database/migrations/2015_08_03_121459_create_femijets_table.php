<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFemijetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('femijet', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('emer');
			$table->string('mbiemer');
			$table->timestamps();
		});
		Schema::create('femijet_prinderit', function(Blueprint $table){
			$table->integer('femijet')->unsigned();
			$table->foreign('femijet')->references('id')->on('femijet');
			$table->integer('prinderit')->unsigned();
			$table->foreign('prinderit')->references('id')->on('personat');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('femijets');
	}

}
