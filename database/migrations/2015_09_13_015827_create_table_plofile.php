<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlofile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('avatar');
			$table->text('resume')->nullable();
			$table->string('github')->nullable();
			$table->string('facebook')->nullable();
			$table->string('twitter')->nullable();
			$table->string('phone')->nullable();
			$table->string('mobile')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
			Schema::drop('profiles');
        });
    }
}
