<?php

namespace App\Http\Controllers;

use App\Fee;
use App\Student;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function fee(){
        $student_no = Student::all();
        $fee = Fee::all();
        $sum = Fee::all()->sum('amount');
        return view('naomi.fee', compact('student_no','fee','sum'));
    }
    public function student(){
        $student = Student::all();
        return view('naomi.student', compact('student'));
    }
}
