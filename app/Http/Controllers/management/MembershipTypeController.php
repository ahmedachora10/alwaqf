<?php

namespace App\Http\Controllers\management;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\SupportersRequest;
use App\Interfaces\SupporterRepositoryInterface;
use App\Models\{Supporter_influence, InfluenceType, MembershipType};
use DB;
class MembershipTypeController extends Controller {

  private SupporterRepositoryInterface $supporterRepositroy;
  public function __construct(SupporterRepositoryInterface $supporterRepositroy)
  {
    $this->supporterRepositroy = $supporterRepositroy;
  }
  public function index()
  {
    $info = auth()->user()->info;
    $promotionPermit = 0;

    if($info->supporter->membershipType==null){
      $promotionPermit = 1;
    }
    else{
      $maxSupporter = $info->supporter->membershipType->id;
      $maxInfluence = MembershipType::max('id');

      if($maxInfluence > $maxSupporter){
        $promotionPermit = 1;
      }else{
        $promotionPermit = 2;
      }
    }


    return view('pages.supporters.membershiptypes.membershiptypes', compact('info','promotionPermit'));
  }

  public function promotion(){
    $info = auth()->user()->info;
    $max = $info->supporter->membershipType->id;
    $maxInfluence = MembershipType::max('id');
    if($max < $maxInfluence){
      try {
        DB::beginTransaction();
        $data['membershipType_id']=auth()->user()->info->supporter->membershipType_id + 1;
        auth()->user()->info->supporter->update([
             'membershipType_id' => auth()->user()->info->supporter->membershipType_id +1
        ]);
        $id = auth()->user()->info->id;
        $this->supporterRepositroy->promotion($data,$id);
        DB::commit();
    } catch (Throwable $e) {
        return ($e);
        DB::rollBack();
    }
    }

    
    return redirect()->back()->with('promotion', '200');   
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
