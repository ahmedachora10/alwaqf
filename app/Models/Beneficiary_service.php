<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Beneficiary_service extends Model {

	protected $table = 'beneficiary_services';
	public $timestamps = true;

	//use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('beneficiary_id', 'note');

	public function beneficiary()
	{
		return $this->belongsTo(Beneficiary::class);
	}

	public function service()
	{
		return $this->belongsTo(Service::class);
	}

}
