<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expenses extends Model
{
    use SoftDeletes;



protected $fillable = [
        'reserve_id', 'total', 'total_re','total_se', 'created_user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'created_user_id');
    }

    public function reservation()
    {
        return $this->belongsTo('App\Reservation', 'reserve_id');
    }
}
