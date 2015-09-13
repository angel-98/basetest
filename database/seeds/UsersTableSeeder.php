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
				'slug' => 'gerardo-belot',
				'password' => '$2y$10$OpcKFzqU1hgb53IIKvkKUu3yj9T7OQw5gbPqEN/CjNAGagL5NNUEq',
				'remember_token' => 'f15ysNJHV5uXVC3Auv1c5tMy80gY8Zj45dh9cZuZfIxlrKf2GcSWm2MzYE72',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '2015-09-11 22:50:07',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Gabriel Garcia',
				'slug' => 'gabriel-garcia',
				'email' => 'gerardo.belot@gmail.com',
				'password' => '$2y$10$JX6bUnUVz86RKvHVhqotlepHw76IYHizHpIG5KA4lwjWb3Golkcji',
				'remember_token' => 'AL9LuSoEZyJK5uHGrzoPzRiziyeUgboOr5c7G8iexiHYVIOvQSJ5A2HiyWw0',
				'created_at' => '2015-09-09 20:27:12',
				'updated_at' => '2015-09-09 20:31:24',
			),
		));
	}

}
