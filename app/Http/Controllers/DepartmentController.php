<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_th' => ['required', 'string'],
            'name_eng' => ['required', 'string'],
            'name_abb' => ['required', 'string'],
            'ward' => ['required'],
        ]);

        $dept = new Department([
            'name_th' => $request->name_th,
            'name_eng' => $request->name_eng,
            'name_abb' => $request->name_abb,
            'ward_id' => $request->ward,
            'rec_status' => '1',
            'created_user_id' => Auth::user()->id,
        ]);

        $dept->save();

        return back()->with('success','เพิ่ม สายการรักษา สำเร็จ!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dept = Department::find($id);
        $dept->name_th = $request->name_th;
        $dept->name_eng = $request->name_eng;
        $dept->name_abb = $request->name_abb;

        $dept->save();

        return back()->with('success','แก้ไข สายการรักษา สำเร็จ!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::find($id)->delete();

        // $ward = Ward::find($request->ward);
        // $ward->total_bed = $ward->total_bed - 1;
        // $ward->save();

        return back()->with('success','ลบ สายการรักษา สำเร็จ!!');
    }
}
