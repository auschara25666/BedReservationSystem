<?php

namespace App\Http\Controllers;


use App\Patient;
// use App\Reservation;
use App\Event;
use App\Ward;
use App\User;
use App\Operative;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Redirect,Response;
use DB;

class StatisticController extends Controller
{

    public function index()
    {

        $user = User::find(Auth::user()->id);
        $ward = Ward::find(Auth::user()->ward_id);
        $opt = Operative::orderBy('opt_name','asc')->get();

      $reserve = Patient::join('reservations', 'patients.id', '=', 'reservations.patient_id')
      ->where('reservations.rec_status', '=', '1')
      ->where('reservations.deleted_at', '=', NULL)
      ->where('reservations.ward_id', $ward->id)
      ->where('reservations.reserve_status', 'ยื่นจอง')
      ->where('reservations.reserve_booking', '>=' ,Carbon::now()->subDays(1))
      ->whereIn('patients.pay_id', [1, 2, 3, 4, 5, 6, 7, 8])->orderBy('reservations.reserve_booking','asc')->orderBy('patients.pay_id','desc')->get();
      
        return view('chiefforward.ward-statistic',compact('reserve','ward','opt'));
    }
 
    public function getEvent(){

      $user = User::find(Auth::user()->id);
      $ward = Ward::find(Auth::user()->ward_id);
 
      $Events = Event::leftjoin('reservations', 'events.reserve_id', '=', 'reservations.id')
      ->leftjoin('expenses', 'expenses.reserve_id', '=', 'reservations.id')
      ->leftjoin('operatives', 'reservations.opt_id', '=', 'operatives.id')
      ->leftjoin('patients', 'patients.id', '=', 'reservations.patient_id')
      ->where('reservations.reserve_status','จำหน่าย')
       ->where('reservations.ward_id', $ward->id)->select('events.created_at','patients.hn','patients.prefix','patients.fname','patients.lname','patients.age','operatives.id','operatives.opt_name','reservations.reserve_status','events.event_status','events.detail','reservations.disease','reservations.complication','expenses.total')->get(); 
      
      // Fetch all records
      $response['data'] = $Events;
 
      return response()->json($response);
    }
 
    public function getEventbyDate(Request $request){

      $user = User::find(Auth::user()->id);
      $ward = Ward::find(Auth::user()->ward_id);
 
       $dateFrom = ($request->dateFrom);
       $dateTo = ($request->dateTo);
 
       $event_data = Event::leftjoin('reservations', 'events.reserve_id', '=', 'reservations.id')
       ->leftjoin('expenses', 'expenses.reserve_id', '=', 'reservations.id')
       ->leftjoin('operatives', 'reservations.opt_id', '=', 'operatives.id')
       ->leftjoin('patients', 'patients.id', '=', 'reservations.patient_id')
      ->where('reservations.reserve_status','จำหน่าย')
        ->where('reservations.ward_id', $ward->id)->whereBetween('date', array($dateFrom,$dateTo))->select('events.created_at','patients.hn','patients.prefix','patients.fname','patients.lname','patients.age','operatives.id','operatives.opt_name','reservations.reserve_status','events.event_status','events.detail','reservations.disease','reservations.complication','expenses.total')->get();

      // dd($event_data);

       // Fetch all records
       $response['data'] = $event_data;
 
       return response()->json($response);
    }



}
?>