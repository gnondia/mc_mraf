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
		//create users table to hold user information here...
		Schema::create('users', function($table) {
                $table->increments('id');
                $table->string('name', 128);
                $table->string('email', 128);
                $table->string('password', 256);
                $table->string('cpassword', 256);
                $table->string('remember_token', 256)->nullable();
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
		Schema::drop('users');
	}

}
