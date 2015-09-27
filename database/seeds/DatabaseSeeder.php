<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Model::reguard();
    	$this->call('UsersTableSeeder');
		$this->call('ProfilesTableSeeder');
		$this->call('PermissionsTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('PermissionRoleTableSeeder');
		$this->call('RoleUserTableSeeder');
		$this->call('TypeSkillsTableSeeder');
		$this->call('CategorySkillsTableSeeder');
	}
}
