<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model {

	protected $table = 'districts';
	public $timestamps = true;
	protected $fillable = array('distric', 'city');

	public function UserInfo()
	{
		return $this->hasMany('UserInfo', 'district_id');
	}

}
