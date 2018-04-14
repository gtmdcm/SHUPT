<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadSeeds(Request $request){
        $upload=$request->file('upload_file');
        $store_result=$upload->storeAs('Seeds','test');
    }
}
