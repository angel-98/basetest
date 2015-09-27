<?php

use Illuminate\Database\Seeder;

class CategorySkillsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('category_skills')->delete();
        
		\DB::table('category_skills')->insert(array (
			0 => 
			array (
				'id' => 1,
				'typeskill_id' => 1,
				'type' => 'PHP',
			),
			1 => 
			array (
				'id' => 2,
				'typeskill_id' => 1,
				'type' => 'Javascript',
			),
			2 => 
			array (
				'id' => 3,
				'typeskill_id' => 1,
				'type' => 'Java',
			),
			3 => 
			array (
				'id' => 4,
				'typeskill_id' => 1,
				'type' => 'Python',
			),
			4 => 
			array (
				'id' => 5,
				'typeskill_id' => 1,
				'type' => 'Ruby',
			),
			5 => 
			array (
				'id' => 6,
				'typeskill_id' => 2,
				'type' => 'Laravel',
			),
			6 => 
			array (
				'id' => 7,
				'typeskill_id' => 2,
				'type' => 'KumbiaPHP',
			),
			7 => 
			array (
				'id' => 8,
				'typeskill_id' => 2,
				'type' => 'Angular',
			),
			8 => 
			array (
				'id' => 9,
				'typeskill_id' => 2,
				'type' => 'Rails',
			),
			9 => 
			array (
				'id' => 10,
				'typeskill_id' => 2,
				'type' => 'Drupal',
			),
			10 => 
			array (
				'id' => 11,
				'typeskill_id' => 2,
				'type' => 'Joomla',
			),
		));
	}

}
