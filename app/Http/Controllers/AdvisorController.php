<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $advisor = DB::table('advisor')->get();
        return view('advisor/index',compact('advisor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advisor/create');
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
                'advisor_code' => 'required',
                'advisor_name' => 'required|max:50',
                'dept_code' => 'required|max:5',
                'office_tel' => 'required'
            ]
            );
        DB::table('advisor')->insert(
            [ 
                'advisor_code' => $request->advisor_code,
                'advisor_name' => $request->advisor_name,
                'dept_code' => $request->dept_code,
                'office_tel' => $request->office_tel
            ]
            );
            return redirect('advisor');
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
    public function edit($advisor)
    {
        $advisor = DB::table('advisor')
                        ->where('advisor_code',$advisor)->get();
        return view('advisor/edit',compact('advisor')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $advisor)
    {
        $request->validate([
            'advisor_code' => 'required',
            'advisor_name' => 'required|max:50',
            'dept_code' => 'required|max:5',
            'office_tel' => 'required'
        ]);
        DB::table('advisor')->where('advisor_code',$advisor)->update([
            'advisor_code' => $request->advisor_code,
            'advisor_name' => $request->advisor_name,
            'dept_code' => $request->dept_code,
            'office_tel' => $request->office_tel
        ]);
        return redirect('advisor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($advisor)
    {
        DB::table('advisor')->where('advisor_code',$advisor)->delete();
        return redirect('advisor');
    }
}