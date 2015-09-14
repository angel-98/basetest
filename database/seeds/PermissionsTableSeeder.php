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
				'slug' => 'config-menu',
				'description' => 'Permiso para acceder al menú de configuraciones',
				'created_at' => '2015-09-14 15:25:33',
				'updated_at' => '2015-09-14 15:34:46',
			),
			1 => 
			array (
				'id' => 3,
				'name' => 'user.edit',
				'slug' => 'user-edit',
				'description' => 'Permiso para editar usuarios',
				'created_at' => '2015-09-14 15:25:56',
				'updated_at' => '2015-09-14 15:25:56',
			),
			2 => 
			array (
				'id' => 4,
				'name' => 'users.create',
				'slug' => 'perms-roles',
				'description' => 'Permiso para creación y edición de usuarios',
				'created_at' => '2015-09-14 15:27:05',
				'updated_at' => '2015-09-14 15:33:51',
			),
			3 => 
			array (
				'id' => 5,
				'name' => 'user.delete',
				'slug' => 'profile-access',
				'description' => 'Permiso para eliminar usuarios',
				'created_at' => '2015-09-14 15:27:32',
				'updated_at' => '2015-09-14 15:34:19',
			),
			4 => 
			array (
				'id' => 6,
				'name' => 'perms.roles.create',
				'slug' => 'perms-roles-create',
				'description' => 'Permisos para editar y crear permisos y roles',
				'created_at' => '2015-09-14 15:35:24',
				'updated_at' => '2015-09-14 15:35:24',
			),
			5 => 
			array (
				'id' => 7,
				'name' => 'perms.roles.delete',
				'slug' => 'perms-roles-delete',
				'description' => 'Permisos para eliminar permisos y roles',
				'created_at' => '2015-09-14 15:35:42',
				'updated_at' => '2015-09-14 15:35:42',
			),
		));
	}

}
