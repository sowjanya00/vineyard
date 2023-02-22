@extends('Vine_master.layout')
@section('content')
<div class="card">
  <div class="card-header">VineMasterPage</div>
  <div class="card-body">
 
        <div class="card-body">
        

        <h5 class="card-title">Vine_name: {{ $Vine_master->Vine_name }}</h5>
        <!-- <p class="card-text">Vine_name : {{ $Vine_master->Vine_name }}</p> -->
        <p class="card-text">Googleparameters : {{ $Vine_master->Googleparameters }}</p>
        <p class="card-text">Url : {{ $Vine_master->Url }}</p>
        <p class="card-text">Targetedcustomers : {{ $Vine_master->Targetedcustomers }}</p>
        <p class="card-text">Usedcustomers : {{ $Vine_master->Usedcustomers }}</p>
        <p class="card-text">Contactperson : {{ $Vine_master->Contactperson}}</p>
        <p class="card-text">Mobileno : {{ $Vine_master->Mobileno}}</p>
        <p class="card-text">Emailid : {{ $Vine_master->Emailid }}</p>
        <p class="card-text">Username : {{ $Vine_master->Username }}</p>
        <p class="card-text">Password : {{ $Vine_master->Password }}</p>
        <p class="card-text">Actions : {{ $Vine_master->Actions }}</p>

  </div>
  </div>
      
    </hr>
  
  </div>
</div>