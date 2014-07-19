<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class forumForumsMigrate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the 'forum_forums' table
		Schema::create('forum_forums', function(Blueprint $table)
	    {
	    	$table->engine = 'Innodb';
	        $table->increments('id');
	        $table->string('name'; 
	        $table->text('description');      
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
