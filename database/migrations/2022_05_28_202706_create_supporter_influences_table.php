<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupporterInfluencesTable extends Migration {

	public function up()
	{
		Schema::create('supporter_influences', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('supporter_id')->unsigned();
			$table->integer('influenceType_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('supporter_influences');
	}
}