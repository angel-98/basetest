<?php

use Illuminate\Database\Seeder;

class TypeSkillsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('type_skills')->delete();
        
		\DB::table('type_skills')->insert(array (
			0 => 
			array (
				'id' => 1,
				'type' => 'Conocimiento y experiencia',
			),
			1 => 
			array (
				'id' => 2,
				'type' => 'Plataformas conocidas',
			),
		));
	}

}
