<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20);
            $table->string('email',50)->unique();
            $table->string('passkey');
            $table->string('token',40);
            $table->enum('mailchecked',['yes','no']);
            $table->string('password');

            //Profiles
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

            //Documents
            $table->char('figure');
            $table->date('birthday')->nullable();
            $table->enum('gender',['male','female','secret']);
            $table->char('school',4);
            $table->string('signature',100);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
