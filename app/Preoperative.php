<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Preoperative extends Model
{
    use SoftDeletes;
    


    protected $fillable = [
        'pre_opt','rec_status','created_user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'created_user_id');
    }
}
