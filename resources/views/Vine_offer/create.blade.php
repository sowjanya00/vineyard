@extends('Vine_offer.layout') 
 @section('content') 

<div class="card">
  <div class="card-header">VineOfferPage</div>
  <div class="card-body">
       
<!-- <form action="/Vine_master" method="POST"> -->
<form action="{{ route('Vine_offer.store') }}" method="post">
    @csrf
    {!! csrf_field() !!}
    <label for="Vine_name">Vinename:</label>
    <!-- <input type="text" id="Vinename" name="Vinename" required></br> -->
    <select name="Vine_name" id="Vine_id" class="form-control">
                        
                             <option value="vine_name ">-- Select Vine name--</option> 
                             
                             {{$Vine_master}} 
                             @foreach ($Vine_master as $data) 
                             <option value="{{$data->Vine_name}}">{{ $data->Vine_name}}</option> 
                             
                             @endforeach 
                              
                        </select>
                    </div>
    <label for="Offer_mobieno">Offer_mobileno:</label>
     <textarea id="text" name="Offer_mobileno" required></textarea></br> 
    <label for="Offer_details">Offer_details:</label>
     <input type="text" id="Offer_details" name="Offer_details" required></br> 
    <label for="Valid_upto">Valid_upto:</label>
    <input type="date" id="Valid_upto" name="Valid_upto" required></br>
     

<input type="submit" value="Save" class="btn btn-success"></br>
    
</form>
