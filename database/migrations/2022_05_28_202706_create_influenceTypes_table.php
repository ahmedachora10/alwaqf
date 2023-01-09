<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfluenceTypesTable extends Migration {

	public function up()
	{
		Schema::create('influenceTypes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 300);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('influenceTypes');
	}
}