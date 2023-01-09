<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model {

	protected $table = 'specialties';
	public $timestamps = true;
	protected $fillable = array('name');

	public function supporter()
	{
		return $this->hasMany('Supporter', 'specialty_id');
	}

}
