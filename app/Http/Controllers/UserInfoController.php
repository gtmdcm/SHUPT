<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class UserInfoController extends Controller
{
    public function getUserInfo(){
        $id = Auth::id();
        $result=DB::select("select birthday,gender,school,signature from users where id = $id");
        return $result;
    }
    public function getUserUD(){
        $id = Auth::id();
        $result = DB::select("select up,down from users where id = $id");
        return $result;

    }
}
