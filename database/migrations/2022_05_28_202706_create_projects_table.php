<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 500);
			$table->text('description');
			$table->integer('management_id')->unsigned();
			$table->date('start_date')->nullable();
			$table->date('end_date');
			$table->string('attachment');
			$table->string('note');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('projects');
	}
}