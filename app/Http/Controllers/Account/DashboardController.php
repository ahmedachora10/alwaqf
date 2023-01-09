<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Beneficiary;
use App\Models\Payment;
use App\Models\Project;
use App\Models\Service;
use App\Models\Supporter;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use URL;

class DashboardController extends Controller
{
    private const PAGINATE_COUNT = 10;
    public function index()
    {
        $beneficiaries = Beneficiary::count();
        $volunteers = Volunteer::count();
        $supporters = Supporter::count();
        $projects = Project::count();

        $activities = Activity::latest()->take(self::PAGINATE_COUNT)->get();
        $latestProjects = Project::latest()->take(self::PAGINATE_COUNT)->get(['name', 'start_date','end_date']);
        $latestBeneficiaries = Beneficiary::with(['User' => fn($query) => $query->with('user')])->latest()->paginate(self::PAGINATE_COUNT);

        $financialSupport = Payment::sum('amount');

        // dd($latestProjects->first()->start_date->diffInDays($latestProjects->first()->end_date));
        // dd(now()->diffInDays($latestProjects->first()->end_date));

        return view('pages.admin.dashboard', compact(
            'beneficiaries', 'volunteers', 'supporters', 'projects',
            'activities', 'latestProjects', 'financialSupport', 'latestBeneficiaries'
        ));
    }

    public function userOverview(User $user)
    {
        session()->put('admin_id',auth()->id());
        auth()->logout();

        auth()->loginUsingId($user->id);

        session()->put('logout_from_admin', true);
        session()->put('link', URL::previous('/'));

        return redirect()->route('settings.overview');
    }

    public function adminLogin()
    {
        auth()->logout();

        auth()->loginUsingId(session()->get('admin_id'));

        $redirectTo = session()->get('link') ?? '/';

        session()->remove('logout_from_admin');
        session()->remove('admin_id');
        session()->remove('link');

        return redirect($redirectTo);
    }
}