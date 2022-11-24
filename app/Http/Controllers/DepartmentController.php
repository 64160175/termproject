<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = DB::table('department')->get();
        return view('department/index',compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department/create');
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
                'dept_code' => 'required|max:100',
                'dept_name' => 'required|max:50',

            ]
            );
        DB::table('department')->insert(
            [ 
                'dept_code' => $request->dept_code,
                'dept_name' => $request->dept_name,

            ]
            );
            return redirect('department');
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
    public function edit($department)
    {
        $department = DB::table('department')->where('dept_code',$department)->get();
        return view('department/edit',compact('department')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $department)
    {
        $request->validate([
            'dept_code' => 'required|max:100',
            'dept_name' => 'required|max:50',
        ]);
        DB::table('department')->where('dept_code',$department)->update([
            'dept_code' => $request->dept_code,
            'dept_name' => $request->dept_name,
        ]);
        return redirect('department'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($dept_code)
    {
        DB::table('department')->where('dept_code',$dept_code)->delete();
        return redirect('department');
    }
}