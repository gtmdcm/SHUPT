<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\BEncode;
use App\User;
use App\Torrent;
use App\Peer;

class TrackerController extends Controller
{
    public function Tracking(Request $request){
        $fkey = intval($request -> fkey);
        $info_hash = $request -> info_hash;
        $peer_id = $request -> peer_id;
        $event = $request -> event;

        $port = $request -> port;
        $download = $request -> download;
        $upload = $request -> upload;
        $left = $request -> left;

        $user = User::find($fkey);

        $peer = new Peer;
        $peer -> peer_id = $peer_id;
        $peer -> fkey = $fkey;
        $peer -> port = $port;
        $peer -> save();

        $torrent = new Torrent;
        $torrent -> hash = $info_hash;
        $torrent -> save();

        
    }
}
