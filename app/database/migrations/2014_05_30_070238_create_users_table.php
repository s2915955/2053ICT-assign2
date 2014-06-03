<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password')->index();
			$table->string('remember_token');
			$table->string('name');
			$table->integer('category');
			$table->string('phone');
			$table->binary('photo');
			$table->string('industry');
			$table->string('description');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}
}