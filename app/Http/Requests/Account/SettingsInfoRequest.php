<?php

namespace App\Http\Requests\Account;

use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class SettingsInfoRequest extends FormRequest
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
        return  [
        
            'company'       => 'nullable|string|max:255',
            'phone'         => 'nullable|string|max:255',
            'website'       => 'nullable|string|max:255',
            'country'       => 'nullable|string|max:255',
            'language'      => 'nullable|string|max:255',
            'timezone'      => 'nullable|string|max:255',
            'currency'      => 'nullable|string|max:255',
            'communication' => 'nullable|array',
            'marketing'     => 'nullable|integer',
            'id_number'     => 'required|min:1|max:50',
            'date_of_birth' => 'required',
            'house_type'    => 'required|string|max:255',
            'house_ownership' => 'required|string|max:255',
            'address'       => 'required|string|max:255',
            'education_level' => 'required|string|max:255',
            'id_occupation'   => 'required|string|max:255',
            'marital_status'  => 'required|string|max:255',
            'family_members'  => 'required|integer|min:1|max:50',
            'family_male_members' => 'required|integer|min:1|max:50',
            'family_female_members' => 'required|string|min:1|max:255',
            'rank_in_family' => 'required|integer|min:1|max:50',
            'health_status'  => 'required|min:4|max:255',
            'health_description' => 'required',
            'father_occupation' => 'required|string|min:2|max:255', 
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
        
        ];
    }
}
