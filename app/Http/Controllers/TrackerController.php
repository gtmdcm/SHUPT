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
        $passkey = $request -> passkey;
        $info_hash = $request -> info_hash;


        $peer_id = $request -> peer_id;
        $event = $request -> event;

        $port = $request -> port;
        $download = $request -> download;
        $upload = $request -> upload;
        $left = $request -> left;

        $numwant = intval($request -> numwant);


        //$user = User::where('passkey',$passkey)->first();

        $peer = Peer::where('peer_id',$peer_id)->first();
        if($peer == null){
            $peer = new Peer;
            $peer -> peer_id = $peer_id;
            $peer -> passkey = $passkey;
            $peer -> port = $port;
            $peer -> save();
        }else{
            $peer -> peer_id = $peer_id;
            $peer -> passkey = $passkey;
            $peer -> port = $port;
            $peer -> save();
        }


        $torrent = Torrent::where('hash',$info_hash)->first();
        if($torrent == null){
            $torrent = new Torrent;
            $torrent -> hash = $info_hash;
            $torrent -> save();
        }else{
            $torrent -> hash = $info_hash;
            $torrent -> save();
        }

        $peer_torrent = PeerTorrent::where('torrent_id',$info_hash)->first();
        if($peer_torrent == null){
            $peer_torrent = new PeerTorrent;
            $peer_torrent -> peer_id = $peer_id;
            $peer_torrent -> torrent_id = $info_hash;
            $peer_torrent -> upload = $upload;
            $peer_torrent -> download = $download;
            $peer_torrent -> left = $left;
            $peer_torrent -> save();
        }else{
            $peer_torrent -> upload = $upload;
            $peer_torrent -> download = $download;
            $peer_torrent -> left = $left;
            $peer_torrent -> save();
        }


        $reply = array();

        return $info_hash.$peer_id.$event.$port.$download.$upload.$left;
    }
}
