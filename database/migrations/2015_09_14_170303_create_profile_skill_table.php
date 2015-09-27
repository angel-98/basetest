<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('profile_skills', function (Blueprint $table) {
            $table->increments('id');

			$table->integer('profile_id')->unsigned()->index();
			$table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

			$table->integer('categoryskills_id');// 1 o 2

			$table->integer('skill')->unsigned();

			$table->integer('experience')->unsigned();

            $table->timestamps();
        });

		Schema::create('type_skills', function(Blueprint $table){
			$table->increments('id')->index();
			$table->string('type');
		});

		Schema::create('category_skills', function(Blueprint $table){
			$table->increments('id');
			$table->integer('typeskill_id')->unsigned();
			$table->foreign('typeskill_id')->references('id')->on('type_skills')->onDelete('cascade');
			$table->string('type');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category_skills');
        Schema::drop('type_skills');
        Schema::drop('profile_skills');
    }
}
