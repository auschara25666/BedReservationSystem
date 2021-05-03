<?php

namespace App\Http\Controllers;

use App\Bed;
use App\Department;
use App\Doctor;
use App\Operative;
use App\Payment;
use App\Reservation;
use App\User;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ward = Ward::all();
        return view('admin.home-admin', compact('ward'));
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
            'ward_name' => ['required', 'string'],
        ]);

        $ward = new Ward([
            'ward_name' => $request->ward_name,
            'rec_status' => '1',
            'ward_phone' => $request->ward_phone,
            'ward_phoneext' => $request->ward_phoneext,
            'created_user_id' => Auth::user()->id,
        ]);

        $ward->save();

        return redirect()->back()->with('success', 'เพิ่ม วอร์ด เรียบร้อย !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ward = Ward::find($id);
        $bed = Bed::where('ward_id', $id)->get();
        $bedavailable = Bed::where('ward_id', $id)->where('bed_status', 'ว่าง')->get();
        $bedavailable = Bed::where('ward_id', $id)->where('bed_status', 'ว่าง')->get();
        $bedocc = Bed::where('ward_id', $id)->where('bed_status', 'ไม่ว่าง')->get();
        $bedun = Bed::where('ward_id', $id)->where('bed_status', 'ชำรุด')->get();
        $bedout = Bed::where('ward_id', $id)->where('bed_status', 'เตรียมออก')->get();
        $reserve = Reservation::where('ward_id', $id)->get();

        $reservevip = Reservation::where('ward_id', $id)->get();
        $reservevipcount = Reservation::where('ward_id', $id)->get();

        $reall = Reservation::all();

        return view('admin.ward', compact('bed', 'bedavailable', 'bedocc', 'bedun', 'bedout', 'ward', 'reserve', 'reservevip','reservevipcount','reall'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function manageward()
    {
        $ward = Ward::find(Auth::user()->ward_id);
        $bed = Bed::where('ward_id', Auth::user()->ward_id)->get();
        $doctor = Doctor::where('ward_id', Auth::user()->ward_id)->get();
        $operative = Operative::where('ward_id', Auth::user()->ward_id)->get();
        $pay = Payment::where('ward_id', Auth::user()->ward_id)->get();
        $user = User::where('ward_id',Auth::user()->ward_id)->get();
        $dept = Department::all();
        return view('adminward.manage-ward', compact('ward', 'bed', 'doctor', 'operative', 'dept','pay','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function edit(Ward $ward)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $ward = Ward::find($request->id);
        $ward->ward_name = $request->ward_name;
        $ward->ward_phone = $request->phone;
        $ward->ward_phoneext = $request->phoneext;
        $ward->save();

        return back()->with('success','แก้ไขเบอร์วอร์ด สำเร็จ !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ward = Ward::find($id);
        $ward->total_bed = '0';
        $ward->total_doctor = '0';
        $ward->total_operative = '0';

        $ward->save();

        return back()->with('success','ลบ ข้อมูลวอร์ด สำเร็จ !!');
    }
}
