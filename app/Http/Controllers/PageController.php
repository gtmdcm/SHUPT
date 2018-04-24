<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function mainpage()
    {
        return view('pages/mainpage');
    }

    public function rules()
    {
        return view('pages/rules');
    }

    public function help()
    {
        return view('pages/help');
    }

    public function upload()
    {
        return view('pages/upload');
    }

    public function torrent()
    {
        return view('pages/torrent');
    }

    public function viewrequests()
    {
        return view('pages/viewrequests');
    }

    public function forums()
    {
        return view('pages/forums');
    }

//zs test
    public function app()
    {
        return view('layouts/app');
    }

    public function child()
    {
        return view('child');
    }

    public function edit_profile()
    {
        return view('pages/edit_profile');
    }

    public function todo()
    {
        return view('pages/todo');
    }

    public function identifyemail()
    {
        return view('pages/identifyemail');
    }
}
