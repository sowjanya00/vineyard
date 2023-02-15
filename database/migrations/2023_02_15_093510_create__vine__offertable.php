<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVineOffertable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vine_offertable', function (Blueprint $table) {
           
            $table->bigIncrements('Offer_id');
            $table->string('Vine_id');
            $table->string('Offer_mobileno')->nullable();
            $table->string('Valid_upto');
            $table->string('Offer_used');
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
        Schema::dropIfExists('vine_offertable');
    }
}
