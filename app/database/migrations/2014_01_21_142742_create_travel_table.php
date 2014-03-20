<?php

use Illuminate\Database\Migrations\Migration;

class CreateTravelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travels', function($table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->string('title');
			$table->text('content');
			$table->integer('mark')->default('0');
			$table->string('has_pic')->default('http://placehold.it/300x200');
			$table->timestamps();
		});
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
			Schema::drop('travels');
		//
	}

}
