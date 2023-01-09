<?php

namespace App\Repositories;

use App\Interfaces\BeneficiaryRepositoryInterface;
use App\Models\Beneficiary;
use Illuminate\Http\Request;
use DB;

class BeneficiaryRepository implements BeneficiaryRepositoryInterface
{
    public function createBeneficiary($userInfo)
    {

        $beneficiary = new Beneficiary();
        $beneficiary->user_info_id = $userInfo->id;
        $beneficiary->membership_id = 'MBS0' . $userInfo->id;
        $beneficiary->save();
        return $beneficiary;
    }

    public function updateBeneficiary($data, $id)
    {
        $beneficiary = Beneficiary::where('user_info_id', $id)->first();
        $beneficiary->id_number         = $data['id_number'];
        $beneficiary->date_of_birth     =   $data['date_of_birth'];
        $beneficiary->house_type       =   $data['house_type'];
        $beneficiary->house_ownership   =   $data['house_ownership'];
        $beneficiary->address         =   $data['address'];
        $beneficiary->education_level   =   $data['education_level'];
        $beneficiary->id_occupation     =   $data['id_occupation'];
        $beneficiary->marital_status   =   $data['marital_status'];
        $beneficiary->family_members   =   $data['family_members'];
        $beneficiary->family_male_members = $data['family_male_members'];
        $beneficiary->family_female_members = $data['family_female_members'];
        $beneficiary->rank_in_family =      $data['rank_in_family'];
        $beneficiary->health_status  =      $data['health_status'];
        $beneficiary->health_description =  $data['health_description'];
        $beneficiary->father_occupation =   $data['father_occupation'];
        return $beneficiary->save();
        //return redirect()->intended('beneficiaries/create'); 
    }
    public function getAllBeneficiaries()
    {
        return Beneficiary::all();
    }
}
