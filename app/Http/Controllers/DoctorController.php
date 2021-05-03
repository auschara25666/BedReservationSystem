<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
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
            'prefix' => ['required' , 'string'],
            'fname' => ['required' , 'string'],
            'lname' => ['required' , 'string'],
            'ward' => ['required'],
            'dept_id' => ['required'],
        ]);

        $doctor = new Doctor([
            'prefix' => $request->prefix,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'ward_id' => $request->ward,
            'dept_id' => $request->dept_id,
            'rec_status' => '1',
            'created_user_id' => Auth::user()->id,
        ]);

        // dd($doctor);

        $doctor->save();


        return back()->with('success','เพิ่ม อาจารย์แพทย์ สำเร็จ!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->prefix = $request->prefix;
        $doctor->fname = $request->fname;
        $doctor->lname = $request->lname;
        $doctor->dept_id = $request->dept_id;

        $doctor->save();

        return back()->with('success','แก้ไขข้อมูล อาจารย์แพทย์ สำเร็จ!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Doctor::find($id)->delete();

        return back()->with('success','ลบ อาจารย์แพทย์ สำเร็จ!!');
    }
}
