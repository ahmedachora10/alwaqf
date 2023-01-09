<?php 
namespace App\Repositories;
use App\Interfaces\VolunteerRepositoryInterface;
use App\Models\Volunteer;
use DB;

class VolunteerRepository implements VolunteerRepositoryInterface 
{
    public function getAllVolunteer()
    {
        return Volunteer::with('profile')->get();
    }
    public function createVolunteer($data)
    {
        return Volunteer::create([
            'user_info_id' => $data['user_info_id'],
            'note'         => $data['note'],
            'volunteer_type' => $data['volunteer_type'],

        ]);
    }
}