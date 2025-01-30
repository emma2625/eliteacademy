<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function showProfile()
    {
        return view('profile.show');
    }

    public function  update(Request $request)
    {
        // 1024 = 1mb
        $request->validate([
            'full_name' => "required|string|max:255",
            'phone_number' => "required|string|max:20",
            'address' => "required|string|max:255",
            'n_name' => "required|string|max:255",
            'n_phone' => "required|string|max:255",
            'picture' => "nullable|image|mimes:png,jpg,jpeg,gif|max:2048"
        ], [
            'n_name.required' => "Your emergency contact name is required",
            'n_name.string' => "Your emergency contact name must be a string",
            'n_name.max' => "Your emergency contact name should not be more than 255 characters",
            'n_phone.required' => "Your emergency contact phone number is required",
            'n_phone.string' => "Your emergency contact phone number must be a string",
            'n_phone.max' => "Your emergency contact phone number should not be more than 20 characters",
        ]);

        $userAvatar = Auth::user()->avatar;
        
        if ($request->hasFile('picture')) {
            // The code to upload
            $file = $request->file('picture');
            $fileName = $file->hashName();
            $file->move('uploads/profile', $fileName);

            $path = "uploads/profile/" . $fileName;

            if (File::exists(public_path($userAvatar))) {
               File::delete(public_path($userAvatar));
            }

            User::where('id', Auth::id())->update([
                'name' => $request->input('full_name'),
                'avatar' => $path
            ]);
        }else {
            User::where('id', Auth::id())->update([
                'name' => $request->input('full_name'),
            ]);
        }

        UserInfo::where('user_id', Auth::id())->update([
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'em_name' => $request->input('n_name'),
            'em_phone' => $request->input('n_phone')
        ]);

        Alert::success('Updated Successfuly');
        return back();
       
    }
}
