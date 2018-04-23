<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


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

    public function getImage()
    {
        $id = Auth::id();
        $name = DB::select("select name from users where id = $id")[0]->name;

//        $contents = Storage::url("user/$name/head.png");
//  上线后修改
        return "storage/user/$name/avatar.png";

    }

    public function ifAvatar(Request $request,$name)
    {

        return $exists = Storage::disk('local')->exists("public/user/{$name}/avatar.png") ? 'true' : 'false';
    }

}
