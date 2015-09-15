<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('profiles')->delete();
        
		\DB::table('profiles')->insert(array (
			0 => 
			array (
				'id' => 1,
				'user_id' => 1,
				'avatar' => 'untitled.bmp',
				'label' => 'WebApp Developer',
				'resume' => '<blockquote><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Aenean risus? Risus cursus! Dis elit rhoncus cum a enim, augue in turpis placerat cum ultrices adipiscing? Habitasse? Eros dapibus ultricies? In dolor amet diam proin odio, porta, penatibus ut eu augue, ultrices mauris porttitor, aliquam! Massa! A phasellus, in proin cras? Elit tempor hac! Mattis eu nisi, ac, et amet tristique, sit massa, ridiculus placerat ultrices, egestas quis vel! Montes mattis sagittis dolor magna, platea, ut, integer in. Ut ultricies scelerisque in magna augue. Sociis dignissim lorem enim dapibus porta natoque massa duis! Mattis, nisi sed nisi? Mauris ut magnis mus? Phasellus magna lacus? Et auctor ultricies penatibus arcu pulvinar! Tristique. Cras nec! Sociis elit massa porttitor, cras augue hac sociis. Pellentesque parturient, ac porttitor, risus mauris turpis! Duis.</p></blockquote>
<p style="margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; font-family: arial; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">In proin diam. Mauris aenean! Ultricies ac, amet pid etiam sit! Diam. In turpis, enim, augue cursus placerat adipiscing scelerisque odio, enim et sed arcu odio! Enim, tincidunt augue? Sociis rhoncus! Elit, penatibus purus, et rhoncus integer non nisi lectus, quis mattis duis mattis, tincidunt ut integer? Nascetur! Ac montes elementum, eu cursus a ac tincidunt pulvinar ac integer, dictumst sagittis pid, a nunc sit massa! Platea porta porttitor enim odio mus mus dolor urna placerat nunc ultrices natoque amet in ac pulvinar dignissim, urna lundium. Lundium nunc pellentesque! Nunc hac nunc augue in natoque magna nisi habitasse? Vel odio mattis mauris porta, turpis, odio duis ut, magna ac, ac pid vel montes. In rhoncus enim. Facilisis arcu lectus.&nbsp;</p>															






',
				'github' => 'https://github.com/gbelot2003/',
				'facebook' => 'https://www.facebook.com/gerardo.belot',
				'twitter' => '@gbelot2003',
				'phone' => '',
				'mobile' => '+50432587511',
			),
			1 => 
			array (
				'id' => 2,
				'user_id' => 2,
				'avatar' => 'avatar-001.jpg',
				'label' => NULL,
				'resume' => NULL,
				'github' => NULL,
				'facebook' => NULL,
				'twitter' => NULL,
				'phone' => NULL,
				'mobile' => NULL,
			),
			2 => 
			array (
				'id' => 3,
				'user_id' => 3,
				'avatar' => 'avatar-001.jpg',
				'label' => NULL,
				'resume' => NULL,
				'github' => NULL,
				'facebook' => NULL,
				'twitter' => NULL,
				'phone' => NULL,
				'mobile' => NULL,
			),
		));
	}

}
