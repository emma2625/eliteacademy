<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\StudentGrade;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        $grades = Grade::all()->sortBy('name');
        return view('admin.users.show', compact('user', 'grades'));
    }

    public function assign(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'class' => "required|numeric|exists:grades,id"
        ]);

        $checkIfStudentExistInClass = StudentGrade::where('user_id', '=', $user->id)
            ->where('grade_id', '=', $request->input('class'))
            ->exists();

        if ($checkIfStudentExistInClass) {
            Alert::toast('Student is already assigned to this class', 'info');
            return back();
        }
        
        StudentGrade::create([
            'user_id' => $user->id,
            'grade_id' => $request->input('class')
        ]);

        
        Alert::toast('Student Class Assigned', 'success');
        return back();
    }
}
