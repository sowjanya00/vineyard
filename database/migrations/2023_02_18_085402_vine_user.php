<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VineUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('Vine_user', function (Blueprint $table) {
        $table->increments('User_id');;
        $table->string("User_name");
        $table->string("Vine_id");
        $table->string("User_mobileno");
        $table->string("Registerdate");
        $table->string("Useddate");
        $table->string("Qrcode");
        $table->string("status");
        
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
        Schema::dropIfExists('Vine_user'); 
    }
}
