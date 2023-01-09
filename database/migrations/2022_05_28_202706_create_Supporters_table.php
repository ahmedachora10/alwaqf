<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupportersTable extends Migration {

	public function up()
	{
		Schema::create('supporters', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedBigInteger('user_info_id');
			$table->integer('membershipType_id')->unsigned();
			$table->string('membership_id');
			$table->string('description', 500);
			$table->integer('specialty_id')->unsigned();
			$table->integer('referral_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
			$table->string('bank_account')->nullable();
			$table->string('work')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('supporters');
	}
}