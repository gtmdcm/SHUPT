<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\BEncode;
use App\User;

class TrackerController extends Controller
{

    public function getRequest(Request $request){

        $downloaded = $request -> downloaded;
        $uploaded = $request -> uploaded;

        $id = Auth::id();

        $user = User::find($id);

        $user -> up = intval($user -> up) + 10;

        $user -> down = intval($user->down) + 2;

        $user -> save();

        $bcoder = new BEncode;
        $originTorrent = file_get_contents(
            '/Users/jackysong/Documents/Torrents/Torrent3.torrent');
        $bcoder->set([
            'announce'=>'127.0.0.1:8000/announce',
            'comment'=>'Downloaded from Private Tracker',
            'created_by'=>'PrivateTracker v1.0',
            //'passkey' => 'asdjfpoiajsdfoipajsdpf',
        ]);
        $torrent = $bcoder -> bdecode($originTorrent);
        $files = $bcoder->filelist( $torrent );
        $torrent = $bcoder -> make_private($torrent);
        $infohash = $bcoder->bencode($torrent);

        return $infohash;

    }

}
