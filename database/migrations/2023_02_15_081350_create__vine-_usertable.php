<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVineUsertable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VineUsertable', function (Blueprint $table) {
            $table->bigIncrements('User_id');
            $table->string('User_name');
            
            $table->string('Vine_id');
            $table->string('Mobileno')->unique();
            $table->date('Registerdate')->unique();
            $table->date('Useddate')->unique();
            $table->text('Qrcode')->unique();
            $table->string('Status')->unique();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('VineUsertable');
    }
}
