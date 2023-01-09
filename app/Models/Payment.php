<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{PaymentMethod};
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Payment extends Model {

	protected $table = 'Payments';
	public $timestamps = true;

	//use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('supporter_id', 'amount', 'paymentMethod_id');

	public function supporter()
	{
		return $this->belongsTo('Supporter');
	}

	public function payment_method()
	{
		return $this->belongsTo(PaymentMethod::class, 'paymentMethod_id', 'id');
	}

}
