<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
{
    // Running the migration for users table
    Schema::dropIfExists('users');
 
    Schema::create('users', function ($table) {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('email')->unique();
        $table->string('password', 60);
        $table->string('user_type', 10);
        $table->binary('data');
        $table->rememberToken();
        $table->timestamp('last_login');
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
