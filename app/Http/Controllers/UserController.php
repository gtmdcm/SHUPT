<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OSS;

class UserController extends Controller
{

    public function index(){

        OSS::publicUpload('shupt-picture','sample1','/Users/jackysong/Documents/PHP Storm/SHUPT/.osstest');

        return view('home');

    }

    //
}
