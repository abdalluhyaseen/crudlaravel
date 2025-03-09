<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $students = Student::all();
       return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // #1
         $student = new student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->save();
         return redirect()->route('student.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    $student = Student::findorFail($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Student::findorFail($id)->delete();
        Student::destroy($id);
        return redirect()->route('student.index');
    }
}
