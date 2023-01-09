<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;

class RequestVolunteer extends FormRequest
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
            'user_info_id' => 'required|exists:user_infos,id',
            'note'  => 'required|string|max:255',
            'volunteer_type'  => 'required|string|max:255',
            
        ];
    }
}
