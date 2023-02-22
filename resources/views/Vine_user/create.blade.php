@extends('Vine_user.layout') 
 @section('content') 

<div class="card">
  <div class="card-header">VineUserPage</div>
  <div class="card-body">
       
<!-- <form action="/Vine_user" method="POST"> -->
<form action="{{ route('Vine_user.store') }}" method="post">
    @csrf
    {!! csrf_field() !!}
    <label for="User_name">User_name:</label>
     <input type="text" id="User_name" name="User_name" required></br> 
    <label for="Vine_name">Vine_name:</label>
    <!-- <input type="text" id="Vinename" name="Vinename" required></br> -->
    <select name="Vine_name" id="Vine_id" class="form-control">
                        
                             <option value=" Vine_name">-- Select Vine name--</option> 
                             
                              {{$Vine_master}}  
                             @foreach ($Vine_master as $data) 
                             <option value="{{$data->Vine_name}}">{{ $data->Vine_name }}</option> 
                             
                             @endforeach 
                              
                        </select>
                    </div>
   
    <label for="User_mobileno">User_mobileno:</label>
     <input type="text" id="User_mobileno" name="User_mobileno" required></br> 
    
    <input type="submit" value="Save" class="btn btn-success"></br>
    
</form>