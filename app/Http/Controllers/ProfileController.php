<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Document;

class ProfileController extends Controller
{
    public function createUserProfile(){

    }

    public function handle(Request $request){

        $id=Auth::id();

        $docu=Document::find($id);

        $signature=$request->input('self_introduce');

        $docu->signature=$signature;

        $docu->save();
    }
}
