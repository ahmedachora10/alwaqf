<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model {

	protected $table = 'suggestions';
	public $timestamps = true;
	protected $fillable = array('user_info_id_sender', 'user_info_id_receiver', 'title','message','urgent','attachment');

	public function infoSender()
	{
        return $this->belongsTo(UserInfo::class, 'user_info_id_sender', 'user_id');
	}
	public function infoReceiver()
	{
        return $this->belongsTo(UserInfo::class, 'user_info_id_receiver', 'user_id');
	}

}
