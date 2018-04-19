<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class ApiController extends Controller
{
    public function showSchools(){
        $result=DB::select('select schoolid,name from schools');
        return $result;
    }

    public function showStandards(){
        $result=DB::select('select standardid,name from standard');
        return $result;
    }

    public function showCatagory(){
        $result=DB::select('select cataid,name from catagory');
        return $result;
    }
    public function showUserinfo(){
        $id = Auth::id();
        $user = User::all()->first();
        $username = $user -> name;
        $result=DB::select("select birthday,gender,school,signature from users where name = '$username'");
        return $result;
    }
}
