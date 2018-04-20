<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Log;


class UploadController extends Controller
{
    public function uploadSeeds(Request $request) {
        $log = new Log;
        $log -> operation = '123';
        $log -> operator = '1234';
        $log -> save();
        return $request;
        //$upload=$request->file('upload_file');
        //$store_result=$upload->storeAs('Seeds','test');
    }
}
