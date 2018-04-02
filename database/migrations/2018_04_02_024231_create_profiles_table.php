<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->char('uid',8);
            $table->double('up');
            $table->double('down');
            $table->double('contribute');
            $table->integer('rank');
            $table->dateTime('register_date');
            $table->dateTime('last_login');
            $table->dateTime('last_upload');
            $table->dateTime('last_download');
            $table->enum('banned',['yes','no']);
            $table->char('character',4);
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
        Schema::dropIfExists('profiles');
    }
}
