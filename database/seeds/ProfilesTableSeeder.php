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
				'estado' => 1,
				'avatar' => NULL,
			),
		));
	}

}
