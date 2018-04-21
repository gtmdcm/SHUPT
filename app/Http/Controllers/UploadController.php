<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class UploadController extends Controller
{
    public function uploadSeeds(Request $request)
    {
//        $path = $request -> file('upload_file')->store('file');
         $request->file('upload_file')->store('/');


        //return $request;
        //$upload=$request->file('upload_file');
        //$store_result=$upload->storeAs('Seeds','test');
    }
}

