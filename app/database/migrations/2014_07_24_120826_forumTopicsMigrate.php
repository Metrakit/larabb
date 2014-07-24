<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class forumTopicsMigrate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the 'forum_topics' table
		Schema::create('forum_topics', function(Blueprint $table)
	    {
	    	$table->engine = 'Innodb';
	        $table->increments('id');
	        $table->string('title'); 
	        $table->integer('owner_id');
	        $table->string('owner_name', 40);  
	        $table->integer('first_post_id');
	        $table->integer('last_post_id');
	        $table->integer('last_poster_id');
	        $table->string('last_poster_name', 40); 
	        $table->timestamp('last_post_time');
	        $table->timestamp('creation_time');
	        $table->boolean('locked')->default(false);   	        
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
