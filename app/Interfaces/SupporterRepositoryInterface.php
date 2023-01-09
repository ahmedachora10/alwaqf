<?php 
namespace App\Interfaces;

interface SupporterRepositoryInterface 
{
    public function getAllSupporter();
    public function createSupporter($data);
    public function updateSupporter($data, $id);
    public function linkContributionSupporter($data,$id);
    public function dislinkContributionSupporter($data,$id);
    public function promotion($data, $id);

}