<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    public function uploadSeeds(Request $request, $name)
    {
//        $path = $request->file('upload_file')->store("public/seed/$name");

        Storage::putFileAs('public/seed/', $request->file('upload_file'), "$name.torrent");
//        $result = DB::select("select seed from resources where name = $name")[0]->seed;
//
//        $result = $path;
//
//        $result->save();

    }

    public function uploadAvatar(Request $request, $name)
    {
//        $id = Auth::id();
//        dd($id);
//        $name = DB::select("select name from users where id = $id")[0]->name;
//        dd($name);
//        Storage::putFileAs("public/user/$name/", $request->file('avatar'), "avatar.png");
//        dd($request->file('avatar'));
        Storage::putFileAs('public/user/', $request->file('avatar'), "$name/avatar.png");

    }
}

