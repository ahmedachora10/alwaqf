<?php 
namespace App\Interfaces;

interface ServiceRepositoryInterface 
{
    public function getAllService();
    public function createService($service);

}