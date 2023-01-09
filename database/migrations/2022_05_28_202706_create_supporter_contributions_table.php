<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupporterContributionsTable extends Migration {

	public function up()
	{
		Schema::create('supporter_contributions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('contributionType_id')->unsigned();
			$table->integer('supporter_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('supporter_contributions');
	}
}