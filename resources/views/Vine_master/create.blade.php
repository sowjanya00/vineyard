 @extends('Vine_master.layout') 
 @section('content') 

<div class="card">
  <div class="card-header">VineMasterPage</div>
  <div class="card-body">
       
<!-- <form action="/Vine_master" method="POST"> -->
<form action="{{ route('Vine_master.store') }}" method="post">
    @csrf
    {!! csrf_field() !!}
</div>
    <label for="Vine_name">Vinename:</label>
    <input type="text" id="Vine_name" name="Vine_name" required></br> 
    <label for="Googleparameters">Googleparameters:</label>
     <textarea id="text" name="Googleparameters" required></textarea></br> 
      <label for="Url">url:</label> 
     <textarea id="text" name="Url" required></textarea></br> 
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
