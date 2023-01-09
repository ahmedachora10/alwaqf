<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model {

	protected $table = 'Skills';
	public $timestamps = true;
	protected $fillable = array('skill_name', 'skill_level', 'skill_certificate', 'skill_date', 'note');
	protected $visible = array('attachment');

    public function Beneficiary ()
    {
        return $this->belongsTo('Beneficiary');
    }

}
