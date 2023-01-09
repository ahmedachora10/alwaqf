<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateManagementsTable extends Migration {

	public function up()
	{
		Schema::create('managements', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedBigInteger('user_info_id');
			$table->string('title');
			$table->string('note', 300);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('managements');
	}
}