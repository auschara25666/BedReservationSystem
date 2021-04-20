<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Event;
use App\Bed;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
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

    public function getPatient(Request $request)
    {
        $pa = Patient::all();

        return response()->json($pa);
    }

    public function getHover($id)
    {
        $ev = Event::where('bed_id',$id);
        $re = Reservation::find($ev->id);

        $hover = '<p><label>Name : {{ $re->patient->name }}</label></p>';

        return $hover;
    }

    // public function search(Request $request){

    //     if($request->ajax()) {

    //         $data = Patient::where('hn', 'LIKE', $request->hn.'%')
    //             ->get();

    //         $output = '';

    //         if (count($data)>0) {

    //             $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';

    //             foreach ($data as $row){

    //                 $output .= '<li class="list-group-item">'.$row->hn.'</li>';
    //             }

    //             $output .= '</ul>';
    //         }
    //         else {

    //             $output .= '<li class="list-group-item">'.'No results'.'</li>';
    //         }

    //         return $output;
    //     }
    // }

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


        $book = explode("/", $request->reserve_booking);
        $reserve_booking = $book[2] . "-" . $book[1] . "-" . $book[0];

        $patient = Patient::where('hn', $request->hn)->first();

        
        if ($patient == null) {
            $pa = new Patient([
                    'hn' => $request->hn,
                    'prefix' => $request->prefix,
                    'fname' => $request->fname,
                    'lname' => $request->lname,
                    'birthday' => $request->pa_birthday,
                    'sex' => $request->pa_sex,
                    'phone' => $request->pa_phone,
                    'pay_id' => $request->pay,
                    'rec_status' => '1',
                    'created_user_id' => Auth::user()->id,
        
                ]);
        

            $pa->save();

            $pat = Patient::where('hn', $request->hn)->first();

             $reserve = new Reservation([
                'reserve_status' => 'เข้าไม่ผ่านระบบ',
                'patient_id' => $pat->id,
                'ward_id' => Auth::user()->ward_id,
                'opt_id' => $request->opt_id,
                'reserve_booking' => $reserve_booking,
                'doctor_id' => $request->doctor_id,
                'disease' => $request->disease,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,
                'bed_id' => $request->bed_id,
            ]);

            $reserve->save();

            $reser = Reservation::where('reserve_status','เข้าไม่ผ่านระบบ')
                                ->where('ward_id', Auth::user()->ward_id)
                                ->where('opt_id', $request->opt_id)
                                ->where('reserve_booking', $reserve_booking)
                                ->where('doctor_id', $request->doctor_id)
                                ->where('created_user_id', Auth::user()->id)
                                ->where('bed_id',$request->bed_id)
                                ->where('patient_id', $pat->id)->first();
            // // dd($reser->id);

            $event = new Event([
                'event_status' => '2',
                'date' => \Carbon\Carbon::now(),
                'detail' => "เข้าไม่ผ่านระบบจอง ติดต่อ ".Auth::user()->ward->ward_phone,
                'reserve_id' => $reser->id,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,

            ]);

            $bed = Bed::find($request->bed_id);
            $bed->bed_status = 'รอเข้า';

            // dd($request);
            $reserve->save();
            $event->save();
            $bed->save();

            return back()->with('success', 'ทำรายการจอง สำเร็จ!!');

        } else {

            $pa = Patient::where('hn', $request->hn)->first();
            $re = Reservation::where('patient_id', $pa->id)
                            ->where('reserve_booking',$reserve_booking)->first();



            if ($re != null) {
                // dd('ผู้ป่วยรายนี้ได้ทำการจองในวันที่กล่าวแล้ว');
                return back()->with('alerterror', 'ผู้ป่วยรหัส HN นี้ ได้ทำการจองในวันที่กล่าวแล้ว กรุณาตรวจสอบข้อมูล');
            } else {
                // $patient = Patient::find($patient->id);
                // $patient->hn = $request->hn;
                // $patient->rec_status = '1';

                // $patient->save();

                 $reserve = new Reservation([
                'reserve_status' => 'เข้าไม่ผ่านระบบ',
                'patient_id' => $pa->id,
                'ward_id' => Auth::user()->ward_id,
                'opt_id' => $request->opt_id,
                'reserve_booking' => $reserve_booking,
                'doctor_id' => $request->doctor_id,
                'disease' => $request->disease,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,
                'bed_id' => $request->bed_id,
            ]);
                
                $reserve->save();

                $reser = Reservation::where('reserve_status','เข้าไม่ผ่านระบบ')
                                ->where('ward_id', Auth::user()->ward_id)
                                ->where('opt_id', $request->opt_id)
                                ->where('reserve_booking', $reserve_booking)
                                ->where('doctor_id', $request->doctor_id)
                                ->where('created_user_id', Auth::user()->id)
                                ->where('bed_id',$request->bed_id)
                                ->where('patient_id', $pa->id)->first();
            // dd($reser->id);

            $event = new Event([
                'event_status' => '2',
                'date' => \Carbon\Carbon::now(),
                'detail' => "เข้าไม่ผ่านระบบจอง ติดต่อ ".Auth::user()->ward->ward_phone,
                'reserve_id' => $reser->id,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,

            ]);

            $bed = Bed::find($request->bed_id);
            $bed->bed_status = 'รอเข้า';

            // dd($request);
            $reserve->save();
            $event->save();
            $bed->save();

                return back()->with('success', 'ทำรายการจอง สำเร็จ!!');
            }
            

            
        }


        // $book = explode("/", $request->reserve_booking);
        // $reserve_booking = $book[2] . "-" . $book[1] . "-" . $book[0];

        // $pa = new Patient([
        //     'hn' => $request->hn,
        //     'prefix' => $request->prefix,
        //     'fname' => $request->fname,
        //     'lname' => $request->lname,
        //     'birthday' => $request->pa_birthday,
        //     'sex' => $request->pa_sex,
        //     'phone' => $request->pa_phone,
        //     'disease' => $request->disease,
        //     'pay_id' => $request->pay,
        //     'rec_status' => '1',
        //     'created_user_id' => Auth::user()->id,

        // ]);

        // $pa->save();

        //     $pat = Patient::where('hn', $request->hn)->first();

        // $reserve = new Reservation([
        //         'reserve_status' => 'เข้าไม่ผ่านระบบ',
        //         'patient_id' => $pat->id,
        //         'ward_id' => Auth::user()->ward_id,
        //         'opt_id' => $request->opt_id,
        //         'reserve_booking' => $reserve_booking,
        //         'doctor_id' => $request->doctor_id,
        //         'rec_status' => '1',
        //         'created_user_id' => Auth::user()->id,
        //         'bed_id' => $request->bed_id,
        //     ]);

        //     $reserve->save();

        //     $reser = Reservation::where('reserve_status','เข้าไม่ผ่านระบบ')
        //                         ->where('ward_id', Auth::user()->ward_id)
        //                         ->where('opt_id', $request->opt_id)
        //                         ->where('reserve_booking', $reserve_booking)
        //                         ->where('doctor_id', $request->doctor_id)
        //                         ->where('created_user_id', Auth::user()->id)
        //                         ->where('bed_id',$request->bed_id)
        //                         ->where('patient_id', $pat->id)->first();
        //     // dd($reser->id);

        //     $event = new Event([
        //         'event_status' => '2',
        //         'date' => \Carbon\Carbon::now(),
        //         'detail' => "เข้าไม่ผ่านระบบจอง ติดต่อ ".Auth::user()->ward->ward_phone,
        //         'reserve_id' => $reser->id,
        //         'rec_status' => '1',
        //         'created_user_id' => Auth::user()->id,

        //     ]);


        //     $bed = Bed::find($request->bed_id);
        //     $bed->bed_status = 'รอเข้า';

        //     // dd($request);
        //     // $reserve->save();
        //     $event->save();
        //     $bed->save();


        //     return back()->with('success', 'ทำรายการจอง สำเร็จ!!');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {

        $age = explode("/", $request->pa_age);
        $paage = $age[2] . "-" . $age[1] . "-" . $age[0];

        $patient = Patient::find($id);
                $patient->hn = $request->hn;
                $patient->prefix = $request->prefix;
                $patient->fname = $request->fname;
                $patient->lname = $request->lname;
                $patient->phone = $request->pa_phone;
                $patient->sex = $request->pa_sex;
                $patient->pay_id = $request->pay_id;
                $patient->birthday = $paage;

                $patient->save();

                // dd($patient);

                return back()->with('success', 'แก้ไขข้อมูลผู้ป่วยสำเร็จ สำเร็จ!!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
