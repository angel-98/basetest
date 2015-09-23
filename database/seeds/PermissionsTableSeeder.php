<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('permissions')->delete();
        
		\DB::table('permissions')->insert(array (
			0 => 
			array (
				'id' => 2,
				'name' => 'config.menu.access',
				'slug' => 'config-menu-access',
				'description' => 'Permiso para acceder al menú de configuraciones',
				'created_at' => '2015-09-14 15:25:33',
				'updated_at' => '2015-09-14 15:34:46',
			),
			1 => 
			array (
				'id' => 8,
				'name' => 'own.profile.edit',
				'slug' => 'own-profile-edit',
				'description' => 'Permisos para editar perfil propio',
				'created_at' => '2015-09-17 16:17:42',
				'updated_at' => '2015-09-17 16:17:42',
			),
			2 => 
			array (
				'id' => 9,
				'name' => 'config.menu.user.access',
				'slug' => 'config-menu-user-access',
				'description' => 'Permisos para acceder a menú de usuarios roles y permisos',
				'created_at' => '2015-09-23 15:20:42',
				'updated_at' => '2015-09-23 15:20:42',
			),
			3 => 
			array (
				'id' => 10,
				'name' => 'profile.edit.full.access',
				'slug' => 'profile-edit-full-access',
				'description' => 'Permiso para editar cualquier perfil',
				'created_at' => '2015-09-23 18:05:05',
				'updated_at' => '2015-09-23 18:05:05',
			),
			4 => 
			array (
				'id' => 11,
				'name' => 'admin.access.full',
				'slug' => 'admin-access-full',
				'description' => 'Acceso a toda el área administrativa de roles, permisos y usuarios',
				'created_at' => '2015-09-23 18:12:06',
				'updated_at' => '2015-09-23 18:12:06',
			),
		));
	}

}
