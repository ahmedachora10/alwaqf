<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	protected $table = 'projects';
	public $timestamps = true;
	protected $fillable = array('name', 'description', 'attachment', 'start_date', 'end_date');

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

    protected $appends = ['duration'];

	public function management()
	{
		return $this->belongsTo('Management');
	}

    public function getDurationAttribute()
    {
        return now() <= $this->end_date ? now()->diffInDays($this->end_date) : 0;
    }

}