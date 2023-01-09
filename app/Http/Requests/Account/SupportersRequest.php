<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;

class SupportersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_info_id'       => 'required|integer|exists:users,id',
            'membershipType_id'  => 'required|integer|exists:membershiptypes,id',
            'specialty_id'       => 'required|integer|exists:specialties,id',
            'referral_id'        => 'required|integer|exists:referrals,id',
            'work'               => 'required|string|min:2|max:255',
            'bank_account'       => 'required|string|min:3|max:50',
            'description'         => 'required',
        ];
    }
}
