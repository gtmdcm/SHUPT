<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
