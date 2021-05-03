<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Bed;
use App\Operative;
use App\Patient;
use App\Payment;
use App\Reservation;
use App\Ward;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chiefforward.formreserv');
    }


    public function search(Request $request){
        // check if ajax request is coming or not
        if($request->ajax()) {
            // select country name from database
            $data = Patient::where('hn', 'LIKE', $request->hn.'%')
                ->get();
            // declare an empty array for output
            $output = '';
            // if searched countries count is larager than zero
            if (count($data)>0) {
                // concatenate output to the array
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
                // loop through the result array
                foreach ($data as $row){
                    // concatenate output to the array
                    $output .= '<li class="list-group-item">'.$row->hn.'</li>';
                }
                // end of output
                $output .= '</ul>';
            }
            else {
                // if there's no matching results according to the input
                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }
            // return output result array
            return $output;
        }
    }


    public function homeuser()
    {
        $opt = Operative::all();
        $doc = Doctor::all();
        $pay = Payment::all();
        $lward = Ward::all();
        $pa = Patient::all();
        $reserve = Reservation::where('created_user_id', Auth::user()->id)->get();
        return view('user.user-reservation.home-reservation', compact('opt', 'doc', 'pay', 'lward', 'pa', 'reserve'));
    }

    public function reserveuser()
    {
        $opt = Operative::all();
        $doc = Doctor::all();
        $pay = Payment::all();
        $ward = Ward::all();
        $pa = Patient::all();
        return view('user.user-reservation.reserve-user', compact('opt', 'doc', 'pay', 'ward', 'pa'));
    }

    public function getopt($id)
    {
        echo json_encode(Operative::all());
    }

    public function getvalueopt($id)
    {
        echo json_encode(Operative::all());
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

        $book = explode("/", $request->reserve_booking);
        $reserve_booking = $book[2] . "-" . $book[1] . "-" . $book[0];

        $patient = Patient::where('hn', $request->hn)->first();

        
        if ($patient == null) {
            $pa = new Patient([
                'hn' => $request->hn,
                'prefix' => $request->prefix,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'age' => $request->pa_age,
                'sex' => $request->pa_sex,
                'phone' => $request->pa_phone,
                'pay_id' => $request->pay,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,

            ]);

            $pa->save();

            $pat = Patient::where('hn', $request->hn)->first();

            $reserve = new Reservation([
                'reserve_status' => 'ยื่นจอง',
                'patient_id' => $pat->id,
                'ward_id' => $request->ward_in,
                'ward_enter' => $request->ward_enter,
                'opt_id' => $request->opt_id,
                'reserve_booking' => $reserve_booking,
                'doctor_id' => $request->doctor_id,
                'disease' => $request->disease,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,
            ]);

            $reserve->save();


            $reser = Reservation::where('reserve_status','ยื่นจอง')
                                ->where('ward_id', $request->ward_in)
                                ->where('ward_enter', $request->ward_enter)
                                ->where('opt_id', $request->opt_id)
                                ->where('reserve_booking', $reserve_booking)
                                ->where('doctor_id', $request->doctor_id)
                                ->where('disease', $request->disease)
                                ->where('created_user_id', Auth::user()->id)
                    ->where('created_at',\Carbon\Carbon::now())
                                ->where('patient_id', $pa->id)->first();


            $event = new Event([
                'event_status' => '1',// 1 = ยื่่นจอง
                'date' => \Carbon\Carbon::now(),
                'detail' => "ยื่นจอง",
                'reserve_id' => $reser->id,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,
            ]);

            $event->save();

            return back()->with('success', 'ทำรายการจอง สำเร็จ!!');

        } else {

            $pa = Patient::where('hn', $request->hn)->first();
            $re = Reservation::where('patient_id', $pa->id)
                            ->where('reserve_booking',$reserve_booking)->first();



            if ($re != null) {
                // dd('ผู้ป่วยรายนี้ได้ทำการจองในวันที่กล่าวแล้ว');
                return back()->with('alerterror', 'ผู้ป่วยรหัส HN นี้ ได้ทำการจองในวันที่กล่าวแล้ว กรุณาตรวจสอบข้อมูล');
            } else {
                $patient = Patient::find($patient->id);
                $patient->hn = $request->hn;
                $patient->rec_status = '1';
                $patient->pay_id = $request->pay;

                $patient->save();

                $reserve = new Reservation([
                    'reserve_status' => 'ยื่นจอง',
                    'patient_id' => $patient->id,
                    'ward_id' => $request->ward_in,
                    'ward_enter' => $request->ward_enter,
                    'opt_id' => $request->opt_id,
                    'reserve_booking' => $reserve_booking,
                    'doctor_id' => $request->doctor_id,
                    'disease' => $request->disease,
                    'rec_status' => '1',
                    'created_user_id' => Auth::user()->id,
                ]);
                
                $reserve->save();


                // $reser = Reservation::where('reserve_status','ยื่นจอง')
                //         ->where('ward_id', $request->ward_in)
                //         ->where('ward_enter', $request->ward_enter)
                //         ->where('opt_id', $request->opt_id)
                //         ->where('reserve_booking', $reserve_booking)
                //         ->where('doctor_id', $request->doctor_id)
                //         ->where('disease', $request->disease)
                //         ->where('created_user_id', Auth::user()->id)
                //     ->where('created_at',\Carbon\Carbon::now())
                //         ->where('patient_id', $pa->id)->first();

                $event = new Event([
                    'event_status' => '1',// 1 = ยื่่นจอง
                    'date' => \Carbon\Carbon::now(),
                    'detail' => "ยื่่นจอง",
                    'reserve_id' => $reserve->id,
                    'rec_status' => '1',
                    'created_user_id' => Auth::user()->id,
                ]);

                $event->save();
                return back()->with('success', 'ทำรายการจอง สำเร็จ!!');
            }
            

            
        }

    }

    public function reservuser(Request $request)
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
                'age' => $request->pa_age,
                'sex' => $request->pa_sex,
                'phone' => $request->pa_phone,
                'pay_id' => $request->pay,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,

            ]);

            $pa->save();

            $pat = Patient::where('hn', $request->hn)->first();

            $reserve = new Reservation([
                'reserve_status' => 'ยื่นจอง',
                'patient_id' => $pat->id,
                'ward_id' => $request->ward,
                'ward_enter' => $request->ward_enter,
                'opt_id' => $request->opt_id,
                'reserve_booking' => $reserve_booking,
                'doctor_id' => $request->doctor_id,
                'disease' => $request->disease,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,

            ]);

            $reserve->save();




            // $reser = Reservation::where('reserve_status','ยื่นจอง')
            //         ->where('ward_id', $request->ward_in)
            //         ->where('ward_enter', $request->ward_enter)
            //         ->where('opt_id', $request->opt_id)
            //         ->where('reserve_booking', $reserve_booking)
            //         ->where('doctor_id', $request->doctor_id)
            //         ->where('disease', $request->disease)
            //         ->where('created_user_id', Auth::user()->id)
            //         ->where('created_at',\Carbon\Carbon::now())
            //         ->where('patient_id', $pat->id)->first();


            $event = new Event([
                'event_status' => '1',// 1 = ยื่่นจอง
                'date' => \Carbon\Carbon::now(),
                'detail' => "ยื่่นจอง",
                'reserve_id' => $reserve->id,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,
            ]);

            $event->save();


            return back()->with('success', 'ทำรายการจอง สำเร็จ!!');

        } else {

            $pa = Patient::where('hn', $request->hn)->first();
            $re = Reservation::where('patient_id', $pa->id)
                            ->where('reserve_booking',$reserve_booking)->first();



            if ($re != null) {
                // dd('ผู้ป่วยรายนี้ได้ทำการจองในวันที่กล่าวแล้ว');
                return back()->with('alerterror', 'ผู้ป่วยรหัส HN นี้ ได้ทำการจองในวันที่กล่าวแล้ว กรุณาตรวจสอบข้อมูล');
            } else {
                $pat = Patient::find($pa->id);
                $pat->hn = $request->hn;
                $pat->rec_status = '1';
                $pat->pay_id = $request->pay;

                // $patient->save();

                $reserve = new Reservation([
                    'reserve_status' => 'ยื่นจอง',
                    'patient_id' => $pat->id,
                    'ward_id' => $request->ward,
                    'ward_enter' => $request->ward_enter,
                    'opt_id' => $request->opt_id,
                    'reserve_booking' => $reserve_booking,
                    'doctor_id' => $request->doctor_id,
                    'disease' => $request->disease,
                    'rec_status' => '1',
                    'created_user_id' => Auth::user()->id,
                ]);
                
                $reserve->save();



                // $reser = Reservation::where('reserve_status','ยื่นจอง')
                //         ->where('created_at',\Carbon\Carbon::now())
                //         ->where('ward_id', $request->ward_in)
                //         ->where('ward_enter', $request->ward_enter)
                //         ->where('opt_id', $request->opt_id)
                //         ->where('reserve_booking', $reserve_booking)
                //         ->where('doctor_id', $request->doctor_id)
                //         ->where('disease', $request->disease)
                //         ->where('created_user_id', Auth::user()->id)
                //         ->where('patient_id', $pat->id)->first();


                $event = new Event([
                    'event_status' => '1',// 1 = ยื่่นจอง
                    'date' => \Carbon\Carbon::now(),
                    'detail' => "ยื่่นจอง",
                    'reserve_id' => $reserve->id,
                    'rec_status' => '1',
                    'created_user_id' => Auth::user()->id,
                ]);

                $event->save();

                return back()->with('success', 'ทำรายการจอง สำเร็จ!!');
            }
            

            
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function movebed(Request $request)
    {
        $reserve = Reservation::find($request->reserve_id);
        $reserve->bed_id = $request->bed_new;

        $bedold = Bed::find($request->bed_old);

        if ( $bedold->bed_status == 'รอเข้า') {

            $bednew = Bed::find($request->bed_new);

            $bedold->bed_status = 'ว่าง';
            $bednew->bed_status = 'รอเข้า';

            $event = new Event([
                'event_status' => '5',// 5 = ย้ายเตียง
                'date' => \Carbon\Carbon::now(),
                'detail' => "ย้ายเตียง จาก".$bedold->bed_number." ไปเตียง ".$bednew->bed_number,
                'reserve_id' => $request->reserve_id,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,
            ]);

            $bedold->save();
            $bednew->save();
            $event->save();

        } elseif( $bedold->bed_status == 'ไม่ว่าง') {

            $bednew = Bed::find($request->bed_new);

            $bedold->bed_status = 'ว่าง';
            $bednew->bed_status = 'ไม่ว่าง';

            $event = new Event([
                'event_status' => '5',// 5 = ย้ายเตียง
                'date' => \Carbon\Carbon::now(),
                'detail' => "ย้ายเตียง จาก".$bedold->bed_number." ไปเตียง ".$bednew->bed_number,
                'reserve_id' => $request->reserve_id,
                'rec_status' => '1',
                'created_user_id' => Auth::user()->id,
            ]);

            $bedold->save();
            $bednew->save();
            $event->save();

        }
        

        // dd($request);

        $reserve->save();

        return back()->with('success','ย้ายเตียง สำเร็จ !!');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'hn' => 'required',
        // ]);

        if ($request->saveopt == 1) {
            $reserve = Reservation::find($id);
            if ($request->preopt == '') {
                $reserve->preopt_id = null;

                $event = new Event([
                    'event_status' => '3',// 3 = รายการเตรียมตรวจ
                    'date' => \Carbon\Carbon::now(),
                    'detail' => "รายการเตรียมตรวจ ไม่มี",
                    'reserve_id' => $id,
                    'rec_status' => '1',
                    'created_user_id' => Auth::user()->id,
                ]);

                $reserve->save();
                $event->save();
    
                return back()->with('success', 'บันทึกรายการเตรียมตรวจ สำเร็จ !!');

            } else {
                $reserve->preopt_id = implode(",", $request->preopt);

                $event = new Event([
                    'event_status' => '3',// 3 = รายการเตรียมตรวจ
                    'date' => \Carbon\Carbon::now(),
                    'detail' => "รายการเตรียมตรวจ ".implode(",", $request->preopt),
                    'reserve_id' => $id,
                    'rec_status' => '1',
                    'created_user_id' => Auth::user()->id,
                ]);

                $reserve->save();
                $event->save();
    
                return back()->with('success', 'บันทึกรายการเตรียมตรวจ สำเร็จ !!');
            }
            // dd($reserve);

        } else {
            $book = explode("/", $request->reserve_booking);
            $reserve_booking = $book[2] . "-" . $book[1] . "-" . $book[0];


            $reserve = Reservation::find($id);
            $reserve->ward_id = $request->ward_in;
            $reserve->ward_enter = $request->ward_enter;
            $reserve->opt_id = $request->opt_id;
            $reserve->reserve_booking = $reserve_booking;
            $reserve->doctor_id = $request->doctor_id;
            $reserve->disease = $request->disease; 
            $reserve->pay_id = $request->pay; 

            $pat = Patient::where('hn', $request->hn)->first();
            $patient = Patient::find($pat->id);
            // $patient->hn = $request->hn;
            // $patient->prefix = $request->prefix;
            // $patient->fname = $request->fname;
            // $patient->lname = $request->lname;
            // $patient->birthday = $paage;
            // $patient->sex = $request->pa_sex;
            $patient->phone = $request->pa_phone;

            // $user = User::find(Auth::user()->id);
            // $user->ward = $request->ward_created;
            // $user->save();


            $reserve->save();
            $patient->save();

            return back()->with('success', 'แก้ไขรายการจอง สำเร็จ !!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
       $reserve = Reservation::find($id);
       $reserve->reserve_status = 'ลบการจอง';
       $reserve->rec_status = 0;


       $event = new Event([
        'event_status' => '8',// 8= ลบรายการจอง
        'date' => \Carbon\Carbon::now(),
        'detail' => "ลบรายการจอง",
        'reserve_id' => $id,
        'rec_status' => '1',
        'created_user_id' => Auth::user()->id,
        ]);

        $reserve->save();
        $event->save();
        $reserve = Reservation::find($id)->delete();


       return redirect()->back()->with('success', 'ทำการ ลบรายการจอง สำเร็จ!!');
    }

    public function cancelreserve(Request $request)
    {

        $event = new Event([
            'event_status' => '7', // 7 = ยกเลิกรายการจอง
            'date' => \Carbon\Carbon::now(),
            'detail' => "ยกเลิกการจอง เพราะ".$request->detail_can,
            'reserve_id' => $request->reserve_id,
            'rec_status' => '1',
            'created_user_id' => Auth::user()->id,
        ]);

        $reserve = Reservation::find($request->reserve_id);
        $reserve->reserve_status = 'ยกเลิกจอง';
        $reserve->reserve_detail = $request->detail_can;
        

        $bed = Bed::find($reserve->bed_id);
        $bed->bed_status = 'ว่าง';

        // dd($request);
        
        $event->save();
        $reserve->save();
        $bed->save();

        return back()->with('success', 'ทำการ ยกเลิกรายการจอง สำเร็จ!!');

    }

}