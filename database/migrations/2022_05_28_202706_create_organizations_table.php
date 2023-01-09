<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganizationsTable extends Migration {

	public function up()
	{
		Schema::create('organizations', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 700);
			$table->string('manager', 300)->nullable();
			$table->string('email', 300)->nullable();
			$table->text('description')->nullable();
			$table->string('phone', 100)->nullable();
			$table->string('website', 1000);
			$table->string('mobile', 100);
			$table->text('note')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('organizations');
	}
}