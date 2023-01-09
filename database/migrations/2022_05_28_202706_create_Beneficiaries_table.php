<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeneficiariesTable extends Migration {

	public function up()
	{
		Schema::create('beneficiaries', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedBigInteger('user_info_id');
			$table->string('membership_id')->nullable();
			$table->date('date_of_birth')->nullable();
			$table->integer('id_number')->nullable();
			$table->date('id_date')->nullable();
			$table->string('id_occupation')->nullable();
			$table->string('marital_status')->nullable();
			$table->string('education_level')->nullable();
			$table->string('major')->nullable();
			$table->string('address')->nullable();
			$table->string('house_ownership')->nullable();
			$table->string('house_type')->nullable();
			$table->integer('family_members')->nullable();
			$table->integer('family_male_members')->nullable();
			$table->string('family_female_members')->nullable();
			$table->integer('rank_in_family')->nullable();
			$table->integer('nationality_id')->unsigned()->nullable();
			$table->string('father_occupation')->nullable();
			$table->date('filling_form_date')->nullable();
			$table->string('full_name')->nullable();
			$table->text('health_status')->nullable();
			$table->text('health_description')->nullable();
			$table->string('koshak_sega_number')->nullable();
			$table->string('koshak_etimad')->nullable();
			$table->string('koshak_vehicle_type')->nullable();
			$table->string('koshak_toreed_office')->nullable();
			$table->string('koshak_driver_name')->nullable();
			$table->integer('koshak_mobile_number')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('beneficiaries');
	}
}