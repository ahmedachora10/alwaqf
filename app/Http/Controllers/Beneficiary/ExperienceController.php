<?php

namespace App\Http\Controllers\Beneficiary;
use Illuminate\Http\Request;

use DB;
use DataTables;
use App\Models\Experience;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller {


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
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
    $experience = Experience::find($id);
    $experience->delete();
    return redirect()->back()->with('destroyBeneficiarieExperience', '200');  
  }


  // show beneficiarie experiences in settings
  public function index(Request $request){
    $info = auth()->user()->info;
    return view('pages.account.experiences.experiences', compact('info'));
  }

  // add beneficiarie's experiences in settings
  public function store(Request $request){

    $fileNameToStore=null;
    $request->validate([
      'attachment'=> ['required','max:200'] 
    ]);


    if($request->hasFile('attachment')){
      $filenameWithExt = $request->file('attachment')->getClientOriginalName();
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      $extension = $request->file('attachment')->getClientOriginalExtension();
      $fileNameToStore = $filename.'_'.time().'.'.$extension;
      $path = $request->file('attachment')->storeAs('public/attachments/experience',$fileNameToStore);
    }

    $experience = new Experience;
    $experience->beneficiary_id = auth()->user()->info->beneficiaryProfile->id;
    
    $experience->job_title = $request->input('job_title');
    $experience->company = $request->input('company');
    $experience->start_date = $request->input('start_date');
    $experience->end_date = $request->input('end_date');
    $experience->note = $request->input('note');
    $experience->attachment = $fileNameToStore;
    $experience->save();

    return redirect()->back()->with('addBeneficiarieExperience', '200');   

  }

}

?>
