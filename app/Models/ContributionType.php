<?php

namespace App\Models;

use App\Models\{Supporter_contribution};
use Illuminate\Database\Eloquent\Model;

class ContributionType extends Model {

	protected $table = 'ContributionTypes';
	public $timestamps = true;
	protected $fillable = array('name', 'note');

	public function supporter_contribution()
	{
		return $this->hasMany(Supporter_contribution::class,'contributionType_id');
	}

}
