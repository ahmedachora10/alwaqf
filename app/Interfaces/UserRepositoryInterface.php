<?php 
namespace App\Interfaces;

interface UserRepositoryInterface 
{
    public function createUser($request);
    public function createUserInfo($user);
    public function updateUserInfo($data);
    public function getAllUsers();
}