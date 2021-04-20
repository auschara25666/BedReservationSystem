<?php

namespace App\Http\Controllers;

use App\Bed;
use App\ChiefnurseSchedule;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::user()->rec_status == 1) {

            if (Auth::user()->permission_id == 1) {
                $login_time = User::find(Auth::user()->id);
                $login_time->login_time = Carbon::now();
                $login_time->save();
                // return view('superadmin.admin');
                return redirect()->route('superadmin');
            }

            if (Auth::user()->permission_id == 2) {
                $login_time = User::find(Auth::user()->id);
                $login_time->login_time = Carbon::now();
                $login_time->save();
                return redirect()->route('adminward');
            }

            if (Auth::user()->permission_id == 3) {
                // if (is_null(Auth::user()->schedule_id)) {
                    $login_time = User::find(Auth::user()->id);
                    $login_time->login_time = Carbon::now();
                    $login_time->save();
                    return redirect()->route('chiefnurse');
                // } else {
                //     $sc = ChiefnurseSchedule::find(Auth::user()->schedule_id)->first();

                //     if ($sc->date != \Carbon\Carbon::now()->toDateString()) {

                //         $crole = User::find(Auth::user()->id);
                //         $crole->permission_id = 4;
                //         $crole->role_id = 6;
                //         $crole->save();

                //         $login_time = User::find(Auth::user()->id);
                //         $login_time->login_time = Carbon::now();
                //         $login_time->save();

                //         return redirect()->route('nurse');
                //     } else {

                //         $login_time = User::find(Auth::user()->id);
                //         $login_time->login_time = Carbon::now();
                //         $login_time->save();
                //         return redirect()->route('chiefnurse');
                //     }
                    // return redirect()->route('chiefnurse');
                // }
            }

            if (Auth::user()->permission_id == 4) {
                // if (is_null(Auth::user()->schedule_id)) {
                    $login_time = User::find(Auth::user()->id);
                    $login_time->login_time = Carbon::now();
                    $login_time->save();
                    return redirect()->route('nurse');
                // } else {
                //     $sc = ChiefnurseSchedule::find(Auth::user()->schedule_id)->first();
                //     if ($sc->date == \Carbon\Carbon::now()->toDateString()) {

                //         $crole = User::find(Auth::user()->id);
                //         $crole->permission_id = 3;
                //         $crole->role_id = 3;
                //         $crole->save();

                //         $login_time = User::find(Auth::user()->id);
                //         $login_time->login_time = Carbon::now();
                //         $login_time->save();

                //         return redirect()->route('chiefnurse');
                //     } else {
                //         $login_time = User::find(Auth::user()->id);
                //         $login_time->login_time = Carbon::now();
                //         $login_time->save();
                //         return redirect()->route('nurse');
                //     }
                // }
            }

            if (Auth::user()->permission_id == 5) {
                $login_time = User::find(Auth::user()->id);
                $login_time->login_time = Carbon::now();
                $login_time->save();
                return redirect()->route('user');
            }
        } 
        elseif (Auth::user()->rec_status == 0 || Auth::user()->permission_id == NULL) {
            Auth::logout();
            Session::flush();
            return redirect()->route('login')->withErrors('โปรดรอการอนุมัติบัญชีจากผู้ดูแลระบบ คุณสามารถเช็คสถานะการอนุมัติบัญชีได้ใน E-mail ที่ลงทะเบียน');
        }

        Session::flush();

        // if (Auth::check() == true) {
        //     if (Auth::user()->active == 1) {
        //         if (Auth::user()->role == 'แพทย์') {
        //             return view('user.booking-list');
        //         }
        //         if (Auth::user()->role == 'พยาบาล(OPD)') {
        //             return view('user.booking-list');
        //         }
        //         if (Auth::user()->role == 'พยาบาลหัวหน้าหอผู้ป่วย') {
        //             return view('admin.home-admin');
        //         }
        //         if (Auth::user()->role == 'พยาบาล(3จ)') {

        //             $booking = Booking::all();
        //             $bed = Bed::all();
        //             $bedavailable = Bed::where('status', 'ว่าง')->get();
        //             $bedocc = Bed::where('status', 'ไม่ว่าง')->get();
        //             $bedun = Bed::where('status', 'ชำรุด')->get();
        //             $bedout = Bed::where('status', 'เตรียมออก')->get();
        //             return view('ward.nurse.home-nurse', compact('booking', 'bed', 'bedavailable', 'bedocc', 'bedun', 'bedout'));
        //         }
        //         if (Auth::user()->role == 'พยาบาลหัวหน้าเวร') {
        //             $booking = Booking::all();
        //             $bookingon = Booking::where('possibility', 'เบิกได้')
        //                 ->orwhere('possibility', 'จ่ายตรง')
        //                 ->orwhere('possibility', 'รัฐวิสาหกิจ')
        //                 ->orwhere('possibility', 'บัตรทอง')->get();

        //             $bookingvip = Booking::where('possibility', 'ประกันสังคม')
        //                 ->orwhere('possibility', 'อปท')
        //                 ->orwhere('possibility', 'นักศึกษามหาวิทยาลัยขอนแก่น')
        //                 ->orwhere('possibility', 'บุคคลากร')->get();

        //             $bed = Bed::all();
        //             $bedavailable = Bed::where('status', 'ว่าง')->get();
        //             $bedocc = Bed::where('status', 'ไม่ว่าง')->get();
        //             $bedun = Bed::where('status', 'ชำรุด')->get();
        //             $bedout = Bed::where('status', 'เตรียมออก')->get();
        //             return view('ward.chief-nurse.home-chief-nurse', compact('booking', 'bookingvip', 'bookingon', 'bed', 'bedavailable', 'bedocc', 'bedun', 'bedout'));
        //         }
        //     } elseif (Auth::user()->active == 0) {
        //         Auth::logout();
        //         return redirect()->route('login')->with('message', 'กรุณารอ การยืนยันการสมัคร จากแอดมิน!!');
        //     }
        // } else {
        //     return redirect()->back()->with('message', 'Username หรือ Password ไม่ถูกต้อง!! กรุณาตรวจสอบอีกครั้ง!!');
        // }

    }
}
