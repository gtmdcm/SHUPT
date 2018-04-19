<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\BEncode;
use App\User;
use App\Torrent;
use App\Peer;
use App\PeerTorrent;

class TrackerController extends Controller
{
    public function tracker($list, $c = 0, $i = 0){
        return 'd14:failure reason3:123';
    }
    public function Tracking(Request $request){
        //$passkey = $request -> passkey;
        $info_hash = isset($_GET["info_hash"])?is_string($_GET["info_hash"]):0;

        $peer_id = $request -> peer_id;
        $event = $request -> event;

        $port = $request -> port;
        $download = $request -> download;
        $upload = $request -> upload;
        $left = $request -> left;

        $numwant = intval($request -> numwant);


        //$user = User::where('passkey',$passkey)->first();


        //$torrent = Torrent::where('hash',$info_hash)->first();
        //if($torrent == null){
            $torrent = new Torrent;
            $torrent -> hash = $info_hash;
            $torrent -> save();
        //}else{
           // $torrent -> hash = $info_hash;
            //$torrent -> save();
        //}



        //$reply = array();

        return 'd8:intervali10e12:min intervali5e8:completei0e10:incompletei0e5:peersl4ee';
    }
}
