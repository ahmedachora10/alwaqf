<?php

namespace App\Http\Controllers\management;
use DB;
use DataTables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\SettingsInfoRequest;
use App\Interfaces\BeneficiaryRepositoryInterface;
use App\Models\User;
use App\Models\Suggestion;


class SuggestionController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $info = auth()->user()->info;
    return view('pages.admin.suggestions.suggestions',compact('info'));
  }

  
  // show one suggestion
  public function showSuggestion($id){
    $info = auth()->user()->info;
    $suggestion = Suggestion::where('id',$id)->get()->first();
    return view('pages.admin.suggestions.suggestionShow',compact('info','suggestion'));
  }
  // store suggestion into DB
  public function storeSuggestion(Request $request){  
    $idReceiver= $request->input('compose_to');
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
    return redirect()->back()->with('editAdminInfo', '200');   
  }
  //return html page create suggestion
  public function createSuggestion(){
    $info = auth()->user()->info;
    return view('pages.admin.suggestions.suggestionCreate',compact('info'));
  }
  // return html page list suggestions
  public function listSuggestions(){
    $info = auth()->user()->info;

    return view('pages.admin.suggestions.suggestions',compact('info'));
  }
  // return html page list suggestions send
  public function sentSuggestions(){
    $info = auth()->user()->info;
    return view('pages.admin.suggestions.suggestionsSent',compact('info'));
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
  public function store()
  {

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

  }
  
}

?>
