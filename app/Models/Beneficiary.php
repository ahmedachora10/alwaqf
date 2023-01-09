<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Beneficiary extends Model {
	protected $guarded = [];
	//protected $table = 'Beneficiaries';
	public $timestamps = true;

	//use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	//protected $fillable = array('userInfo_id', 'date_of_birth', 'id_number', 'id_date', 'id_occupation', 'marital_status', 'education_level', 'major', 'address', 'house_ownership', 'house_type', 'family_male_members', 'family_female_members', 'rank_in_family', 'father_occupation', 'filling_form_date', 'full_name', 'health_description', 'koshak_sega_number', 'koshak_etimad', 'koshak_vehicle_type', 'koshak_toreed_office', 'koshak_driver_name', 'koshak_mobile_number');

    protected $casts = [
        'date_of_birth' => 'datetime'
    ];

	public function User()
	{
		return $this->belongsTo(UserInfo::class,'user_info_id');
	}

	public function beneficiary_service()
	{
		return $this->hasMany(Beneficiary_service::class, 'beneficiary_id');
	}

	public function certificate()
	{
		return $this->hasMany(Certificate::class, 'beneficiary_id');
	}

	public function necessity()
	{
		return $this->hasMany(Necessity::class, 'beneficiary_id');
	}

	public function skill()
	{
		return $this->hasMany(Skill::class, 'beneficiary_id');
	}

	public function experience()
	{
		return $this->hasMany(Experience::class, 'beneficiary_id');
	}

	public function nationality()
	{
		return $this->belongsTo('Nationality');
	}

    public function getAgeAttribute()
    {
        return $this->date_of_birth->diffInYears(now());
    }

}
