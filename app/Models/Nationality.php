<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model {

	protected $table = 'nationalities';
	public $timestamps = true;
	protected $fillable = array('name');

	public function beneficiary()
	{
		return $this->hasMany('Beneficiary');
	}

}
