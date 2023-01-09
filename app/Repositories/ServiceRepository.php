<?php 
namespace App\Repositories;
use App\Interfaces\ServiceRepositoryInterface;
use App\Models\Service;
use DB;

class ServiceRepository implements ServiceRepositoryInterface 
{
    public function getAllService()
    {
        return Service::all();
    }
    public function createService($data){

        
        $service = new Service();
        $service->serviceType_id = $data['serviceType_id'];
        $service->service_name = $data['service_name'];
        $service->description = $data['service_description'];
        $service->quantity = $data['quantity'];
        $service->organization_id = $data['organization_id'];
        $service->save();

        return $service;
    }
}