<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('roles')->delete();
        
		\DB::table('roles')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'owner',
				'slug' => 'owner',
				'description' => 'Permisos de administración total en el sistema',
				'created_at' => '2015-09-14 15:36:38',
				'updated_at' => '2015-09-14 15:36:38',
			),
		));
	}

}
