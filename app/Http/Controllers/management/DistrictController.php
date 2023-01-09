<?php
namespace App\Http\Controllers\management;
use App\Models\District;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistrictController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $info = auth()->user()->info;
    $districts = District::all();
    return view('pages.admin.districts.districts',compact('info','districts'));
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
    $district = new District;
    $district->distric=$request->input('distric');
    $district->city=$request->input('city');
    $district->save();
    return redirect()->back()->with('message', 'تمت اضافة المنطقة الجديدة بنجاح');   
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
    District::where('id',$id)->delete();
    return redirect()->back()->with('message', 'تمت ازالة المنطقة بنجاح');
  }

}

?>
