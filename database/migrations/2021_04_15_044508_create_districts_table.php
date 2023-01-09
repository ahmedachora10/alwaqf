<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDistrictsTable extends Migration {

	public function up()
	{
		Schema::create('districts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('distric', 300);
			$table->string('city', 300)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('districts');
	}
}