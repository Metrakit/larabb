<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SettingsMigrate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the 'settings' table
		Schema::create('settings', function($table)
		{
			$table->engine = 'Innodb';
			$table->increments('id');
			$table->string('label');
			$table->string('value');	
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
