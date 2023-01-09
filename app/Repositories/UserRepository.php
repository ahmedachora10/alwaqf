<?php
namespace App\Repositories;
use DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\UserRepositoryInterface;
use App\Models\UserInfo;
use App\Services\UserServices;

class UserRepository implements UserRepositoryInterface
{
    public function __construct()
    {
        $this->userServices = new UserServices;
    }
    /**
     * create user methods
     *
     * @param [type] $request
     * @return void
     */
    public function createUser($request)
    {

        $user =new User();
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->email      = $request->email;
        $user->password   = Hash::make($request->password);
        $user->save();
        return $user;
    }

    /**
     * create user info profile methods
     *
     * @param [type] $request
     * @return void
     */
    public function createUserInfo($user)
    {
        $user_info=new UserInfo();
        $user_info->user_id = $user->id;
        $user_info->save();
        return $user_info;
    }

    public function updateUserInfo($data)
    {
        $info = UserInfo::where('user_id', auth()->user()->id)->first();

        if ($info === null) {
            // create new model
            $info = new UserInfo();
        }

        // attach this info to the current user
        $info->marketing = $data['marketing'];
        $info->company  = $data['company'];
        $info->phone    = $data['phone'];
        $info->website  = $data['website'];
        $info->country  = $data['country'];
        $info->language = $data['language'];
        $info->timezone = $data['timezone'];
        $info->currency = $data['currency'];
        $info->communication = $data['communication'];
        $this->userServices->uploadImage($data, $info);
        $info->user()->associate(auth()->user());
        return $info->save();
        //return redirect()->intended('beneficiaries/create');
    }

    public function paginateUsers($count = 8)
    {
        return User::with(['info', 'roles'])->paginate($count);
    }

    public function getAllUsers()
    {
        return User::with(['info', 'roles'])->get();
        // first_name, last_name, email
        // return DB::select('SELECT * FROM users');
    }
}