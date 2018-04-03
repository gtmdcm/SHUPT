<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Id extends Model
{

    protected $table = 'idcontroller';

    protected $casts =[
        'uid' => 'integer',
    ];

    public function getUidAttribute($value){
        return intval($value);
    }

    public function setUidAttribute($value){
        $this->attributes['uid']=$value;
    }
}
