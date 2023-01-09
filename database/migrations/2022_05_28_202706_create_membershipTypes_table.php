<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembershipTypesTable extends Migration {

	public function up()
	{
		Schema::create('membershipTypes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 300);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('membershipTypes');
	}
}