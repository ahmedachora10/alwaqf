<?php
namespace App\Http\Controllers\management;


use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $info = auth()->user()->info;
    $organizations = Organization::all();
    return view('pages.admin.organizations.organizations',compact('info','organizations'));
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
    $organization = new Organization;
    $organization->name=$request->input('name');
    $organization->manager=$request->input('manager');
    $organization->email=$request->input('email');
    $organization->description=$request->input('description');
    $organization->phone=$request->input('phone');
    $organization->website=$request->input('website');
    $organization->mobile=$request->input('mobile');
    $organization->note=$request->input('note');

    $organization->save();
    return redirect()->back()->with('message', 'تمت اضافة المنظمة بنجاح');   
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
    Organization::where('id',$id)->delete();
    return redirect()->back()->with('message', 'تمت ازالة المنظمة بنجاح');
  }

}

?>
