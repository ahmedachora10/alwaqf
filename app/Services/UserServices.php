<?php   
namespace App\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserServices
{
    /**
     * Method to upload images function
     *
     * @param [object] $request
     * @param [object] $info
     * @return void
     */
    public function uploadImage($data, $info)
    {
        // foreach (request()->only(array_keys(request()->rules())) as $key => $value) {
        //     if (is_array($value)) {
        //         $value = serialize($value);
        //     }
        //     $info->$key = $value;
        // }

        // include to save avatar
        if ($avatar = $this->upload()) {
            $info->avatar = $avatar;
        }

        if ($data['avatar_remove'] == true) {
            Storage::delete($info->avatar);
            $info->avatar = null;
        }
    }

    public function upload($folder = 'images', $key = 'avatar', $validation = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|sometimes')
    {
        request()->validate([$key => $validation]);

        $file = null;
        if (request()->hasFile($key)) {
            $file = Storage::disk('public')->putFile($folder, request()->file($key), 'public');
        }

        return $file;
    }
}