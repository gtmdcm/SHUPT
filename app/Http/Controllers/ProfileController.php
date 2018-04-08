<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Document;

class ProfileController extends Controller
{

    protected $id;

    protected $uid;

    protected $u;

    public function createUserProfile(){

    }

    public function handle(){

        $this->id=Auth::id();

        $input=Request::all();

        /*$this->uid=DB::table('users')
            ->select('uid')
            ->where('id','==',"{$this->id}")
            ->get();

        $this->uid=(array)($this->uid);

        foreach($this->uid as $this->Uid){
            $this->u=$this->Uid;
        }*/

        $document=Document::find($this->id);

        $document->signature=$request;

        $document->save();
    }
}
