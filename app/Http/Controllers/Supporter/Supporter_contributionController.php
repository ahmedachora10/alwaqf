<?php

namespace App\Http\Controllers\Supporter;

use App\Http\Controllers\Controller;
use App\Models\{Supporter_contribution, ContributionType};
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\Account\SupportersRequest;
use App\Interfaces\SupporterRepositoryInterface;

class Supporter_contributionController extends Controller
{

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


  public function contributions()
  {
    $info = auth()->user()->info;
    $Supporter_contribution = Supporter_contribution::get();
    $contributionTypes = ContributionType::get();
    $Supporter_contribution_id = Supporter_contribution::select('contributionType_id')->where('supporter_id', $info->supporter->id)->get()->toArray();

    $arra[] = [];
    foreach ($Supporter_contribution as $key => $value) {
      if ($value->supporter_id != $info->supporter->id) {
        $supporter_id = Supporter_contribution::where('contributionType_id', $value->contributionType_id)->where('supporter_id', $info->supporter->id)->get();
        if ($supporter_id != null && count($supporter_id) == 0) {
          $sc = Supporter_contribution::where('contributionType_id', $value->contributionType_id)->get();
          $ct = ContributionType::where('id', $value->contributionType_id)->get();
          if($ct->get(0)!=null) {           
            array_push($arra, $ct->get(0));
          }
        
        }
      }
    }
    return view('pages.supporters.contributions.contributions', compact('info', 'Supporter_contribution', 'contributionTypes', 'Supporter_contribution_id', 'arra'));
  }

  public function linkContributionSupporter($id)
  {
    try {
      DB::beginTransaction();
      $this->supporterRepositroy->linkContributionSupporter($id, auth()->user()->info->supporter->id);
      DB::commit();
    } catch (Throwable $e) {
      return ($e);
      DB::rollBack();
    }
    return redirect()->back()->with('linkContributionSupporter', '200');
  }

  public function dislinkContributionSupporter($id){
    try {
      DB::beginTransaction();
      $this->supporterRepositroy->dislinkContributionSupporter($id, auth()->user()->info->supporter->id);
      DB::commit();
    } catch (Throwable $e) {
      return ($e);
      DB::rollBack();
    }
    return redirect()->back()->with('dislinkContributionSupporter', '200');
  }
}
