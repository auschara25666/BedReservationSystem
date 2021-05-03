<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mail as sendMail;

class ManageUserController extends Controller
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
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'string'],
            'permission' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'ward' => ['required'],
        ]);

        $user = new User([
            'name' => $request->prefix,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role,
            'permission_id' => $request->permission,
            'phone' => $request->phone,
            'ward_id' => $request->ward,
            'login_time' => \Carbon\Carbon::now(),
        ]);

        $user->save();

        return back()->with('success', 'สร้างบัญชีผู้ใช้สำเร็จ !!');
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
        $request->validate([$request->all()]);

        $user = User::find($id);
        $user->rec_status = $request->rec_status;
        // $user->role_id = $request->role;
        $user->permission_id = $request->permission;
        $user->save();

        $title = 'ยืนยันการสมัครใช้งานระบบจองเตียง โรงพยาบาลศรีนครินทร์';
        $user_detail = [
            'name' => $user->fname." ".$user->lname,
            'email' => $user->email,
            'ward' => $user->ward->ward_name,
        ];

        $sendmail = Mail::to($user_detail['email'])->send(new sendMail($title, $user_detail));

        if (empty($sendmail)) {
            return back()->with('success', 'อนุมัติบัญชีผู้ใช้ สำเร็จ!!');
        } else {
            return back()->withErrors('อนุมัติบัญชีผู้ใช้ ไม่สำเร็จ!!');
        }

        // return back()->with('success', 'อนุมัติบัญชีผู้ใช้ สำเร็จ!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return back()->with('success', 'ลบ สมาชิก สำเร็จ!!');
    }

    public function manageprofile(Request $request)
    {
        $request->validate([$request->all()]);

        if ($request->manage == 'profile') {
            $user = User::find(Auth::user()->id);
            $user->prefix = $request->prefix;
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->phone = $request->phone;
            $user->ward_id = $request->ward;

            $user->save();
            return redirect()->back()->with('success', 'แก้ไขข้อมูลส่วนตัวสำเร็จ');

        } else {

            $user = User::find(Auth::user()->id);

            // $c = Hash::check($request->password, Auth::user()->password);
            // dd($user);

            if ($request->password != Auth::user()->password) {
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->save();
                return redirect()->back()->with('success', 'แก้ไขข้อมูลส่วนตัวสำเร็จ');
            } else {
                $user->email = $request->email;
                $user->password = $request->password;
                $user->save();

                return redirect()->back()->with('success', 'แก้ไขข้อมูลส่วนตัวสำเร็จ');
            }
        }


        // $user = User::find($id);
        // if (Hash::check($request->oldpassword, auth()->user()->password)) {
        //     $user->password = Hash::make($request->newpassword);
        //     $user->save();

        //     return redirect()->back()->with('success', 'แก้ไข Password สำเร็จ');
        // }

        // return back()->with('success', 'ลบ สมาชิก สำเร็จ!!');
    }

    public function disableadmin(Request $request)
    {
        $user = User::find($request->id);
        $user->rec_status = 0;
        $user->save();

        // dd($request->id);

        return back()->with('success','ปิดการใช้งาน '.$user->prefix.''.$user->fname.' '.$user->lname.' เรียบร้อย');
    }

    public function enableadmin(Request $request)
    {
        $user = User::find($request->id);
        $user->rec_status = 1;
        $user->save();

        return back()->with('success','เปิดการใช้งาน '.$user->prefix.''.$user->fname.' '.$user->lname.' เรียบร้อย');
    }
}
