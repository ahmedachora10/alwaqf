<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNationalitiesTable extends Migration {

	public function up()
	{
		Schema::create('nationalities', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('flag')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('nationalities');
	}
}