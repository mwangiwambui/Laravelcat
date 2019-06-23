<?php

namespace App\Http\Controllers;

use App\Fee;
use Illuminate\Http\Request;

class FeesController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request,[
            'student_no' => 'required',
            'amount' => 'required',
        ]);
        $fee = new Fee();
        $fee->student_id = $request->student_no;
        $fee->amount = $request->amount;

        $fee->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fee  $fee
     * @return \Illuminate\Http\Response
     */

    public function searchstudent(Request $request){
        $totalfee = Fee::where('student_id', $request->student_id)->sum('amount');
        if(!$totalfee){
            return $totalfee="Empty";
        }
        return view('naomi.search', compact('totalfee'));

    }
    public function search(){

        return view('naomi.search');

    }

}
