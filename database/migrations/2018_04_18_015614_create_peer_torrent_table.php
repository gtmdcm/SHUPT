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
            $table->string('peer_id')->nullable();
            $table->string('torrent_id')->nullable();
            $table->double('upload')->nullable();
            $table->double('download')->nullable();
            $table->double('left')->nullable();
            $table->integer('stopped')->nullable();
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
