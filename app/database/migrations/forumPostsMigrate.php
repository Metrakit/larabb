<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class forumPostsMigrate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the 'forum_posts' table
		Schema::create('forum_posts', function(Blueprint $table)
	    {
	    	$table->engine = 'Innodb';
	        $table->increments('id');
	        $table->string('title'); 
	        $table->text('text'); 
	        $table->integer('poster_id');
	        $table->string('poster_name', 40);  
	        $table->timestamp('creation_time')->default('CURRENT_TIMESTAMP');	
	        $table->timestamp('update_time')->default('CURRENT_TIMESTAMP');	         
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
