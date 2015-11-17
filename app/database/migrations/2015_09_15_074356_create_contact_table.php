<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//this is the contact us table schema
		Schema::create('contact', function($table) {
                $table->increments('id');
                $table->string('name', 128);
                $table->string('email', 128);
                $table->string('url', 60);
                $table->string('subject', 60);
                $table->text('message');
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
		//dropping the table
		Schema::drop('contact');
	}

}
