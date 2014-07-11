<?php

class SettingsSeeder extends Seeder {

    public function run()
    {
        DB::table('settings')->delete();

        DB::table('settings')->insert(array(
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
			)

        ));

    }

}