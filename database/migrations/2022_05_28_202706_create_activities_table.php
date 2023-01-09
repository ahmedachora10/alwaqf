<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitiesTable extends Migration {

	public function up()
	{
		Schema::create('activities', function(Blueprint $table) {
			$table->increments('id');
			$table->string('activity_name');
			$table->string('activity_code')->nullable();
			$table->string('plan_code');
			$table->text('description');
			$table->integer('quantity')->nullable();
			$table->integer('monthly_cost')->nullable();
			$table->string('target_class');
			$table->integer('management_id')->unsigned();
			$table->date('start_date')->nullable();
			$table->date('end_date')->nullable();
			$table->string('attachment')->nullable();
			$table->string('note');
			$table->boolean('is_done');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('activities');
	}
}