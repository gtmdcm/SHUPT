<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class UploadController extends Controller
{
    public function uploadSeeds(Request $request)
    {
        $request->file('upload_file')->store('/public/seed/');
    }
}

