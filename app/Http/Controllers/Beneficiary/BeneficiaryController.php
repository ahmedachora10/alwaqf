<?php

namespace App\Http\Controllers\Beneficiary;
use DB;
use DataTables;
use App\Models\Beneficiary;
use App\Models\Nationality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\SettingsInfoRequest;
use App\Interfaces\BeneficiaryRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;



class BeneficiaryController extends Controller {
  private UserRepositoryInterface $userRepository;
  private BeneficiaryRepositoryInterface $beneficiaryRepository;
  public function __construct(UserRepositoryInterface $userRepository,BeneficiaryRepositoryInterface $beneficiaryRepository)
  {
    $this->userRepository = $userRepository;

    $this->beneficiaryRepository = $beneficiaryRepository;
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $beneficiaries = Beneficiary::with(['User' => fn($query) => $query->with('user')])->latest()->paginate(10);
    // dd($beneficiaries);
    return view('pages.admin.beneficiary.index',compact('beneficiaries'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $info = auth()->user()->info;

    return view('pages.admin.beneficiary.index', compact('info'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $user = $this->userRepository->createUser($request);
    $user->assignRole('beneficiary');
    $userInfo = $this->userRepository->createUserInfo($user);
    $beneficiary = $this->beneficiaryRepository->createBeneficiary($userInfo);

    $beneficiaries = Beneficiary::get();
    return view('pages.admin.beneficiary.index',compact('beneficiaries'));

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
    $info = auth()->user()->info;

    return view('pages.admin.beneficiary.profile', compact('info', 'id'));
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
    $beneficiary = Beneficiary::where('id',$id)->delete();

    $beneficiaries = Beneficiary::get();
    return redirect()->back()->with('destroyBeneficiarie', '200');
  }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editBeneficiarieInfoIndex(){
      $info = auth()->user()->info;
      $nationalities= Nationality::get();
      return view('pages.account.settings.beneficiarie', compact('info','nationalities'));
    }

    public function editBeneficiarieInfo(Request $request){


      try {
        DB::beginTransaction();
        // save user name
        $data = $request->all();
        auth()->user()->info->beneficiaryProfile->update([
            'membership_id' => $data['membership_id'],
            'id_number' => $data['id_number'],
            'id_date' => $data['id_date'],
            'date_of_birth' => $data['date_of_birth'],
            'marital_status' => $data['marital_status'],
            'education_level' => $data['education_level'],
            'major' => $data['major'],
            'id_occupation' => $data['id_occupation'],
            'house_type' => $data['house_type'],
            'house_ownership' => $data['house_ownership'],
            'address' => $data['address'],
            'family_members' => $data['family_members'],
            'family_male_members' => $data['family_male_members'],
            'family_female_members' => $data['family_female_members'],
            'rank_in_family' => $data['rank_in_family'],
            'father_occupation' => $data['father_occupation'],
            'filling_form_date' => $data['filling_form_date'],
            'full_name' => $data['full_name'],
            'health_status' => $data['health_status'],
            'health_description' => $data['health_description'],
            'koshak_etimad' => $data['koshak_etimad'],
            'koshak_sega_number' => $data['koshak_sega_number'],
            'koshak_vehicle_type' => $data['koshak_vehicle_type'],
            'koshak_toreed_office' => $data['koshak_toreed_office'],
            'koshak_driver_name' => $data['koshak_driver_name'],
            'koshak_mobile_number' => $data['koshak_mobile_number']
        ]);
        $id = auth()->user()->info->id;
        $this->beneficiaryRepository->updateBeneficiary($data,$id);
        DB::commit();
    } catch (Throwable $e) {
        return ($e);
        DB::rollBack();
    }

    return redirect()->back()->with('editBeneficiarieInfo', '200');
  /* $info = auth()->user()->info;
      return view('pages.account.settings.beneficiarie', compact('info'));*/
    }

}

?>
