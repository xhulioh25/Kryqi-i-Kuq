<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetGrupisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('target_grupi', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('grupi',50);
			$table->string('pershkrim',255);
			$table->integer('programi')->unsigned();//fk target grupi -> programi
			$table->timestamps();
		});
		Schema::create('programi_target_grupi', function(Blueprint $table){
			$table->integer('programi')->unsigned();
			$table->foreign('programi')->references('id')->on('programi');
			$table->integer('target_grupi')->unsigned();
			$table->foreign('target_grupi')->references('id')->on('target_grupi');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('target_grupi');
	}

}
