<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Log;


class UploadController extends Controller
{
    public function uploadSeeds(Request $request) {
        $path = $request -> file('upload_file')->store('file');

        return $path;

        //return $request;
        //$upload=$request->file('upload_file');
        //$store_result=$upload->storeAs('Seeds','test');
    }
}
