<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExperiencesTable extends Migration {

	public function up()
	{
		Schema::create('experiences', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('beneficiary_id')->unsigned();
			$table->string('job_title');
			$table->string('company');
			$table->date('start_date');
			$table->date('end_date');
			$table->string('note');
			$table->string('attachment')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('experiences');
	}
}