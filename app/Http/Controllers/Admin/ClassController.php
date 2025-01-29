<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ClassController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'is.admin']);
    }

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


    public function  update(Request $request, $id) 
    {
        $grade = Grade::findOrFail($id);

        $request->validate([
            'class_name' => "required|string|max:255|unique:grades,name,{$id}",
            'class_abbreviation' => ['required', 'string', 'max:10', 'unique:grades,abrv,' . $id]
        ]);

        Grade::where('id', '=', $id)->update([
            'name' => $request->input('class_name'),
            'abrv' => $request->input('class_abbreviation')
        ]);

        Alert::success('Updated Successfully', 'Your class has been updated');

        return back();
    }

    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);

        $grade->delete();

        Alert::success('Deleted Successfully', 'Your class has been deleted');

        return back();

    }
}
