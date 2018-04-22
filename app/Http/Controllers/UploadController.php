<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


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
}

