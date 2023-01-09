<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVolunteerLogsTable extends Migration {

	public function up()
	{
		Schema::create('volunteer_logs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('volunteer_id')->unsigned();
			$table->string('name', 200);
			$table->integer('hours')->nullable();
			$table->text('note')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('volunteer_logs');
	}
}