<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Necessity extends Model {

	protected $table = 'necessities';
	public $timestamps = true;
	protected $fillable = array('name', 'note');

    public function Beneficiary ()
    {
        return $this->belongsTo('Beneficiary');
    }

}
