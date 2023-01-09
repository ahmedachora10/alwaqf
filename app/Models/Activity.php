<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

	protected $table = 'activities';
	public $timestamps = true;
	protected $fillable = array('activity_name', 'description', 'attachment', 'end_date');

    protected $appends = ['duration'];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

	public function management()
	{
		return $this->belongsTo('Management');
	}

    public function getDurationAttribute()
    {
        return $this->end_date->format('h:i');
    }

}