<?php

namespace App\Http\Controllers\DataTables;
use DB;
use DataTables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\VolunteerRepositoryInterface;

class VolunteerDataTablesController extends Controller {
    private VolunteerRepositoryInterface $volunteerRepository;
    public function __construct(VolunteerRepositoryInterface $volunteerRepository)
    {
      $this->volunteerRepository = $volunteerRepository;
    }

  /**
   * Displing DataTables For Beneficiray Users
   *
   * @param Request $request
   * @return void
   */
  public function volunteers(Request $request)
  {
    if ($request->ajax()) {
        $volunteers = $this->volunteerRepository->getAllVolunteer();
        return Datatables::of($volunteers)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = view('Buttons.button');
                return $actionBtn;
            })
            ->addColumn('name', function($volunteers){
                $userName = $volunteers->profile->name;
                return $userName;
            })
            ->addColumn('email', function($volunteers){
                $userEmail = $volunteers->profile->email;
                return $userEmail;
            })
            ->rawColumns(['action', 'name', 'email'])
            ->make(true);
    }
  }

}
