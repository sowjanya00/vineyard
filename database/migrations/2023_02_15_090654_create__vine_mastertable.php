<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVineMastertable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vine_mastertable', function (Blueprint $table) {
             $table->bigIncrements('Vine_id');
            $table->string('Vine_name');
            
            $table->string('Googleparameters');
            $table->string('Targetedcustomers');
            $table->string('Usedcustomers');
            $table->string('Contactperson');
            $table->string('Mobileno')->nullable();
            $table->string('Emailid')->unique();
            $table->string('Username');
            $table->string('Password');
            $table->string('Status');







            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vine_mastertable');
    }
}
