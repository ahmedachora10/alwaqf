<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNecessitiesTable extends Migration {

	public function up()
	{
		Schema::create('necessities', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('beneficiary_id')->unsigned();
			$table->string('name')->nullable();
			$table->text('note')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('necessities');
	}
}