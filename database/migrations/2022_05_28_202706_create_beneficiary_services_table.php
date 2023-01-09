<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeneficiaryServicesTable extends Migration {

	public function up()
	{
		Schema::create('beneficiary_services', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('beneficiary_id')->unsigned();
			$table->integer('service_id')->unsigned();
			$table->integer('quantity')->nullable();
			$table->text('note')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('beneficiary_services');
	}
}