<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MajorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('majors', function($table){
			$table->increments('id');
			$table->string('name',100);
			$table->string('comment', 255)->nullable();
			$table->boolean('active');
			$table->string('created_by');
			$table->string('updated_by')->nullable();
			//Timestamps will create 'created_at' and 'updated_at' columns
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
		//
	}

}
