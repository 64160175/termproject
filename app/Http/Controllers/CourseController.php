<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $course = DB::table('course')->get();
        return view('course/index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course/create');
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
                'course_code' => 'required',
                'course_name' => 'required|max:50',
                'credit' => 'required',
            ]
        );
        DB::table('course')->insert(
            [
                'course_code' => $request->course_code,
                'course_name' => $request->course_name,
                'credit' => $request->credit,
            ]
        );
        return redirect('course');
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
    public function edit($course)
    {
        $course = DB::table('course')
                        ->where('course_code',$course)->get();
        return view('course/edit',compact('course')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $course)
    {
       $request->validate(
            [
                'course_code' => 'required',
                'course_name' => 'required|max:50',
                'credit' => 'required',
            ]
        );
        DB::table('course')
            ->where('course_code',$course)
            ->update(
                [
                    'course_code' => $request->course_code,
                    'course_name' => $request->course_name,
                    'credit' => $request->credit,
                ]
            );
        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($course)
    {
        DB::table('course')->where('course_code',$course)->delete();
        return redirect('course');
    }
}