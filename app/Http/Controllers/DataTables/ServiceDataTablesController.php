<?php

namespace App\Http\Controllers\DataTables;
use DB;
use DataTables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\ServiceRepositoryInterface;

class ServiceDataTablesController extends Controller {
    private ServiceRepositoryInterface $serviceRepository;
    public function __construct(ServiceRepositoryInterface $serviceRepository)
    {
      $this->serviceRepository = $serviceRepository;
    }

  /**
   * Displing DataTables For Beneficiray Users
   *
   * @param Request $request
   * @return void
   */
  public function services(Request $request)
  {
    if ($request->ajax()) {
        $services = $this->serviceRepository->getAllService();
        return Datatables::of($services)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = view('Buttons.button');
                return $actionBtn;
            })
            ->addColumn('name', function($services){
                $serviceName = $services->serviceType->name;
                return $serviceName;
            })
            ->addColumn('organiz_name', function($services) {
                $organizName = $services->organization->name;
                return $organizName;
            })
            ->rawColumns(['action', 'name'])
            ->make(true);
    }
  }

}
