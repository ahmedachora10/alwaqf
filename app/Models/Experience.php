<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model {

	protected $table = 'Experiences';
	public $timestamps = true;
	protected $fillable = array('job_title', 'company', 'start_date', 'end_date', 'attachment');

    public function Beneficiary ()
    {
        return $this->belongsTo('Beneficiary');
    }

}
