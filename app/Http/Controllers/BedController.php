<?php

namespace App\Http\Controllers;

use App\Bed;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BedController extends Controller
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
            'bed_count' => ['required'],
            'ward' => ['required']
        ]);

        $bed1 = Bed::where('ward_id', $request->ward)->get();
        // dd($bed1);

        if (is_null($bed1)) {
            $i = 1;
            while ($i <= $request->bed_count) {
                $bed = new Bed([
                    'bed_status' => 'ว่าง',
                    'bed_number' => $i,
                    'rec_status' => '1',
                    'created_user_id' => Auth::user()->id,
                    'ward_id' => $request->ward,
                ]);
                $bed->save();
                $i++;
            }
        } else {
            $i = 1;
            $bed2 = $bed1->count();
            while ($i <= $request->bed_count) {
                $bed = new Bed([
                    'bed_status' => 'ว่าง',
                    'bed_number' => $bed2 + $i,
                    'rec_status' => '1',
                    'created_user_id' => Auth::user()->id,
                    'ward_id' => $request->ward,
                ]);
                $bed->save();
                $i++;
            }
        }

        return back()->with('success', 'แก้ไขจำนวนเตียง เรียบร้อย!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function show(Bed $bed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function editbed(Request $request)
    {
        // dd($request->bed_id);

        $bed = Bed::find($request->bed_id);
        $bed->bed_status = 'ว่าง';

        $bed->save();

        return back()->with('success','เปิดใช้งาน เตียง '.$bed->bed_number.' สำเร็จ!!');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bed_status' => ['required']
        ]);

        $bed = Bed::find($id);
        $bed->bed_status = $request->bed_status;

        $bed->save();

        return back()->with('success','แก้ไข เตียง '.$bed->bed_number.' สำเร็จ!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Bed::find($id)->delete();

        return back()->with('success','ลบ เตียง สำเร็จ!!');
    }
}
