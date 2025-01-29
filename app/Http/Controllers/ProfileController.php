<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        

    }
}
