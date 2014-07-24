<?php

class RolesSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')->insert(array(

			array(
				'id' => 1,
				'name' => 'user',
				'permission' => '',		
			),

			array(
				'id' => 2,
				'name' => 'moderator',
				'permission' => '',		
			),

			array(
				'id' => 3,
				'name' => 'admin',
				'permission' => '',		
			),

        ));

    }

}