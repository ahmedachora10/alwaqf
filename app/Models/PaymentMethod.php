<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PaymentMethod extends Model {

	protected $table = 'paymentMethods';
	public $timestamps = true;

	//use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name');

	public function payment()
	{
		return $this->hasMany('Payment', 'paymentMethod_id');
	}

}
