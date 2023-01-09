<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillsTable extends Migration {

	public function up()
	{
		Schema::create('skills', function(Blueprint $table) {
			$table->increments('id');
			$table->string('skill_name');
			$table->integer('beneficiary_id')->unsigned();
			$table->string('skill_level');
			$table->string('skill_certificate')->nullable();
			$table->date('skill_date')->nullable();
			$table->string('note')->nullable();
			$table->string('attachment')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('skills');
	}
}