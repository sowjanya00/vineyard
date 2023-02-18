 @extends('Vine_master.layout') 
 @section('content') 

<div class="card">
  <div class="card-header">VineMasterPage</div>
  <div class="card-body">
       
<!-- <form action="/Vine_master" method="POST"> -->
<form action="{{ route('Vine_master.store') }}" method="post">
    @csrf
    {!! csrf_field() !!}
    <label for="Vinename">Vinename:</label>
    <!-- <input type="text" id="Vinename" name="Vinename" required></br> -->
    <select name="Vine_name" id="Vine_id" class="form-control">
                        
                             <option value=" ">-- Select Vine name--</option> 
                             
                             {{$Vine_master}} 
                             @foreach ($Vine_master as $data) 
                             <option value="{{$data->Vine_name}}">{{ $data->Vine_name }}</option> 
                             
                             @endforeach 
                              
                        </select>
                    </div>
    <label for="Googleparameters">Googleparameters:</label>
     <textarea id="url" name="Googleparameters" required></textarea></br> 
    <label for="Targetedcustomers">Targetedcustomers:</label>
     <input type="text" id="Targetedcustomers" name="Targetedcustomers" required></br> 
    <label for="Usedcustomers">Usedcustomers:</label>
    <input type="text" id="Usedcustomers" name="Usedcustomers" required></br>
     <label for="Contactperson">Contactperson:</label>
    <input type="text" id="Contactperson" name="Contactperson" required></br>
    <label for="Mobileno">Mobileno:</label>
    <input type="number" id="Mobileno" name="Mobileno" required></br>
    <label for="Emailid">Emailid:</label>
    <input type="email" id="Emailid" name="Emailid" required></br>
    <label for="Username">Username:</label>
    <input type="text" id="Username" name="Username" required></br>
    <label for="Password">Password:</label>
    <input type="text" id="Password" name="Password" required></br>


<input type="submit" value="Save" class="btn btn-success"></br>
    
</form>
