<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfluenceType extends Model {

	protected $table = 'influenceTypes';
	public $timestamps = true;
	protected $fillable = array('name');

	public function supporter_influence()
	{
		return $this->hasMany('Supporter_influence', 'influenceType_id');
	}

}
