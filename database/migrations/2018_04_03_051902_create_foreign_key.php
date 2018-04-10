<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function(Blueprint $table){
            $table->foreign('school')
                ->references('schoolid')
                ->on('schools');
        });

        Schema::table('resources',function(Blueprint $table){
            $table->foreign('catagory')
                ->references('cataid')
                ->on('catagory');

            $table->foreign('standard')
                ->references('standardid')
                ->on('standard');
        });

        Schema::table('charauth',function(Blueprint $table){
            $table->foreign('cid')
                ->references('cid')
                ->on('characters');

            $table->foreign('aid')
                ->references('aid')
                ->on('auths');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
