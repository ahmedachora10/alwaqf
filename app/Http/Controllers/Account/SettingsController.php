<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\SettingsEmailRequest;
use App\Http\Requests\Account\SettingsInfoRequest;
use App\Http\Requests\Account\SettingsPasswordRequest;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Interfaces\UserRepositoryInterface;
use App\Interfaces\BeneficiaryRepositoryInterface;

use DB;
use Throwable;


class SettingsController extends Controller
{
    //use BeneficiaryValidator;
    private UserRepositoryInterface $userRepository;
    private BeneficiaryRepositoryInterface $beneficiaryRepository;
    public function __construct(UserRepositoryInterface $userRepository, BeneficiaryRepositoryInterface $beneficiaryRepository)
    {
        $this->userRepository = $userRepository;
        $this->beneficiaryRepository = $beneficiaryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $info = auth()->user()->info;

        // get the default inner page
        return view('pages.account.settings.settings', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        
        // save user name
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
        ]);

        auth()->user()->update($validated);

        // save on user info
        $info = UserInfo::where('user_id', auth()->user()->id)->first();
        if ($info === null) {
            // create new model
            $info = new UserInfo();
        }

        // attach this info to the current user
        $info->user()->associate(auth()->user());

        try {
            DB::beginTransaction();
            // save user name
            $data = $request->all();
            auth()->user()->update([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name']
            ]);
            $id = auth()->user()->info->id;
            $this->userRepository->updateUserInfo($data);
            DB::commit();
        } catch (Throwable $e) {
            return ($e);
            DB::rollBack();
        }

        if ($request->hasFile('avatar')) {
         
            $image      = $request->file('avatar');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = \Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();                 
            });

            $img->stream(); 

            Storage::disk('local')->put('public/avatars/'.'/'.$fileName, $img, 'public');

            $info->avatar=$fileName;
           
        }

        if ($request->boolean('avatar_remove')) {
            Storage::delete($info->avatar);
            $info->avatar = null;
        }
        $info->save();

        return redirect()->back()->with('statusChangeInfo', '200');   
    }

    /**
     * Function for upload avatar image
     *
     * @param  string  $folder
     * @param  string  $key
     * @param  string  $validation
     *
     * @return false|string|null
     */
    public function upload($folder = 'images', $key = 'avatar', $validation = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|sometimes')
    {
        request()->validate([$key => $validation]);

        $file = null;
        if (request()->hasFile($key)) {
            $file = Storage::disk('public')->putFile($folder, request()->file($key), 'public');
        }

        return $file;
    }

    /**
     * Function to accept request for change email
     *
     * @param  SettingsEmailRequest  $request
     */
    public function changeEmail(SettingsEmailRequest $request)
    {
        
        // prevent change email for demo account
        if ($request->input('current_email') === 'demo@demo.com') {
            return redirect()->intended('account/settings');
        }

        if( Hash::check( $request->input('current_password'), auth()->user()->password)){
            auth()->user()->update(['email' => $request->input('email')]);
            return redirect()->back()->with('statusChangeEmail', '200');   
        }
        return redirect()->back()->with('statusChangeEmail', '400');   
    }

    /**
     * Function to accept request for change password
     *
     * @param  Request  $request
     */
    public function changePassword(Request $request)
    {
        // prevent change password for demo account
        if ($request->input('current_email') === 'demo@demo.com') {
            return redirect()->intended('account/settings');
        }
        

        if(Hash::check( $request->input('current_password'), auth()->user()->password)  
            &&  $request->input('password_confirmation') === $request->input('password')
            &&  Hash::check( $request->input('password'), auth()->user()->password) != 1
             ) {
            auth()->user()->update(['password' => Hash::make($request->input('password'))]);
            return redirect()->back()->with('statusChangePassword', '200'); 
           
        }
        return redirect()->back()->with('statusChangePassword', '400');   
    }


    public function overview()
    {
        $info = auth()->user()->info;
        return view('pages.account.overview.overview', compact('info'));
    }

    public function services(){
        $info = auth()->user()->info;
        return view('pages.account.settings.services', compact('info'));
    }
}
