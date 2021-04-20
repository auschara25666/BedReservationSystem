<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\User;
use App\Ward;
use App\Prefix;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ward = Ward::all();

        return view('superadmin.index');
    }

    public function manageward()
    {
        $ward = Ward::all();

        return view('superadmin.manageward',compact('ward'));
    }

    public function manageadmin()
    {
        $user = User::where('role_id',2)->get();
        $ward = Ward::all();
        $role = Role::all();
        $prefix = Prefix::all();
        $permission = Permission::all();
        return view('superadmin.manageadmin',compact('user','ward','role','permission','prefix'));
    }

    public function manageprofile()
    {
        $prefix = Prefix::all();
        return view('superadmin.profile',compact('prefix'));
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
