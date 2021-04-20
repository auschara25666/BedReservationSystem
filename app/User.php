<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable,SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
'prefix','fname','lname', 'email', 'password','role_id','phone','rec_status','ward_id','permission_id'
    ];

    public function ward()
    {
        return $this->belongsTo('App\Ward','ward_id');
    }

    public function role()
    {
        return $this->belongsTo('App\Role','role_id');
    }

    public function permission()
    {
        return $this->belongsTo('App\Permission','permission_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
