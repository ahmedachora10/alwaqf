<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	public function up()
	{
		Schema::create('payments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('supporter_id')->unsigned();
			$table->double('amount', 8,2)->default('0');
			$table->integer('paymentMethod_id')->unsigned();
			$table->string('attachment');
			$table->string('note');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('payments');
	}
}