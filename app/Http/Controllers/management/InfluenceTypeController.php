<?php
namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\InfluenceType;
use Illuminate\Http\Request;

class InfluenceTypeController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $info = auth()->user()->info;
    $influenceTypes = InfluenceType::all();
    return view('pages.admin.influenceTypes.influenceTypes',compact('info','influenceTypes'));
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
  public function store(Request $request)
  {
    $influenceType = new InfluenceType;
    $influenceType->name=$request->input('name');
    $influenceType->save();
    return redirect()->back()->with('message', 'تمت اضافة النوع الجديد بنجاح');   
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
    InfluenceType::where('id',$id)->delete();
    return redirect()->back()->with('message', 'تمت ازالة النوع بنجاح');
  }

}

?>
