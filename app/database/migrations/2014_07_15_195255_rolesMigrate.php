<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RolesMigrate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the 'roles' table
		Schema::create('roles', function(Blueprint $table)
	    {
	        $table->tinyinteger('id');
	        $table->string('name', 20); 
	        $table->string('permission');      
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
