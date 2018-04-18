<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeerTorrentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peer_torrent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('peer_id');
            $table->string('torrent_id');
            $table->double('upload');
            $table->double('download');
            $table->double('left');
            $table->dateTime('last_updated');
            $table->integer('stopped');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peer_torrent');
    }
}
