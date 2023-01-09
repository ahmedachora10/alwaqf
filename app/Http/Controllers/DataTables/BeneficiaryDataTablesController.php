<?php

namespace App\Http\Controllers\DataTables;
use DB;
use DataTables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\BeneficiaryRepositoryInterface;

class BeneficiaryDataTablesController extends Controller {
  private BeneficiaryRepositoryInterface $beneficiaryRepository;
  public function __construct(BeneficiaryRepositoryInterface $beneficiaryRepository)
  {
    $this->beneficiaryRepository = $beneficiaryRepository;
  }

  /**
   * Displing DataTables For Beneficiray Users
   *
   * @param Request $request
   * @return void
   */
  public function beneficiaries(Request $request)
  {
    if ($request->ajax()) {
        $beneficiaries = $this->beneficiaryRepository->getAllBeneficiaries();
        return Datatables::of($beneficiaries)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = view('Buttons.button', compact('row'));
                return $actionBtn;
            })
            ->addColumn('names', function($row){
                $actionBtb = 'Beneficary';
                return $actionBtb;
            })
            ->rawColumns(['action', 'names'])
            ->make(true);
    }
  }

}