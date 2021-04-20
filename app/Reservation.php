<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{

    use SoftDeletes;



    protected $fillable = [
        'reserve_status','patient_id','ward_id','opt_id','bed_id','preopt_id',
        'reserve_booking','doctor_id','rec_status','created_user_id','reserve_detail','complication','disease'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'created_user_id');
    }

    public function ward()
    {
        return $this->belongsTo('App\Ward', 'ward_id');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient', 'patient_id');
    }

    public function operative()
    {
        return $this->belongsTo('App\Operative', 'opt_id');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Doctor', 'doctor_id');
    }

    public function bed()
    {
        return $this->belongsTo('App\Bed', 'bed_id');
    }
    public function preopt()
    {   
        return $this->belongsTo('App\Preoperative', 'preopt_id');
    }

}
