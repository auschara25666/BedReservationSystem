<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{

    use SoftDeletes;



    protected $fillable = [
        'event_status','date','detail','reserve_id',
        'rec_status','created_user_id','total','total_re','total_se'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'created_user_id');
    }

    public function reserve()
    {
        return $this->belongsTo('App\Ward', 'reserve_id');
    }
}
