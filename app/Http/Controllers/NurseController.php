<?php

namespace App\Http\Controllers;

use App\Bed;
use App\Doctor;
use App\Operative;
use App\Patient;
use App\Payment;
use App\Reservation;
use App\Preoperative;
use App\Ward;
use App\User;
use App\Prefix;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NurseController extends Controller
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

                $reserve = Reservation::join('patients', 'reservations.patient_id', '=', 'patients.id')
        ->join('payments', 'patients.pay_id', '=', 'payments.id')
        ->where('reservations.ward_id', Auth::user()->ward_id)
        ->where('reservations.rec_status', '=', '1')
        ->where('reservations.deleted_at', '=', NULL)
        ->where('reservations.reserve_status', 'ยื่นจอง')
        ->where('reservations.reserve_booking', '>=' ,Carbon::now()->subDays(1))->get();
    
        return view('nurseforward.index', compact('ward','reserve'));
    }


    public function bedstatus()
    {
        $user = User::find(Auth::user()->id);
        $ward = Ward::find(Auth::user()->ward_id);
        $bed = Bed::where('ward_id', $ward->id)->get();
        $bedavailable = Bed::where('ward_id', $ward->id)->where('bed_status', 'ว่าง')->get();
        $bedocc = Bed::where('ward_id', $ward->id)->where('bed_status', 'ไม่ว่าง')->get();;
        $bedout = Bed::where('ward_id', $ward->id)->where('bed_status', 'งดใช้')->get();
        $bedwait = Bed::where('ward_id', $ward->id)->where('bed_status', 'รอเข้า')->get();
        $outbed = Bed::where('ward_id', $ward->id)->where('bed_status', 'เตรียมออก')->get();

        $opt = Operative::all();
        $doc = Doctor::all();
        $pay = Payment::all();

        $pre = Preoperative::all();
        $prefix = Prefix::all();

        $reserve = Reservation::join('patients', 'reservations.patient_id', '=', 'patients.id')
        ->join('payments', 'patients.pay_id', '=', 'payments.id')
        ->where('reservations.ward_id', Auth::user()->ward_id)
        ->where('reservations.rec_status', '=', '1')
        ->where('reservations.deleted_at', '=', NULL)
        ->where('reservations.reserve_status', 'ยื่นจอง')
        ->where('reservations.reserve_booking', '>=' ,Carbon::now()->subDays(1))->get();

        return view('nurseforward.bedstatus', compact('bed', 'bedavailable', 'bedocc', 'bedout','bedwait','outbed', 'ward','pre','opt','doc','reserve','prefix','pay'));
    }


    public function normalreserv()
    {
        $user = User::find(Auth::user()->id);
        $ward = Ward::find(Auth::user()->ward_id);
        $bed = Bed::where('ward_id', $ward->id)->get();


        $reserve = Reservation::join('patients', 'reservations.patient_id', '=', 'patients.id')
        ->join('payments', 'patients.pay_id', '=', 'payments.id')
        ->where('reservations.ward_id', Auth::user()->ward_id)
        ->where('reservations.rec_status', '=', '1')
        ->where('reservations.deleted_at', '=', NULL)
        ->where('reservations.reserve_status', 'ยื่นจอง')
        ->where('reservations.reserve_booking', '>=' ,Carbon::now()->subDays(1))
        ->select('reservations.id','reservations.patient_id','reservations.opt_id','payments.name','reservations.reserve_booking','reservations.reserve_status','reservations.created_user_id','reservations.doctor_id')->orderBy('reservations.reserve_booking','asc')->orderBy('patients.pay_id','desc')->get();

        // dd($reserveapply);
        // dd($reserve);
        $reall = Reservation::all();
        $pre = Preoperative::all();

        //edit reserve
        $pay = Payment::all();
        $opt = Operative::all();
        $doc = Doctor::all();

        return view('nurseforward.normalreserv', compact('ward', 'reserve', 'reall', 'pay', 'opt', 'doc', 'pre','bed'));
    }


    public function approvedreserv()
    {
        $user = User::find(Auth::user()->id);
        $ward = Ward::find(Auth::user()->ward_id);
        $bed = Bed::where('ward_id', $ward->id)->get();
        $bedavailable = Bed::where('ward_id', $ward->id)->where('bed_status', 'ว่าง')->get();

        $reserveapply = Reservation::join('patients', 'reservations.patient_id', '=', 'patients.id')
        ->join('payments', 'patients.pay_id', '=', 'payments.id')
        ->where('reservations.ward_id','=', Auth::user()->ward_id)
        ->where('reservations.rec_status', '=', '1')
        ->where('reservations.deleted_at', '=', NULL)
        ->where('reservations.bed_id', '!=', NULL)
        ->whereIn('reservations.reserve_status', ['อนุมัติเตียง','เข้าเตียง','เตรียมออก','เข้าไม่ผ่านระบบ','ยกเลิกจอง'])
        ->select('reservations.id','reservations.patient_id','reservations.preopt_id','reservations.opt_id','reservations.bed_id','reservations.reserve_detail','payments.name','reservations.reserve_booking','reservations.reserve_status','reservations.created_user_id','reservations.doctor_id')->get();


        $reserve = Reservation::join('patients', 'reservations.patient_id', '=', 'patients.id')
        ->join('payments', 'patients.pay_id', '=', 'payments.id')
        ->where('reservations.ward_id', Auth::user()->ward_id)
        ->where('reservations.rec_status', '=', '1')
        ->where('reservations.deleted_at', '=', NULL)
        ->where('reservations.reserve_status', 'ยื่นจอง')
        ->where('reservations.reserve_booking', '>=' ,Carbon::now()->subDays(1))->get();

        // dd($reserveapply);
        // dd($reserve);
        $reall = Reservation::all();
        $pre = Preoperative::all();

        //edit reserve
        $pay = Payment::all();
        $opt = Operative::all();
        $doc = Doctor::all();

        return view('nurseforward.approvedreserv', compact('ward','bed', 'bedavailable','reall', 'pay', 'opt', 'doc', 'pre', 'reserveapply','reserve'));
    }

    public function operative()
    {
        $user = User::find(Auth::user()->id);
        $ward = Ward::find(Auth::user()->ward_id);
        $opt = Operative::all();

        return view('nurseforward.operative', compact('opt'));
    }


    public function formreserv()
    {
        $user = User::find(Auth::user()->id);
        $ward = Ward::all();
        $opt = Operative::all();
        $doc = Doctor::all();
        $pay = Payment::all();
        $pa = Patient::all();
        $prefix = Prefix::all();

                $reserve = Reservation::join('patients', 'reservations.patient_id', '=', 'patients.id')
        ->join('payments', 'patients.pay_id', '=', 'payments.id')
        ->where('reservations.ward_id', Auth::user()->ward_id)
        ->where('reservations.rec_status', '=', '1')
        ->where('reservations.deleted_at', '=', NULL)
        ->where('reservations.reserve_status', 'ยื่นจอง')
        ->where('reservations.reserve_booking', '>=' ,Carbon::now()->subDays(1))->get();
        
        return view('nurseforward.formreserv', compact('opt', 'doc', 'pay', 'ward', 'pa','prefix','reserve'));
    }

    public function patient()
    {
        $user = User::find(Auth::user()->id);
        $ward = Ward::find(Auth::user()->ward_id);
        $opt = Operative::all();
        $doc = Doctor::all();
        $pay = Payment::all();
        $pa = Patient::all();
        $prefix = Prefix::all();



        $reserve = Reservation::join('patients', 'reservations.patient_id', '=', 'patients.id')
        ->join('payments', 'patients.pay_id', '=', 'payments.id')
        ->where('reservations.ward_id', Auth::user()->ward_id)
        ->where('reservations.rec_status', '=', '1')
        ->where('reservations.deleted_at', '=', NULL)
        ->where('reservations.reserve_status', 'ยื่นจอง')
        ->where('reservations.reserve_booking', '>=' ,Carbon::now()->subDays(1))->get();
        return view('nurseforward.patient', compact('opt', 'doc', 'pay', 'ward', 'pa','reserve','prefix'));
    }

    public function manageprofile()
    {
        $user = User::find(Auth::user()->id);
        $ward = Ward::find(Auth::user()->ward_id);

        $wardall = Ward::all();
        $prefix = Prefix::all();

                $reserve = Reservation::join('patients', 'reservations.patient_id', '=', 'patients.id')
        ->join('payments', 'patients.pay_id', '=', 'payments.id')
        ->where('reservations.ward_id', Auth::user()->ward_id)
        ->where('reservations.rec_status', '=', '1')
        ->where('reservations.deleted_at', '=', NULL)
        ->where('reservations.reserve_status', 'ยื่นจอง')
        ->where('reservations.reserve_booking', '>=' ,Carbon::now()->subDays(1))->get();


        return view('nurseforward.profile',compact('prefix','wardall','reserve'));
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
