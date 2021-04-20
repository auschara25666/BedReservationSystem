<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Operative;
use App\Patient;
use App\Payment;
use App\Reservation;
use App\User;
use App\Ward;
use App\Prefix;
use App\Preoperative;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ward = Ward::find(Auth::user()->ward_id);
        return view('user.index',compact('ward'));
    }

    public function reserve()
    {
        // $reserve = Patient::join('reservations', 'patients.id', '=', 'reservations.patient_id')
        // ->where('reservations.rec_status', '=', '1')
        // ->where('reservations.created_user_id', '=', Auth::user()->id)
        // ->where('reservations.deleted_at', '=', NULL)
        // ->where('reservations.reserve_booking', '>=' ,Carbon::now()->subDays(1))
        // ->where('reservations.reserve_status', 'ยื่นจอง')->get();

        $reserve = Reservation::join('patients', 'reservations.patient_id', '=', 'patients.id')
        ->join('payments', 'patients.pay_id', '=', 'payments.id')
        ->where('reservations.rec_status', '=', '1')
        ->where('reservations.created_user_id', '=', Auth::user()->id)
        ->where('reservations.deleted_at', '=', NULL)
        ->where('reservations.reserve_status', 'ยื่นจอง')
        ->where('reservations.reserve_booking', '>=' ,Carbon::now()->subDays(1))
        ->select('reservations.id','reservations.ward_id','reservations.patient_id','reservations.opt_id','payments.name','reservations.reserve_booking','reservations.reserve_status','reservations.created_user_id','reservations.doctor_id')->orderBy('reservations.reserve_booking','asc')->orderBy('patients.pay_id','desc')->get();


        //edit reserve
        $pay = Payment::all();
        $opt = Operative::all();
        $doc = Doctor::all();

        $prefix = Prefix::all();


        return view('user.reserv',compact('reserve','pay','opt','doc','prefix'));
    }

    public function approvedreserv()
    {

        // $reserveapply = Patient::join('reservations', 'patients.id', '=', 'reservations.patient_id')
        // ->where('reservations.rec_status', '=', '1')
        // ->where('reservations.deleted_at', '=', NULL)
        // ->where('reservations.created_user_id', '=', Auth::user()->id)
        // ->where('reservations.reserve_status', 'อนุมัติเตียง')->get();

        $reserveapply = Reservation::join('patients', 'reservations.patient_id', '=', 'patients.id')
        ->join('payments', 'patients.pay_id', '=', 'payments.id')
        ->where('reservations.rec_status', '=', '1')
        ->where('reservations.deleted_at', '=', NULL)
        ->where('reservations.created_user_id', '=', Auth::user()->id)
        ->where('reservations.reserve_status', 'อนุมัติเตียง')
        ->select('reservations.id','reservations.patient_id','reservations.preopt_id','reservations.opt_id','reservations.bed_id','reservations.reserve_detail','payments.name','reservations.reserve_booking','reservations.reserve_status','reservations.created_user_id','reservations.doctor_id')->get();


        $pre = Preoperative::all();

        //edit reserve
        $pay = Payment::all();
        $opt = Operative::all();
        $doc = Doctor::all();

        return view('user.approvedreserv', compact('pay', 'opt', 'doc', 'pre', 'reserveapply'));
    }


    public function formreserv()
    {
        $opt = Operative::all();
        $ward = Ward::all();
        $doc = Doctor::all();
        $pay = Payment::all();
        $pa = Patient::all();
        $prefix = Prefix::all();

        // return view('chiefnurse.reservation', compact('opt', 'doc', 'pay', 'ward', 'pa'));
        return view('user.formreserv', compact('opt', 'doc', 'pay', 'ward', 'pa','prefix'));
    }

    public function manageprofile()
    {
        $prefix = Prefix::all();


        $wardall = Ward::all();

        return view('user.profile',compact('prefix','wardall'));
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
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
