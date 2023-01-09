<?php

namespace App\Models;

use App\Models\{User, Specialty, MembershipType, UserInfo, Referral, Payment, Supporter_contribution, Supporter_influence};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Supporter extends Model {

	protected $table = 'Supporters';
	public $timestamps = true;

	//use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array(
		'user_info_id',
		'membership_id',
		'description',
		'work',
		'bank_account',
		'membershipType_id',
		'specialty_id',
		'referral_id'
	);

	public function info()
	{
        return $this->belongsTo(UserInfo::class, 'user_info_id', 'user_id');
	}

	public function referral()
	{
		return $this->belongsTo(Referral::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'user_info_id', 'id');
	}

	public function payment()
	{
		return $this->hasMany(Payment::class, 'supporter_id');
	}

	public function membershipType()
	{
		return $this->belongsTo(MembershipType::class, 'membershipType_id', 'id');
	}

	public function specialty()
	{
		return $this->belongsTo(Specialty::class, 'specialty_id', 'id');
	}

	public function supporter_influence()
	{
		return $this->hasMany(Supporter_influence::class, 'supporter_id');
	}


	public function supporter_contribution()
	{
		return $this->hasMany(Supporter_contribution::class, 'supporter_id');
	}

}