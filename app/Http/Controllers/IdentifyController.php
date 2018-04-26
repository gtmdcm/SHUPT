<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class IdentifyController extends Controller
{
    public function identifyEmail(Request $request)
    {
        $id = $request -> id;
        $user = User::find($id);
        if($request -> token == $user -> token)
        {
            $user -> mailchecked = 'yes';
            $user -> save();
            return redirect('identifysuccess');
        }
        else
        {
            return redirect('identifyfailed');
        }
    }
}
