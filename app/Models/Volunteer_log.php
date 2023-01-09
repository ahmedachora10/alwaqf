<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer_log extends Model {

	protected $table = 'volunteer_logs';
	public $timestamps = true;
	protected $fillable = array('name', 'hours');

    public function Volunteer()
    {
        return $this->belongsTo(Volunteer::class);
    }


}
