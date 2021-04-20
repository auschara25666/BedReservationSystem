<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use SoftDeletes;



    protected $fillable = [
        'name_eng','name_th','name_abb','rec_status','created_user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'created_user_id');
    }
}
