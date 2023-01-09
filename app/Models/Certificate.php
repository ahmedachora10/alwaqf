<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model {

	protected $table = 'certificates';
	public $timestamps = true;
	protected $fillable = array('certificate_date', 'note', 'attachment');

    public function Beneficiary ()
    {
        return $this->belongsTo('Beneficiary');
    }

}
