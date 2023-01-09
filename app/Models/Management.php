<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Management extends Model {

	protected $table = 'managements';
	public $timestamps = true;
	protected $fillable = array('user_id');

	public function user()
	{
		return $this->belongsTo('UserInfo');
	}

	public function activity()
	{
		return $this->hasMany('Activity', 'management_id');
	}

	public function project()
	{
		return $this->hasMany('Project', 'management_id');
	}

}
