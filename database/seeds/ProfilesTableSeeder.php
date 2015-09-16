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
				'avatar' => '37971_1569181752651_3508792_n.jpg',
				'label' => 'WebApp Developer',
				'resume' => '									
<span style="font-weight: normal;">Amante del desarrollo y la programación en general, mas oriento mas hacia las tecnologías de desarrollo web y </span><span style="font-weight: bold;">back-end</span><span style="font-weight: normal;">, acostumbrado a trabajar con diferentes </span><span style="font-weight: bold;">frameworks</span> tanto en el <span style="font-weight: bold;">front-end </span>como el <span style="font-weight: bold;">back-end</span>. Trabajo de preferencia<span style="font-weight: bold;"> "API First"</span> siempre pensando en <span style="font-weight: bold;">"Mejores practicas recomendadas" </span>y en un esquema de desarrollo ágil. <div style="font-weight: normal;"><br><div><span style="font-weight: normal;">Trabajo con </span><span style="font-weight: bold;">git</span> como base para el control de versiones, y trato de planificar los proyectos en base al <span style="font-weight: bold;">workflow</span> recomendado para cada situación.</div><div><br></div><div>Explorar, entender y aprender son sinónimos de mi trabajo, me gusta estar actualizado siempre al tanto de las ultimas novedades de mis herramientas de trabajo. </div><div style="font-weight: normal;"><br></div>

</div>






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
