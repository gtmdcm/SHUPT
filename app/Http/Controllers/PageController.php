<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function mainpage(){
        return view('pages/mainpage');
    }

    public function upload(){
        return view('pages/upload');
    }

    public function torrent(){
        return view('pages/torrent');
    }

    public function viewrequests(){
        return view('pages/viewrequests');
    }

    public function forums(){
        return view('pages/forums');
    }
}
