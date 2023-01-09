<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContributionTypesTable extends Migration {

	public function up()
	{
		Schema::create('contributionTypes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 300);
			$table->timestamps();
			$table->string('note');
		});
	}

	public function down()
	{
		Schema::drop('contributionTypes');
	}
}