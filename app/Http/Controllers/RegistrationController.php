<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registration = DB::table('registration')->get();
        return view('registration/index',compact('registration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration/create');
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
                'course_code' => 'required',
                'section'=> 'required',
                'grade'=> 'required|max:1',
                'semester'=> 'required|max:20',
            ]
        );
        DB::table('registration')->insert(
            [
                'student_code' => $request->student_code,
                'course_code' => $request->course_code,
                'section'=> $request->section,
                'grade'=> $request->grade,
                'semester'=> $request->semester,
            ]
        );
        return redirect('registration');
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
    public function edit($registration)
    {
        $registration = DB::table('registration')->where('student_code',$registration)->first();
        return view('registration/edit',compact('registration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $registration)
    {
        $request->validate(
            [
                'student_code' => 'required|max:200',
                'course_code' => 'required|max:200',
                'section'=> 'required|max:200',
                'grade'=> 'required|max:100',
                'semester'=> 'required|max:200',
            ]
        );
        DB::table('registration')->where('student_code',$registration)->update(
            [
                'student_code' => $request->student_code,
                'course_code' => $request->course_code,
                'section'=> $request->section,
                'grade'=> $request->grade,
                'semester'=> $request->semester,
            ]
        );
        return redirect('registration');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($student_code)
    {
        DB::table('registration')->where('student_code',$student_code)->delete();
        return redirect('registration');
    }
}