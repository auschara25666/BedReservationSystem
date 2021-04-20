<?php

namespace App\Http\Controllers;

use App\Expenses;
use App\Bed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpensesController extends Controller
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
        $expen = Expenses::where('reserve_id',$request->reserve_id)->first();
        if ($expen != null) {
            $ex = Expenses::find($expen->id);

            $ex->total = $request->total;
            $ex->total_re = $request->total_re;
            $ex->total_se = $request->total - $request->total_re;

            $bed = Bed::find($request->bed_id);
            $bed->bed_status = 'เตรียมออก';
    
            $ex->save();
            $bed->save();

        return back()->with('success','บันทึกค่าใช้จ่าย สำเร็จ !!');


        }else{
            $ex = new Expenses([
                'reserve_id' => $request->reserve_id,
                'created_user_id' => Auth::user()->id,
                'total' => $request->total,
                'total_re' => $request->total_re,
                'total_se' => $request->total - $request->total_re,
            ]);
    
            $bed = Bed::find($request->bed_id);
            $bed->bed_status = 'เตรียมออก';
    
            $ex->save();
            $bed->save();

        return back()->with('success','บันทึกค่าใช้จ่าย สำเร็จ !!');

        }


        // dd($event);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function show(Expenses $expenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function edit(Expenses $expenses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $expen = Expenses::find($id);
        $expen->total = $request->total;
        $expen->total_re = $request->total_re;
        $expen->total_se = $request->total - $request->total_re;

        $expen->save();
        // dd($expen->total_se);
        return back()->with('success','บันทึกค่าใช้จ่าย สำเร็จ !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expenses $expenses)
    {
        //
    }
}
