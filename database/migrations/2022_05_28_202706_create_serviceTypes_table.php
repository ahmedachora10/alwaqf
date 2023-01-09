<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceTypesTable extends Migration {

	public function up()
	{
		Schema::create('serviceTypes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 300);
			$table->string('descriptoin');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('serviceTypes');
	}
}