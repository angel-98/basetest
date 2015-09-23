<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Gerardo Belot   ',
				'email' => 'gbelot2003@hotmail.com',
				'password' => '$2y$10$vLIe1uvpPsFvA3JEcnwvCulWjv/ZQ1eF7qw/h4VrPlb0LUZIOykmy',
				'slug' => 'gerardo-belot',
				'estado' => 1,
				'remember_token' => '0NNeB2GDcZ1CQL0Yt6ZszEseO5u15eeXJX9BdjT5lUorzJJPi1v8S8vZlKMu',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '2015-09-23 18:35:07',
			),
		));
	}

}
