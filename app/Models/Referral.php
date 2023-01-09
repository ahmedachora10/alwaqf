<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model {

	protected $table = 'referrals';
	public $timestamps = true;
	protected $fillable = array('type', 'value', 'referrer_user_id');

	public function Supporter()
	{
		return $this->hasMany('Supporter', 'referral_id');
	}

}
