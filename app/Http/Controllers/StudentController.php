<?php

namespace App\Http\Controllers;


use App\Models\student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $students = Student::with('Postal_Code')->get();
        return view('student.index', compact('students'));
    }


    public function create()
    {
        return view('student.create');
    }


    public function store(Request $request)
    {
         // #1
         $student = new student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->save();
         return redirect()->route('student.index');

    }

    public function show(student $student)
    {
        //
    }


    public function edit($id)
    {
    $student = Student::findorFail($id);
        return view('student.edit', compact('student'));
    }


    public function update(Request $request, $id)
    {
        $student = Student::findorFail($id);
        // $student->name = $request->name;
        // $student->email = $request->email;
        // $student->save();
        $student->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect()->route('student.index');
    }


    public function destroy($id)
    {
        // Student::findorFail($id)->delete();
        Student::destroy($id);
        return redirect()->route('student.index');
    }





}
