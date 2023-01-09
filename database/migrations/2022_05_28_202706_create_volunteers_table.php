<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVolunteersTable extends Migration {

	public function up()
	{
		Schema::create('volunteers', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedBigInteger('user_info_id');
			$table->softDeletes();
			$table->timestamps();
			$table->text('note');
			$table->string('volunteer_type');
		});
	}

	public function down()
	{
		Schema::drop('volunteers');
	}
}