<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('profiles')->delete();
        
		\DB::table('profiles')->insert(array (
			0 => 
			array (
				'id' => 1,
				'user_id' => 1,
				'avatar' => 'avatar-001.jpg',
				'label' => NULL,
				'resume' => NULL,
				'github' => NULL,
				'facebook' => NULL,
				'twitter' => NULL,
				'phone' => NULL,
				'mobile' => NULL,
			),
			1 => 
			array (
				'id' => 2,
				'user_id' => 2,
				'avatar' => 'avatar-001.jpg',
				'label' => NULL,
				'resume' => NULL,
				'github' => NULL,
				'facebook' => NULL,
				'twitter' => NULL,
				'phone' => NULL,
				'mobile' => NULL,
			),
			2 => 
			array (
				'id' => 3,
				'user_id' => 3,
				'avatar' => 'avatar-001.jpg',
				'label' => NULL,
				'resume' => NULL,
				'github' => NULL,
				'facebook' => NULL,
				'twitter' => NULL,
				'phone' => NULL,
				'mobile' => NULL,
			),
		));
	}

}
