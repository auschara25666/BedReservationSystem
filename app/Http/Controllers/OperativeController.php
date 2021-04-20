<?php

namespace App\Http\Controllers;

use App\Operative;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OperativeController extends Controller
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
            'opt_name' => ['required' , 'string'],
            'ward' => ['required'],
        ]);

        $doctor = new Operative([
            'opt_name' => $request->opt_name,
            'ward_id' => $request->ward,
            'rec_status' => '1',
            'created_user_id' => Auth::user()->id,
        ]);

        $doctor->save();


        return back()->with('success','เพิ่ม หัตถการ สำเร็จ!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Operative  $operative
     * @return \Illuminate\Http\Response
     */
    public function show(Operative $operative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Operative  $operative
     * @return \Illuminate\Http\Response
     */
    public function edit(Operative $operative)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Operative  $operative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $opt = Operative::find($id);
        $opt->opt_name = $request->opt_name;

        $opt->save();

        return back()->with('success','แก้ไขข้อมูล อาจารย์แพทย์ สำเร็จ!!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Operative  $operative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Operative::find($id)->delete();

        return back()->with('success','ลบ หัตถการ สำเร็จ!!');
    }
}
