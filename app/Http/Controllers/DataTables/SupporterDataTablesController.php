<?php 
namespace App\Http\Controllers\DataTables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;;
use App\Interfaces\SupporterRepositoryInterface;
use DataTables;
class SupporterDataTablesController extends Controller 
{
    private SupporterRepositoryInterface $supporterRepositroy;
    
    public function __construct(SupporterRepositoryInterface $supporterRepositroy)
    {
        $this->supporterRepositroy = $supporterRepositroy;
    }
/**
 * Display supporters users in data tables
 *
 * @param Request $request
 * @return void
 */
    public function supporters(Request $request)
    {
        if($request->ajax()) {
            $supporters = $this->supporterRepositroy->getAllSupporter();
            return DataTables::of($supporters)
                ->addIndexColumn()
                ->addColumn('action', function($row)
                {
                    $actionBtn = view('Buttons.button');
                    return $actionBtn;
                })
                ->addColumn('name', function($supporters){
                    $supporterName = $supporters->user->name;
                    return $supporterName;
                })
                ->addColumn('membership', function($supporters){
                    $membership = $supporters->membershipType->name;
                    return $membership;
                })
                ->addColumn('specialty', function($supporters){
                    $specialty = $supporters->specialty->name;
                    return $specialty;
                })
                ->rawColumns(['action', 'name', 'membership', 'specialty'])
                ->make(true);
        };
    }
}