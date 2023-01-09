<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model {

	protected $table = 'organizations';
	public $timestamps = true;
	protected $fillable = array('name', 'manager', 'email', 'phone', 'note');

	public function service()
	{
		return $this->hasMany('Service', 'organization_id');
	}

}
