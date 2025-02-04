<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function  index()
    {
        $users = User::where('role', '!=', 'admin')
            ->latest()
            ->paginate(10);

        return view('admin.users.index', compact('users'));
    }


    public function show($id)
    {
        $user = User::where('id', '=', $id)->firstOrFail();
        return view('admin.users.show', compact('user'));
    }
}
