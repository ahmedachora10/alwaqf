<?php 
namespace App\Interfaces;

interface VolunteerRepositoryInterface 
{
    public function getAllVolunteer();
    public function createVolunteer($data);
}
