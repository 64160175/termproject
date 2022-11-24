<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = DB::table('student')->get();
        return view('student/index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'student_code' => 'required',
                'student_name' => 'required|max:50',
                'dept_code' => 'required|max:5',
                'gpa' => 'required',
                'advisor_code' => 'required|max:5'
            ]
            );
        DB::table('student')->insert(
            [ 
                'student_code' => $request->student_code,
                'student_name' => $request->student_name,
                'dept_code' => $request->dept_code,
                'gpa' => $request->gpa,
                'advisor_code' => $request->advisor_code
            ]
            );
            return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($student)
    {
        $student = DB::table('student')->where('student_code',$student)->get();
        return view('student/edit',compact('student')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $student)
    {
        $request->validate([
            'student_code' => 'required',
            'student_name' => 'required|max:50',
            'dept_code' => 'required|max:5',
            'gpa' => 'required',
            'advisor_code' => 'required|max:5'
        ]);
        DB::table('student')->where('student_code',$student)->update([
            'student_code' => $request->student_code,
            'student_name' => $request->student_name,
            'dept_code' => $request->dept_code,
            'gpa' => $request->gpa,
            'advisor_code' => $request->advisor_code
        ]);
        return redirect('student'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($student_code)
    {
        DB::table('student')->where('student_code',$student_code)->delete();
        return redirect('student');
    }
}