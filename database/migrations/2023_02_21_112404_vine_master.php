<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VineMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vine_master', function (Blueprint $table) {
            $table->increments('Vine_id');;
            $table->string("Vine_name");
            $table->string("Googleparameters");
            $table->string("Url");
            $table->integer("Targetedcustomers");
            $table->integer("Usedcustomers");
            $table->string("Contactperson");
            $table->string("Mobileno");
            $table->string("Emailid");
            $table->string("Username");
            $table->string("Password");
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
        Schema::dropIfExists('Vine_master'); 
    }
}
