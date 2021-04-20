<?php

namespace App\Http\Controllers;

use App\ChiefnurseSchedule;
use App\User;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChiefnurseScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $ward = Ward::find(Auth::user()->ward_id);
        // $user = User::where('ward', Auth::user()->ward)->where('role', 2)->get();
        $user = User::whereIn('role_id', [3, 4])->get();
        return view('adminforward.schedule',compact('ward','user'));
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
        $request->validate([$request->all()]);

        $dates = explode("/", $request->date);
        $datesc = $dates[2] . "-" . $dates[1] . "-" . $dates[0];

        $sc1 = ChiefnurseSchedule::where('user_id',$request->user)->first();

        if (is_null($sc1)) {
            $schedule = new ChiefnurseSchedule([
                'user_id' => $request->user,
                'date' => $datesc,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,
            ]);

            $schedule->save();

            $sc = ChiefnurseSchedule::where('user_id',$request->user)->first();

            $user = User::find($request->user);
            $user->schedule_id = $sc->id;

            $user->save();
        } else {
            $sc2 = ChiefnurseSchedule::find($sc1->id);
            $sc2->date = $datesc;

            $sc2->save();
        }



        return back()->with('success','เพิ่มตารางเวร สำเร็จ!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChiefnurseSchedule  $chiefnurseSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(ChiefnurseSchedule $chiefnurseSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChiefnurseSchedule  $chiefnurseSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(ChiefnurseSchedule $chiefnurseSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChiefnurseSchedule  $chiefnurseSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChiefnurseSchedule $chiefnurseSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChiefnurseSchedule  $chiefnurseSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChiefnurseSchedule $chiefnurseSchedule)
    {
        //
    }
}
