<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersMigrate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the 'users' table
		Schema::create('users', function(Blueprint $table)
	    {
	        $table->increments('id');
	        $table->string('name')->unique();
	        $table->string('email')->unique();
	        $table->string('password');
	        $table->smallInteger('role');
	        $table->timestamps();
	        $table->string('remember_token');        
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
