<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',80);
            $table->char('seed',16)->nullable();
            $table->enum('visible',['yes','no']);
            $table->enum('banned',['yes','no']);
            $table->enum('down50',['yes','no']);
            $table->enum('down30',['yes','no']);
            $table->enum('downfree',['yes','no']);
            $table->enum('up200',['yes','no']);
            $table->enum('up200down50',['yes','no']);
            $table->enum('up200downfree',['yes','no']);
            $table->string('owner',20);
            $table->char('catagory',4);
            $table->char('standard',4)->nullable();
            $table->dateTime('last_action');
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
        Schema::dropIfExists('resources');
    }
}
