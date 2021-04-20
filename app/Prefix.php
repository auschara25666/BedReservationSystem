<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prefix extends Model
{
    use SoftDeletes;



    protected $fillable = [
        'prefix'
    ];
}
