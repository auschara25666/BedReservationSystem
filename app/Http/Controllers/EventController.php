<?php

namespace App\Http\Controllers;

use App\Event;
use App\Bed;
use App\Ward;
use App\User;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
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
        $ward_id = Ward::find(Auth::user()->ward_id);
        $event = new Event([
            'event_status' => '2',
            'date' => \Carbon\Carbon::now(),
            'detail' => "เข้าได้ตอน ".$request->detailtime.", ติดต่อ ".$request->detailphone,
            'reserve_id' => $request->reserve_id,
            'rec_status' => '1',
            'created_user_id' => Auth::user()->id,
        ]);
        // dd($request);
        // dd($event);

        $bed = Bed::find($request->bed_id);
        $bed->bed_status = 'รอเข้า';

        $reserve = Reservation::find($request->reserve_id);
        $reserve->bed_id = $request->bed_id;
        $reserve->reserve_status = "อนุมัติเตียง";
        $reserve->reserve_detail = "เข้าได้ตอน ".$request->detailtime.", ติดต่อ ".$request->detailphone;

        // dd($reserve);


        $event->save();
        $bed->save();
        $reserve->save();

        return redirect()->back()->with('success','อนุมัติ รายการจอง สำเร็จ !!');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function enterbed(Request $request)
    {

        $bed = Bed::find($request->bed_id);
        $bed->bed_status = 'ไม่ว่าง';

        $bed->save();

        return redirect()->back()->with('success','รายการจอง เข้าเตียงเสร็จสิ้น !!');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stay(Request $request)
    {

        $bed = Bed::find($request->bed_id);
        $bed->bed_status = 'ไม่ว่าง';

        $bed->save();

        return redirect()->back()->with('success','รายการจอง เข้าเตียงเสร็จสิ้น !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = new Event([
            'event_status' => '3',
            'date' => \Carbon\Carbon::now(),
            'detail' => "ออก ".\Carbon\Carbon::now()->format('d/m/Y'),
            'reserve_id' => $request->reserve_id,
            'rec_status' => '1',
            'created_user_id' => Auth::user()->id,
        ]);

        // dd($reserve);

        $reserve = Reservation::find($id);
        $reserve->rec_status = '0';
        $reserve->reserve_status = 'จำหน่าย';
        $reserve->deleted_at = \Carbon\Carbon::now();
        $reserve->complication = $request->complication;

        $bed = Bed::find($request->bed_id);
        $bed->bed_status = 'ว่าง';
        // dd($reserve);

        $event->save();
        $reserve->save();
        $bed->save();

        return redirect()->back()->with('success','ทำรายการ สำเร็จ !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $reserve = Reservation::find($id);
        $reserve->rec_status = '0';
        $reserve->reserve_status = 'ยกเลิกการจอง';
        $reserve->deleted_at = \Carbon\Carbon::now();

        $bed = Bed::find($reserve->bed_id);
        $bed->bed_status = 'ว่าง';

        $reserve->save();
        $bed->save();

        return redirect()->back()->with('success','ยกเลิกรายการจอง สำเร็จ !!');
        // dd($reserve);
        // dd($bed);
    }
}
