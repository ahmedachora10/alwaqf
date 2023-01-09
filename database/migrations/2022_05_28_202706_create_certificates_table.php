<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCertificatesTable extends Migration {

	public function up()
	{
		Schema::create('certificates', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('beneficiary_id')->unsigned();
			$table->string('certificate_name')->nullable();
			$table->date('certificate_date')->nullable();
			$table->string('note')->nullable();
			$table->string('attachment')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('certificates');
	}
}