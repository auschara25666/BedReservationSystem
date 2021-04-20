<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bed extends Model
{
    use SoftDeletes;



    protected $fillable = [
        'id','bed_number', 'bed_status', 'rec_status', 'created_user_id', 'ward_id'
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
