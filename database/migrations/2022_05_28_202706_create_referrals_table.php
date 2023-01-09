<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReferralsTable extends Migration {

	public function up()
	{
		Schema::create('referrals', function(Blueprint $table) {
			$table->increments('id');
			$table->enum('type', array('user', 'form', 'community', 'other'));
			$table->string('value', 500)->nullable();
			$table->integer('referrer_user_id')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('referrals');
	}
}