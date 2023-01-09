<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipType extends Model {

	protected $table = 'membershipTypes';
	public $timestamps = true;
	protected $fillable = array('name');

	public function supporter()
	{
		return $this->hasMany('Supporter', 'membershipType_id');
	}

}
