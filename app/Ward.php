<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ward extends Model
{
    use SoftDeletes;

    

    protected $fillable = [
'ward_name','rec_status','ward_phone','ward_phoneext'
    ];
}
