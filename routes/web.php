<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UsersController, PagesController};
use App\Http\Controllers\Account\DashboardController;
use App\Http\Controllers\Logs\{AuditLogsController, SystemLogsController};
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\management\{MembershipTypeController, OrganizationController,SuggestionController,DistrictController ,InfluenceTypeController};
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\Volunteer\{VolunteerController,Volunteer_logController};
use App\Http\Controllers\Beneficiary\{SkillController, CertificateController, BeneficiaryController, NecessityController, ExperienceController, BeneficiaryServiceController};
use App\Http\Controllers\Supporter\{SupporterController, Supporter_contributionController, Supporter_influenceController, PaymentController};
use App\Http\Controllers\DataTables\{BeneficiaryDataTablesController, ServiceDataTablesController ,VolunteerDataTablesController,
                                        SupporterDataTablesController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return redirect('index');
// });

$menu = theme()->getMenu();
array_walk($menu, function ($val) {
    if (isset($val['path'])) {
        $route = Route::get($val['path'], [PagesController::class, 'index']);
        // dd($route, $val);
    }
});

Route::get('/', [DashboardController::class, 'index']);

Route::get('mypath/test', [SettingsController::class, 'test'])->name('admin.index');

Route::middleware('auth')->group(function () {

/**
 * resources routes
 */
    Route::resource('users', UsersController::class);
    Route::resource('volunteers', VolunteerController::class);
    Route::resource('beneficiaries', BeneficiaryController::class);
    Route::resource('supporters', SupporterController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('suggestions',SuggestionController::class);
    Route::resource('districts',DistrictController::class);
    Route::resource('influenceTypes',InfluenceTypeController::class);
    Route::resource('organizations',OrganizationController::class);

    Route::get('admin/suggestion', [SuggestionController::class, 'createSuggestion'])->name('admin.suggestion');
    Route::post('admin/suggestion', [SuggestionController::class, 'storeSuggestion'])->name('admin.storeSuggestion');
    Route::get('admin/suggestionShow/{id}', [SuggestionController::class, 'showSuggestion'])->name('admin.suggestionShow');
    Route::get('admin/suggestions', [SuggestionController::class, 'listSuggestions'])->name('admin.suggestions');
    Route::get('admin/suggestionsSent', [SuggestionController::class, 'sentSuggestions'])->name('admin.sentSuggestions');
    Route::get('admin/settings/overview/{user}', [DashboardController::class, 'userOverview'])->name('admin.settings.overview');
    Route::get('admin/login/back', [DashboardController::class, 'adminLogin'])->name('admin.login.back');

/**
 * DataTables routes
 */
    Route::get('beneficiry/list', [BeneficiaryDataTablesController::class, 'beneficiaries'])->name('beneficiry.list');
    Route::get('volunteer/list', [VolunteerDataTablesController::class, 'volunteers'])->name('volunteer.list');
    Route::get('service/list', [ServiceDataTablesController::class, 'services'])->name('service.list');
    Route::get('supporter/list', [SupporterDataTablesController::class, 'supporters'])->name('supporter.list');

    Route::get('supporter/rightsDuties', [SupporterController::class, 'rightsDuties'])->name('supporter.rightsDuties');

    Route::get('supporter/contributions', [Supporter_contributionController::class, 'contributions'])->name('supporter.contributions');
    Route::get('supporter/contributions/{id}', [Supporter_contributionController::class, 'linkContributionSupporter'])->name('supporter.linkContributionSupporter');
    Route::get('supporter/contributions/dislink/{id}', [Supporter_contributionController::class, 'dislinkContributionSupporter'])->name('supporter.dislinkContributionSupporter');

    Route::get('supporter/payments', [PaymentController::class, 'payments'])->name('supporter.payments');

    Route::get('supporter/membershiptypes', [MembershipTypeController::class, 'index'])->name('supporter.membershiptypes');
    Route::get('supporter/membershiptypes/promotion', [MembershipTypeController::class, 'promotion'])->name('supporter.promotion');


    Route::get('supporter/suggestion', [SupporterController::class, 'createSuggestion'])->name('supporter.suggestion');
    Route::post('supporter/suggestion', [SupporterController::class, 'storeSuggestion'])->name('supporter.storeSuggestion');
    Route::get('supporter/suggestionShow/{id}', [SupporterController::class, 'showSuggestion'])->name('supporter.suggestionShow');
    Route::get('supporter/suggestions', [SupporterController::class, 'listSuggestions'])->name('supporter.suggestions');
    Route::get('supporter/suggestionsSent', [SupporterController::class, 'sentSuggestions'])->name('supporter.sentSuggestions');

    Route::get('volunteer/volunteerLogs', [Volunteer_logController::class, 'index'])->name('volunteer.logs');


    // Account pages
    Route::prefix('account')->group(function () {
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');
        Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings.changeEmail');
        Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
        Route::get('settings/overview', [SettingsController::class, 'overview'])->name('settings.overview');
        Route::get('settings/beneficiarie', [BeneficiaryController::class, 'editBeneficiarieInfoIndex'])->name('settings.editBeneficiarieInfoIndex');
        Route::put('settings/beneficiarie', [BeneficiaryController::class, 'editBeneficiarieInfo'])->name('settings.editBeneficiarieInfo');
        Route::get('settings/skills', [SkillController::class, 'index'])->name('settings.skills');
        Route::put('settings/skills', [SkillController::class, 'store'])->name('settings.addskill');
        Route::get('settings/skills/{id}', [SkillController::class, 'destroy'])->name('settings.deleteskill');

        Route::get('settings/certificates', [CertificateController::class, 'index'])->name('settings.certificates');
        Route::put('settings/certificates', [CertificateController::class, 'store'])->name('settings.addcertificate');
        Route::get('settings/certificates/{id}', [CertificateController::class, 'destroy'])->name('settings.deletecertificate');

        Route::get('settings/necessities', [NecessityController::class, 'index'])->name('settings.necessities');
        Route::put('settings/necessities', [NecessityController::class, 'store'])->name('settings.addnecessity');
        Route::get('settings/necessities/{id}', [NecessityController::class, 'destroy'])->name('settings.deletenecessity');

        Route::get('settings/experiences', [ExperienceController::class, 'index'])->name('settings.experiences');
        Route::put('settings/experiences', [ExperienceController::class, 'store'])->name('settings.addexperience');
        Route::get('settings/experiences/{id}', [ExperienceController::class, 'destroy'])->name('settings.deleteexperience');

        Route::get('services', [BeneficiaryServiceController::class, 'index'])->name('settings.services');
        Route::put('services', [VolunteerController::class, 'store'])->name('settings.addvolunteer');

        Route::get('settings/supporter', [SupporterController::class, 'editSupporterInfoIndex'])->name('settings.editSupporterInfoIndex');
        Route::put('settings/supporter', [SupporterController::class, 'editSupporterInfo'])->name('settings.editSupporterInfo');
        Route::get('settings/supporter/influences', [Supporter_influenceController::class, 'index'])->name('settings.influences.index');


    });

    // Logs pages
    Route::prefix('log')->name('log.')->group(function () {
        Route::resource('system', SystemLogsController::class)->only(['index', 'destroy']);
        Route::resource('audit', AuditLogsController::class)->only(['index', 'destroy']);
    });
});


/**
 * Socialite login using Google service
 * https://laravel.com/docs/8.x/socialite
 */
Route::get('/auth/redirect/{provider}', [SocialiteLoginController::class, 'redirect']);

require __DIR__.'/auth.php';