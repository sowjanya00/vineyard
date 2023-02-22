@extends('Vine_offer.layout')
@section('content')
<div class="card">
  <div class="card-header">Vineoffer Page</div>
  <div class="card-body">

  <!-- <form action="{{ route('student.store') }}" method="post"> -->
      <form action="{{ url('Vine_offer/' .$Vine_offer->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="Vine_id" id="id" value="{{$Vine_offer->Vine_id}}" id="id" />
        <label>Vinename</label></br>
        <!-- <input type="text" name="Vine_name" id="Vine_name" value="{{$Vine_offer->Vine_name}}" class="form-control"></br> -->
        <select name="Vine_name" id="Vine_id" class="form-control">
                        
                             <option value=" ">-- Select Vine name--</option> 
                             
                             {{$Vine_offer}} 
                             @foreach ($Vine_offer as $data) 
                             <option value="{{$data->Vine_name}}">{{ $data->Vine_name }}</option> 
                             
                             @endforeach 
                              
                        </select>
                    </div>
        <label>Offer_mobieno</label></br>
        <input type="text" name="Offer_mobileno" id="Offer_mobileno" value="{{$Vine_offer->Offer_mobileno}}" class="form-control"></br>
        <label>Offer_details</label></br>
        <input type="text" name="Offer_details" id="Offer_details" value="{{$Vine_offer->Offer_details}}" class="form-control"></br>
        <label>Valid_upto</label></br>
        <input type="text" name="Valid_upto" id="Valid_upto" value="{{$Vine_offer->Valid_upto}}" class="form-control"></br>
        <label>Offerused</label></br>
        <input type="text" name="Offerused" id="Offerused" value="{{$Vine_offer->Offerused}}" class="form-control"></br>
        

        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>