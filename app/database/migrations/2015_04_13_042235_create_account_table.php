<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('accounts');

		Schema::create('accounts',function($table){
			
			$table->engine = 'InnoDB';
			$table->string('id',50);
			$table->string('name',50);
			$table->string('access_key',50);
			$table->string('secret_key',50);
			$table->integer('organization');
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
