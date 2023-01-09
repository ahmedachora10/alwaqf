<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('user_infos', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('user_infos', function(Blueprint $table) {
			$table->foreign('district_id')->references('id')->on('districts')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('supporters', function(Blueprint $table) {
			$table->foreign('user_info_id')->references('id')->on('user_infos')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('supporters', function(Blueprint $table) {
			$table->foreign('membershipType_id')->references('id')->on('membershipTypes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('supporters', function(Blueprint $table) {
			$table->foreign('specialty_id')->references('id')->on('specialties')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('supporters', function(Blueprint $table) {
			$table->foreign('referral_id')->references('id')->on('referrals')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('beneficiaries', function(Blueprint $table) {
			$table->foreign('user_info_id')->references('id')->on('user_infos')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('beneficiaries', function(Blueprint $table) {
			$table->foreign('nationality_id')->references('id')->on('nationalities')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('volunteers', function(Blueprint $table) {
			$table->foreign('user_info_id')->references('id')->on('user_infos')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('payments', function(Blueprint $table) {
			$table->foreign('supporter_id')->references('id')->on('supporters')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('payments', function(Blueprint $table) {
			$table->foreign('paymentMethod_id')->references('id')->on('paymentMethods')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('supporter_influences', function(Blueprint $table) {
			$table->foreign('supporter_id')->references('id')->on('supporters')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('supporter_influences', function(Blueprint $table) {
			$table->foreign('influenceType_id')->references('id')->on('influenceTypes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('supporter_contributions', function(Blueprint $table) {
			$table->foreign('contributionType_id')->references('id')->on('contributionTypes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('supporter_contributions', function(Blueprint $table) {
			$table->foreign('supporter_id')->references('id')->on('supporters')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('volunteer_logs', function(Blueprint $table) {
			$table->foreign('volunteer_id')->references('id')->on('volunteers')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('beneficiary_services', function(Blueprint $table) {
			$table->foreign('beneficiary_id')->references('id')->on('beneficiaries')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('beneficiary_services', function(Blueprint $table) {
			$table->foreign('service_id')->references('id')->on('services')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('services', function(Blueprint $table) {
			$table->foreign('serviceType_id')->references('id')->on('serviceTypes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('services', function(Blueprint $table) {
			$table->foreign('organization_id')->references('id')->on('organizations')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('managements', function(Blueprint $table) {
			$table->foreign('user_info_id')->references('id')->on('user_infos')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('activities', function(Blueprint $table) {
			$table->foreign('management_id')->references('id')->on('managements')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('projects', function(Blueprint $table) {
			$table->foreign('management_id')->references('id')->on('managements')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('certificates', function(Blueprint $table) {
			$table->foreign('beneficiary_id')->references('id')->on('beneficiaries')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('experiences', function(Blueprint $table) {
			$table->foreign('beneficiary_id')->references('id')->on('beneficiaries')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('skills', function(Blueprint $table) {
			$table->foreign('beneficiary_id')->references('id')->on('beneficiaries')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('necessities', function(Blueprint $table) {
			$table->foreign('beneficiary_id')->references('id')->on('beneficiaries')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('user_infos', function(Blueprint $table) {
			$table->dropForeign('user_infos_user_id_foreign');
		});
		Schema::table('user_infos', function(Blueprint $table) {
			$table->dropForeign('user_infos_district_id_foreign');
		});
		Schema::table('supporters', function(Blueprint $table) {
			$table->dropForeign('supporters_user_info_id_foreign');
		});
		Schema::table('supporters', function(Blueprint $table) {
			$table->dropForeign('supporters_membershipType_id_foreign');
		});
		Schema::table('supporters', function(Blueprint $table) {
			$table->dropForeign('supporters_specialty_id_foreign');
		});
		Schema::table('supporters', function(Blueprint $table) {
			$table->dropForeign('supporters_referral_id_foreign');
		});
		Schema::table('beneficiaries', function(Blueprint $table) {
			$table->dropForeign('beneficiaries_user_info_id_foreign');
		});
		Schema::table('beneficiaries', function(Blueprint $table) {
			$table->dropForeign('beneficiaries_nationality_id_foreign');
		});
		Schema::table('volunteers', function(Blueprint $table) {
			$table->dropForeign('volunteers_user_info_id_foreign');
		});
		Schema::table('payments', function(Blueprint $table) {
			$table->dropForeign('payments_supporter_id_foreign');
		});
		Schema::table('payments', function(Blueprint $table) {
			$table->dropForeign('payments_paymentMethod_id_foreign');
		});
		Schema::table('supporter_influences', function(Blueprint $table) {
			$table->dropForeign('supporter_influences_supporter_id_foreign');
		});
		Schema::table('supporter_influences', function(Blueprint $table) {
			$table->dropForeign('supporter_influences_influenceType_id_foreign');
		});
		Schema::table('supporter_contributions', function(Blueprint $table) {
			$table->dropForeign('supporter_contributions_contributionType_id_foreign');
		});
		Schema::table('supporter_contributions', function(Blueprint $table) {
			$table->dropForeign('supporter_contributions_supporter_id_foreign');
		});
		Schema::table('volunteer_logs', function(Blueprint $table) {
			$table->dropForeign('volunteer_logs_volunteer_id_foreign');
		});
		Schema::table('beneficiary_services', function(Blueprint $table) {
			$table->dropForeign('beneficiary_services_beneficiary_id_foreign');
		});
		Schema::table('beneficiary_services', function(Blueprint $table) {
			$table->dropForeign('beneficiary_services_service_id_foreign');
		});
		Schema::table('services', function(Blueprint $table) {
			$table->dropForeign('services_serviceType_id_foreign');
		});
		Schema::table('services', function(Blueprint $table) {
			$table->dropForeign('services_organization_id_foreign');
		});
		Schema::table('managements', function(Blueprint $table) {
			$table->dropForeign('managements_user_info_id_foreign');
		});
		Schema::table('activities', function(Blueprint $table) {
			$table->dropForeign('activities_management_id_foreign');
		});
		Schema::table('projects', function(Blueprint $table) {
			$table->dropForeign('projects_management_id_foreign');
		});
		Schema::table('certificates', function(Blueprint $table) {
			$table->dropForeign('certificates_beneficiary_id_foreign');
		});
		Schema::table('experiences', function(Blueprint $table) {
			$table->dropForeign('experiences_beneficiary_id_foreign');
		});
		Schema::table('skills', function(Blueprint $table) {
			$table->dropForeign('skills_beneficiary_id_foreign');
		});
		Schema::table('necessities', function(Blueprint $table) {
			$table->dropForeign('necessities_beneficiary_id_foreign');
		});
	}
}