<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	public function up()
	{
		Schema::create('services', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('serviceType_id')->unsigned();
			$table->string('service_name', 300);
			$table->mediumText('description');
			$table->integer('quantity');
			$table->integer('organization_id')->unsigned();
			$table->string('attachment', 500)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('services');
	}
}