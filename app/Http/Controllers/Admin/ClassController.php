<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ClassController extends Controller
{
    public function create()
    {
        $grades = Grade::all();
     
        return view('admin.classes.index', compact('grades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_name' => "required|string|max:255|unique:grades,name",
            'class_abbreviation' => ['required', 'string', 'max:10', 'unique:grades,abrv']
        ]);

        Grade::create([
            'name' => $request->input('class_name'),
            'abrv' => $request->input('class_abbreviation')
        ]);

        Alert::success('Created Successfully', 'Your class has been created');

        // return redirect('/');
        // return redirect()->route('admin.class.create');
        return back();
    }


    public function edit($id)
    {
        // $grade = Grade::find($id);
        $grade = Grade::findOrFail($id);

        return view('admin.classes.edit', compact('grade'));
    }
}
