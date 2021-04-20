<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operative extends Model
{
    use SoftDeletes;



    protected $fillable = [
        'opt_name','ward_id','rec_status','created_user_id'
    ];

    public function ward()
    {
        return $this->belongsTo('App\Ward', 'ward_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'created_user_id');
    }
}
