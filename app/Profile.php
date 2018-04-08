<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    ////

    protected $table = 'profiles';

    protected $casts = [
        'uid' => 'char',
    ];

    public function getUidAttribute($value){

    }

}
