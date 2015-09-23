<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('permission_role')->delete();
        
		\DB::table('permission_role')->insert(array (
			0 => 
			array (
				'id' => 8,
				'permission_id' => 8,
				'role_id' => 2,
				'created_at' => '2015-09-17 16:19:10',
				'updated_at' => '2015-09-17 16:19:10',
			),
			1 => 
			array (
				'id' => 9,
				'permission_id' => 8,
				'role_id' => 3,
				'created_at' => '2015-09-17 16:19:19',
				'updated_at' => '2015-09-17 16:19:19',
			),
			2 => 
			array (
				'id' => 11,
				'permission_id' => 2,
				'role_id' => 1,
				'created_at' => '2015-09-23 16:14:46',
				'updated_at' => '2015-09-23 16:14:46',
			),
			3 => 
			array (
				'id' => 12,
				'permission_id' => 9,
				'role_id' => 1,
				'created_at' => '2015-09-23 16:14:46',
				'updated_at' => '2015-09-23 16:14:46',
			),
			4 => 
			array (
				'id' => 14,
				'permission_id' => 10,
				'role_id' => 1,
				'created_at' => '2015-09-23 18:05:55',
				'updated_at' => '2015-09-23 18:05:55',
			),
		));
	}

}
