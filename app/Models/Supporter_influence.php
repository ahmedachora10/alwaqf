<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supporter_influence extends Model {

	protected $table = 'supporter_influences';
	public $timestamps = true;

	public function influenceType()
	{
		return $this->belongsTo(InfluenceType::class,'influenceType_id','id');
	}

	public function supporter()
	{
		return $this->belongsTo('Supporter');
	}

}
