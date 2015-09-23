<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('role_user')->delete();
        
		\DB::table('role_user')->insert(array (
			0 => 
			array (
				'id' => 2,
				'role_id' => 1,
				'user_id' => 1,
				'created_at' => '2015-09-17 16:11:21',
				'updated_at' => '2015-09-17 16:11:21',
			),
		));
	}

}
