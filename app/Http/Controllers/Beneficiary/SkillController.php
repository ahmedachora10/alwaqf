<?php
namespace App\Http\Controllers\Beneficiary;
use Illuminate\Http\Request;

use DB;
use DataTables;
use App\Models\Skill;
use App\Http\Controllers\Controller;


class SkillController extends Controller {

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
        $skill = Skill::find($id);
        $skill->delete();
        
    return redirect()->back()->with('destroyBeneficiarieSkills', '200');  

  }

   // show beneficiarie skills in settings
   public function index(Request $request){
    $info = auth()->user()->info;
    return view('pages.account.skills.skills', compact('info'));
  }

  // add beneficiarie's skills in settings
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
      $path = $request->file('attachment')->storeAs('public/attachments/skill',$fileNameToStore);
    }

        $skill = new Skill;
        $skill->beneficiary_id = auth()->user()->info->beneficiaryProfile->id;
        $skill->note = $request->input('note');
        $skill->attachment = $fileNameToStore;
        $skill->skill_date = $request->input('skill_date');
        $skill->skill_name = $request->input('skill_name');
        $skill->skill_level = $request->input('skill_level');
        $skill->skill_certificate = $request->input('skill_certificate');
      $skill->save();

    return redirect()->back()->with('addBeneficiarieSkills', '200');   

  }
  
}

?>
