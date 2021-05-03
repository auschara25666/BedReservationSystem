<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;



    
    protected $fillable = [
        'hn','prefix','fname','lname', 'age', 'sex','phone', 'pay_id',
        'rec_status', 'created_user_id','ward_id'
    ];


    public function pay()
    {
        return $this->belongsTo('App\Payment', 'pay_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'created_user_id');
    }

    public function ward()
    {
        return $this->belongsTo('App\Ward', 'ward_id');
    }
}
