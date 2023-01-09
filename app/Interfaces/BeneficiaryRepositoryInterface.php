<?php 
namespace App\Interfaces;

interface BeneficiaryRepositoryInterface 
{
    public function createBeneficiary($userInfo);
    public function updateBeneficiary($data, $id);
    public function getAllBeneficiaries();
}