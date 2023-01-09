<?php
namespace App\Http\Validators;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

trait BeneficiaryValidator 
{
    public function validateBeneficiary($request)
    {
        $rules = [
            'id_number' => 'required|integer|min:1|max:50',
            'date_of_birth' => '',
            'house_type' => 'required|string|max:255',
            'house_ownership' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'education_level' => 'required|string|max:255',
            'id_occupation' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'family_members' => 'required|integer|min:1|max:50',
            'family_male_members' => 'required|integer|min:1|max:50',
            'family_female_members' => 'required|string|min:1|max:255',
            'rank_in_family' => 'required|integer|min:1|max:50',
            'health_status' => 'required|min:4|max:255',
            'health_description' => 'required',
            'father_occupation' => 'required|string|min:2|max:255',
        ];
        return Validator::make($request->all(), $rules);
    }
}