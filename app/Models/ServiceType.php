<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model {

	protected $table = 'serviceTypes';
	public $timestamps = true;
	protected $fillable = array('descriptoin');

	public function service()
	{
		return $this->hasMany('Service', 'service_id');
	}

}
