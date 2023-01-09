<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Volunteer extends Model {

	protected $guarded = [];
	protected $table = 'volunteers';
	public $timestamps = true;

	//use SoftDeletingTrait;

	// protected $dates = ['deleted_at'];
	// protected $fillable = array('note');

	public function user()
	{
		return $this->belongsTo(UserInfo::class,'user_info_id', 'id');
	}
	public function profile()
	{
        return $this->belongsTo(User::class, 'user_info_id', 'id');

	}
	public function info()
	{
        return $this->belongsTo(UserInfo::class, 'user_info_id', 'id');
	}

	public function logs()
	{
		return $this->hasMany(Volunteer_log::class, 'volunteer_id');
	}

}
