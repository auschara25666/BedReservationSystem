<?php

namespace App\Http\Controllers;

use App\Preoperative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreoperativeController extends Controller
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
        $request->validate([$request->all()]);

        $pre = new Preoperative([
            'pre_opt' => $request->pre,
            'rec_status' => '1',
            'created_user_id' => Auth::user()->id,
        ]);

        $pre->save();

        // $pre = $request[trim('pre')];
        // dd($pre);
        // $pre = new Preoperative([
        //     'pre_opt' => pre,
        //     'rec_status' => '1',
        //     'created_user_id' => Auth::user()->id,
        // ]);

        $pre->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Preoperative  $preoperative
     * @return \Illuminate\Http\Response
     */
    public function show(Preoperative $preoperative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preoperative  $preoperative
     * @return \Illuminate\Http\Response
     */
    public function edit(Preoperative $preoperative)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preoperative  $preoperative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preoperative $preoperative)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Preoperative  $preoperative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preoperative $preoperative)
    {
        //
    }
}
