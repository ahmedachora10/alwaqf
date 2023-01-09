<?php

namespace App\Models;

use App\Models\{ContributionType};
use Illuminate\Database\Eloquent\Model;

class Supporter_contribution extends Model {

	protected $table = 'supporter_contributions';
	public $timestamps = true;

	protected $fillable = array('supporter_id','contributionType_id');

	public function contributionType()
	{
		return $this->belongsTo(ContributionType::class,'contributionType_id','id');
	}

	public function supporter()
	{
		return $this->belongsTo('Supporter');
	}

}
