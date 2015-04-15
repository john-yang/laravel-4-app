<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('organizations');

		Schema::create('organizations',function($table){
			
			$table->engine = 'InnoDB';
			$table->integer('id');
			$table->string('name',50);
			$table->string('description',500);
			$table->timestamp('created_at');
			$table->timestamp('updated_at');

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
