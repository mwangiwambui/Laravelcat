<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname' => 'required',
            'surname' => 'required',
            'othernames' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'student_no' => 'required|unique:students'
        ]);
        $student = new Student();
        $student->firstname = $request->firstname;
        $student->surname = $request->surname;
        $student->othernames = $request->othernames;
        $student->dob = $request->dob;
        $student->address = $request->address;
        $student->student_no = $request->student_no;

        $student->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */

}
