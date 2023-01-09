<?php

namespace App\Models;

use App\Models\ServiceType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Service extends Model {

	protected $table = 'services';
	public $timestamps = true;

	//use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('serviceType_id');

	public function beneficiary()
	{
		return $this->hasMany('Beneficiary_service', 'service_id');
	}

	public function serviceType()
	{
		return $this->belongsTo(ServiceType::class, 'serviceType_id', 'id');
	}

	public function organization()
	{
		return $this->belongsTo(Organization::class, 'organization_id', 'id');
	}

}
