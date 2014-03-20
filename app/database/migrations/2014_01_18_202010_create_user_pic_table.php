<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserPicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
			Schema::create('userpics',function($table){
					$table->engine	=	'InnoDB';
					$table->increments('id')->unsigned();
					$table->integer('user_id')->unsigned();
					$table->timestamps();
					$table->string('pic_url');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
			Schema::drop('userpics');
		//
	}

}
