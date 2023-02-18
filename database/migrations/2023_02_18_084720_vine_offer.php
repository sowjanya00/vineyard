<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VineOffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vine_offer', function (Blueprint $table) {
            $table->increments('Offer_id');;
            $table->string("Vine_id");
            $table->string("Offer_mobileno");
            $table->string("Offer_details");
            $table->string("Valid_upto");
            $table->string("Offerused");
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
        Schema::dropIfExists('Vine_offer'); 
    }
}
