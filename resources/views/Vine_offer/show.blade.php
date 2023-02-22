@extends('Vine_offer.layout')
@section('content')
$Vine_offer =Vineoffer ::find($id);
<div class="card">
  <div class="card-header">VineofferPage</div>
  <div class="card-body">
 
        <div class="card-body">
        

        <p class="card-text">Offer_id : {{ $Vine_offer->Offer_id }}</p>
        <p class="card-text">Vine_name : {{ $Vine_offer->Vine_name }}</p>
        <p class="card-text">Offer_mobileno : {{ $Vine_offer->Offer_mobileno }}</p>
        <p class="card-text">Offer_details : {{ $Vine_offer->Offer_details }}</p>
        <p class="card-text">Valid_upto : {{ $Vine_offer->Valid_upto}}</p>
        <p class="card-text">Offerused : {{ $Vine_offer->Offerused}}</p>
        <p class="card-text">Actions : {{ $Vine_offer->Actions }}</p>

  </div>
  </div>
      
    </hr>
  
  </div>
</div>