<?php

namespace App\Http\Controllers\Beneficiary;
use Illuminate\Http\Request;

use DB;
use DataTables;
use App\Models\Necessity;
use App\Http\Controllers\Controller;

class NecessityController extends Controller {

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
    $necessity = Necessity::find($id);
    $necessity->delete();
    return redirect()->back()->with('destroyBeneficiarieNecessity', '200');  
  }


  // show beneficiarie Necessities in settings
  public function index(Request $request){
    $info = auth()->user()->info;
    return view('pages.account.necessities.necessities', compact('info'));
  }

  // add beneficiarie's Necessities in settings
  public function store(Request $request){
    $necessity = new Necessity;
    $necessity->beneficiary_id = auth()->user()->info->beneficiaryProfile->id;
    $necessity->note = $request->input('note');
    $necessity->name = $request->input('name');
    $necessity->save();

    return redirect()->back()->with('addBeneficiarieNecessity', '200');   

  }

}

?>
