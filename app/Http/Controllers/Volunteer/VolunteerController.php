<?php
namespace App\Http\Controllers\Volunteer;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\RequestVolunteer;
use App\Interfaces\VolunteerRepositoryInterface;
use App\Models\User;
use App\Models\Volunteer;

class VolunteerController extends Controller {

  private VolunteerRepositoryInterface $volunteerRepository;
  public function __construct(VolunteerRepositoryInterface $volunteerRepository)
  {
    $this->volunteerRepository = $volunteerRepository;
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    // $volunteers = $this->volunteerRepository->getAllVolunteer();
    $volunteers = Volunteer::with(['info' => fn($query) => $query->with('user'), 'profile', 'logs'])->latest()->paginate(10);

    return view('pages.admin.volunteers.index',compact('volunteers'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(RequestVolunteer $request)
  {
     $data = $request->all();
      auth()->user()->assignRole('volunteer');
     $this->volunteerRepository->createVolunteer($data);
     return redirect()->back()->with('message', 'تمت اضافة المتطوع بنجاح');

  }

  public function logs(){

  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    Volunteer::where('id',$id)->delete();
    Volunteer::get();
    return redirect()->back()->with('message', 'تمت ازالة المتطوع بنجاح');
  }

}

?>