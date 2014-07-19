<?php

class RolesSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')->insert(array(

        	// Modules settings
			array(
				'label' => 'module_forum',
				'value' => true		
			),
			array(
				'label' => 'module_user',
				'value' => true		
			),
			array(
				'label' => 'module_shop',
				'value' => true		
			),
			array(
				'label' => 'module_gallery',
				'value' => true		
			),
			array(
				'label' => 'module_search',
				'value' => true		
			)

        ));

    }

}