<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage ()
    {
        return view('welcome');
    }

    public function aboutPage()
    {
        return view('about');
    }

    public function contactPage()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'name' => "required|string",
            'email' => "required|email",
            'subject' => "required|string",
            'branch' => "required|string|in:kubwa,lekki,bristol",
            'message' => "required"
        ]);

        dd($data);
    }
}
