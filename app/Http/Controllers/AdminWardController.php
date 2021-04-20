<?php

namespace App\Http\Controllers;

use App\Bed;
use App\Department;
use App\Doctor;
use App\Operative;
use App\Patient;
use App\Payment;
use App\Reservation;
use App\User;
use App\Ward;
use App\Event;
use App\Permission;
use App\Preoperative;
use App\Role;
use App\WardUser;
use App\Prefix;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;


class AdminWardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ward = Ward::find(Auth::user()->ward_id);
        $userunsub = User::where('rec_status', 0)->where('permission_id', 5)->orwhere('permission_id', NULL)->whereIn('role_id', [3, 4, 5, 6, 7])->get();

        return view('adminforward.index', compact('ward','userunsub'));
    }

    public function managebed()
    {
        $ward = Ward::find(Auth::user()->ward_id);
        $bed = Bed::where('ward_id', $ward->id)->get();
        $userunsub = User::where('rec_status', 0)->where('permission_id', 5)->orwhere('permission_id', NULL)->whereIn('role_id', [3, 4, 5, 6, 7])->get();

        return view('adminforward.managebed', compact('ward', 'bed','userunsub'));
    }

    public function healline()
    {
        $ward = Ward::find(Auth::user()->ward_id);
        $dept = Department::all();
        // dd($dept);
        $userunsub = User::where('rec_status', 0)->where('permission_id', 5)->orwhere('permission_id', NULL)->whereIn('role_id', [3, 4, 5, 6, 7])->get();

        return view('adminforward.healline', compact('ward', 'dept','userunsub'));
    }

    public function doctor()
    {
        $ward = Ward::find(Auth::user()->ward_id);
        $doctor = Doctor::where('ward_id', $ward->id)->get();
        $dept = Department::all();
        $prefix = Prefix::all();

        $userunsub = User::where('rec_status', 0)->where('permission_id', 5)->orwhere('permission_id', NULL)->whereIn('role_id', [3, 4, 5, 6, 7])->get();

        return view('adminforward.doctor', compact('ward', 'doctor', 'dept','prefix','userunsub'));
    }

    public function operative()
    {
        $ward = Ward::find(Auth::user()->ward_id);
        $operative = Operative::where('ward_id', $ward->id)->get();

        $userunsub = User::where('rec_status', 0)->where('permission_id', 5)->orwhere('permission_id', NULL)->whereIn('role_id', [3, 4, 5, 6, 7])->get();


        return view('adminforward.operative', compact('ward', 'operative','userunsub'));
    }

    public function healrole()
    {
        $ward = Ward::find(Auth::user()->ward_id);
        $pay = Payment::where('ward_id', $ward->id)->get();
        $userunsub = User::where('rec_status', 0)->where('permission_id', 5)->orwhere('permission_id', NULL)->whereIn('role_id', [3, 4, 5, 6, 7])->get();

        return view('adminforward.healrole', compact('ward', 'pay','userunsub'));
    }

    public function userwards()
    {
        $ward = Ward::find(Auth::user()->ward_id);
        $userward = User::where('rec_status', 1)->whereIn('permission_id', [3, 4,5])->whereIn('role_id', [3, 4, 5, 6, 7])->get();
        // $userward = User::where('rec_status', 1)->where('ward_id', Auth::user()->ward_id)->whereIn('permission_id', [3, 4])->whereIn('role_id', [3, 4, 5, 6, 7])->get();
        $userunsub = User::where('rec_status', 0)->where('permission_id', 5)->orwhere('permission_id', NULL)->whereIn('role_id', [3, 4, 5, 6, 7])->get();


        $role = Role::all();
        $permission = Permission::where('permission', '!=', 'SuperAdmin')->get();
        $wardall = Ward::all();
        $prefix = Prefix::all();

        // $user = User::where('rec_status','=', '1')->get();
        $user = User::where('rec_status','=', '1')->where('permission_id', 5)->orwhere('permission_id', NULL)->whereIn('role_id', [3, 4, 5, 6, 7])->get();

        return view('adminforward.userwards', compact('ward', 'userward', 'role', 'user', 'permission', 'wardall','prefix','userunsub'));
    }

    public function manageuserwards()
    {
        $ward = Ward::find(Auth::user()->ward_id);

        $role = Role::all();
        $permission = Permission::where('permission', '!=', 'SuperAdmin')->get();
        $wardall = Ward::all();

        $userunsub = User::where('rec_status', 0)->where('permission_id', 5)->orwhere('permission_id', NULL)->whereIn('role_id', [3, 4, 5, 6, 7])->get();

        return view('adminforward.manageuser', compact('ward', 'userunsub', 'role', 'permission', 'wardall'));
    }

    public function manageprofile()
    {
        $wardall = Ward::all();
        $prefix = Prefix::all();

        $userunsub = User::where('rec_status', 0)->where('permission_id', 5)->orwhere('permission_id', NULL)->whereIn('role_id', [3, 4, 5, 6, 7])->get();

        

        // dd(trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, SALT, base64_decode('$2y$10$S0X5mifgJCwZXR/hh5SFG.rJciFNuLJSpyLTrdGU4WrFMKbFcbknG'), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))));

        return view('adminforward.profile', compact('wardall','prefix','userunsub'));
    }

    public function ward()
    {
        $ward = Ward::where('ward_name', Auth::user()->ward)->first();
        $bed = Bed::where('ward_id', $ward->id)->get();
        $bedavailable = Bed::where('ward_id', $ward->id)->where('bed_status', 'ว่าง')->get();
        $bedavailable = Bed::where('ward_id', $ward->id)->where('bed_status', 'ว่าง')->get();
        $bedocc = Bed::where('ward_id', $ward->id)->where('bed_status', 'ไม่ว่าง')->get();
        $bedun = Bed::where('ward_id', $ward->id)->where('bed_status', 'ชำรุด')->get();
        $bedout = Bed::where('ward_id', $ward->id)->where('bed_status', 'เตรียมออก')->get();


        $reserve = Patient::join('reservations', 'patients.id', '=', 'reservations.patient_id')->where('reservations.rec_status', '=', '1')->where('reservations.deleted_at', '=', NULL)->where('reservations.ward_id', $ward->id)->where('reservations.reserve_status', 'ยื่นจอง')->whereIn('patients.pay_id', [1, 2, 3, 4])->get();
        $reservevip = Patient::join('reservations', 'patients.id', '=', 'reservations.patient_id')->where('reservations.rec_status', '=', '1')->where('reservations.deleted_at', '=', NULL)->where('reservations.ward_id', $ward->id)->where('reservations.reserve_status', 'ยื่นจอง')->whereIn('patients.pay_id', [5, 6, 7, 8])->get();
        // $reservevip = Patient::join('reservations', 'patients.id', '=', 'reservations.patient_id')->where('reservations.rec_status', '=', '1')->where('reservations.deleted_at', '=', NULL)->where('reservations.ward_id', $ward->id)->where('reservations.reserve_status', 'ยื่นจอง')->get();
        $reserveapply = Patient::join('reservations', 'patients.id', '=', 'reservations.patient_id')->where('reservations.rec_status', '=', '1')->where('reservations.deleted_at', '=', NULL)->where('reservations.ward_id', $ward->id)->where('reservations.reserve_status', 'อนุมัติเตียง')->get();
        $reservecan = Patient::join('reservations', 'patients.id', '=', 'reservations.patient_id')->where('reservations.rec_status', '=', '1')->where('reservations.deleted_at', '=', NULL)->where('reservations.ward_id', $ward->id)->where('reservations.reserve_status', 'ยกเลิกจอง')->get();


        // dd($reserveapply);
        // dd($reserve);
        $reall = Reservation::all();
        $pre = Preoperative::all();

        //edit reserve
        $pay = Payment::where('ward_id', $ward->id)->get();
        $opt = Operative::where('ward_id', $ward->id)->get();
        $doc = Doctor::where('ward_id', $ward->id)->get();

        return view('adminward.ward', compact('bed', 'bedavailable', 'bedocc', 'bedun', 'bedout', 'ward', 'reserve', 'reservevip', 'reserveapply', 'reall', 'pay', 'opt', 'doc', 'pre', 'reservecan'));
    }

    public function reserveadminward()
    {
        $ward = Ward::where('ward_name', Auth::user()->ward)->first();
        $opt = Operative::where('ward_id',  $ward->id)->get();
        $doc = Doctor::where('ward_id',  $ward->id)->get();
        $pay = Payment::where('ward_id',  $ward->id)->get();
        $pa = Patient::where('ward_id',  $ward->id)->get();
        return view('adminward.reservation', compact('opt', 'doc', 'pay', 'ward', 'pa'));
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
