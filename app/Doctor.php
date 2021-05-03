<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes;



    protected $fillable = [
        'prefix','fname','lname','ward_id','dept_id','rec_status','created_user_id'
    ];

    // public function ward()
    // {
    //     return $this->belongsTo('App\Ward', 'ward_id');
    // }

    public function user()
    {
        return $this->belongsTo('App\User', 'created_user_id');
    }

    public function department()
    {
        return $this->belongsTo('App\Department', 'dept_id');
    }
}
