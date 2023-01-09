<?php

namespace App\Repositories;

use App\Interfaces\SupporterRepositoryInterface;
use App\Models\Supporter;
use App\Models\Supporter_contribution;

class SupporterRepository implements SupporterRepositoryInterface
{
    /**
     * Display All Supporters
     *
     * @return void
     */
    public function getAllSupporter()
    {
        return Supporter::all();
    }
    public function createSupporter($data)
    {
        $data['membership_id'] = "MEM" . $data['user_info_id'] . $data['membershipType_id'];
        return Supporter::create($data);
    }
    public function updateSupporter($data, $id)
    {
        $supporter = Supporter::where('user_info_id', $id)->first();
        $supporter->membershipType_id         = $data['membershipType_id'];
        $supporter->membership_id     =   $data['membership_id'];
        $supporter->description       =   $data['description'];
        $supporter->specialty_id   =   $data['specialty_id'];
        $supporter->referral_id         =   $data['referral_id'];
        $supporter->bank_account   =   $data['bank_account'];
        $supporter->work     =   $data['work'];
        return $supporter->save();
    }
    public function linkContributionSupporter($contributionType_id, $supporter_id)
    {
        $data['supporter_id']=$supporter_id;
        $data['contributionType_id']=$contributionType_id;
        return Supporter_contribution::create($data);        
    }
    public function dislinkContributionSupporter($contributionType_id, $supporter_id)
    {
        $supporter_contribution = Supporter_contribution::where('supporter_id', $supporter_id)->where('contributionType_id', $contributionType_id)->first();
        $data['supporter_id']=$supporter_id;
        $data['contributionType_id']=$contributionType_id;
        return $supporter_contribution->delete();        
    }
    public function promotion($data,$id){
        $supporter = Supporter::where('user_info_id', $id)->first();
        $supporter->membershipType_id         = $data['membershipType_id'];
        return $supporter->save();
    }
    
}
