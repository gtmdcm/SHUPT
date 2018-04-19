<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class UserInfoController extends Controller
{
    public function getUserInfo()
    {
        $id = Auth::id();
        $result = DB::select("select name,birthday,gender,school,signature,up,down  from users where id = $id");
        return $result;
    }

    public function getContribute()
    {
        $id = Auth::id();
        $upobj = DB::select("select up from users where id = $id");
        $downobj = DB::select("select down from users where id = $id");
        if ($downobj[0]->down == 0) {
            $contribute = 100;
        } else {

            $contribute = (int)($upobj[0]->up / $downobj[0]->down);
        }
        if ($contribute > 100) {
            $contribute = 100;
        }
        return $contribute;
    }

}
