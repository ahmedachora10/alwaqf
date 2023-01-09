<?php
namespace App\Http\Controllers\Supporter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\SupportersRequest;
use App\Interfaces\SupporterRepositoryInterface;
use App\Models\Specialty;
use App\Models\Suggestion;
use App\Models\Supporter;
use App\Models\UserInfo;
use App\Models\User;
use DB;



class SupporterController extends Controller {

  private SupporterRepositoryInterface $supporterRepositroy;
  public function __construct(SupporterRepositoryInterface $supporterRepositroy)
  {
    $this->supporterRepositroy = $supporterRepositroy;
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    // $supporters = Supporter::get();
    $supporters = Supporter::with(['info' => fn($query) => $query->with('user'), 'supporter_influence', 'membershipType'])->latest()->paginate(10);

      return view('pages.supporters.index',compact('supporters'));
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
  public function store(SupportersRequest $request)
  {
    $data = $request->all();
    $this->supporterRepositroy->createSupporter($data);
    return redirect()->back()->with('message', 'تم إنشاء الداعم بنجاح');
    //dd($data);

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

  // show one suggestion
  public function showSuggestion($id){
    $info = auth()->user()->info;
    $suggestion = Suggestion::where('id',$id)->get()->first();
    return view('pages.supporters.suggestions.suggestionShow',compact('info','suggestion'));
  }
  // store suggestion into DB
  public function storeSuggestion(Request $request){
    $idReceiver= User::role('admin')->get()->first()->id;
    $idSender = auth()->user()->info->user_id;
    $fileNameToStore=null;

    $urgent=0;
    if($request->input('urgent')!=null){
      $urgent=$request->input('urgent');
    }

    if($request->hasFile('attachment')){
      $filenameWithExt = $request->file('attachment')->getClientOriginalName();
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      $extension = $request->file('attachment')->getClientOriginalExtension();
      $fileNameToStore = $filename.'_'.time().'.'.$extension;
      $path = $request->file('attachment')->storeAs('public/attachments/suggestion',$fileNameToStore);
    }

    $suggestion = new Suggestion;
    $suggestion->user_info_id_sender=$idSender;
    $suggestion->user_info_id_receiver=$idReceiver;
    $suggestion->title=$request->input('title');
    $suggestion->message=$request->input('message');
    $suggestion->urgent=$urgent;
    $suggestion->attachment=$fileNameToStore;
    $suggestion->save();
    return redirect()->back()->with('editSupporterInfo', '200');
  }
  //return html page create suggestion
  public function createSuggestion(){
    $info = auth()->user()->info;
    return view('pages.supporters.suggestions.suggestionCreate',compact('info'));
  }
  // return html page list suggestions
  public function listSuggestions(){
    $info = auth()->user()->info;

    return view('pages.supporters.suggestions.suggestions',compact('info'));
  }
  // return html page list suggestions send
  public function sentSuggestions(){
    $info = auth()->user()->info;
    return view('pages.supporters.suggestions.suggestionsSent',compact('info'));
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
    Supporter::where('id',$id)->delete();
    Supporter::get();
    return redirect()->back()->with('destroySupporter', '200');

  }

  public function editSupporterInfoIndex(){
    $info = auth()->user()->info;
    $specialties= Specialty::get();
    return view('pages.account.settings.supporter', compact('info','specialties'));
  }

  public function editSupporterInfo(Request $request){
    try {
      DB::beginTransaction();
      $data = $request->all();
      $data['membershipType_id']=auth()->user()->info->supporter->membershipType_id;
      $data['membership_id']= auth()->user()->info->supporter->membership_id;
      $data['referral_id']=auth()->user()->info->supporter->referral_id;
      auth()->user()->info->supporter->update([
           'membershipType_id' => auth()->user()->info->supporter->membershipType_id,
           'membership_id' =>   auth()->user()->info->supporter->membership_id,
           'referral_id'   =>   auth()->user()->info->supporter->referral_id,
           'description' => $data['description'],
           'specialty_id' => $data['specialty_id'],
           'bank_account' => $data['bank_account'],
           'work' => $data['work']
      ]);
      $id = auth()->user()->info->id;
      $this->supporterRepositroy->updateSupporter($data,$id);
      DB::commit();
  } catch (Throwable $e) {
      return ($e);
      DB::rollBack();
  }

  return redirect()->back()->with('editSupporterInfo', '200');
  }

  public function rightsDuties(){
    $info = auth()->user()->info;
    return view('pages.supporters.rightsDuties.rightsDuties', compact('info'));
  }




}