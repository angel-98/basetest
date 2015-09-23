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
			1 => 
			array (
				'id' => 2,
				'name' => 'editor',
				'slug' => 'editor',
				'description' => 'Editor de blogs propios en el portal',
				'created_at' => '2015-09-17 16:14:41',
				'updated_at' => '2015-09-17 16:14:41',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'usuario.registrado',
				'slug' => 'usuario-registrado',
				'description' => 'Rol de usuario registrado en el sistema para fines de prueba.',
				'created_at' => '2015-09-17 16:16:04',
				'updated_at' => '2015-09-17 16:16:04',
			),
		));
	}

}
