<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user');
            $table->string('nick_name');
            $table->string('figure');
            $table->integer('gender');
            $table->integer('age');
            $table->string('birthday');
            $table->string('city');
            $table->string('email');
            $table->string('qq');
            $table->string('tel');
            $table->string('self_introduce');
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
        Schema::dropIfExists('user_documents');
    }
}
