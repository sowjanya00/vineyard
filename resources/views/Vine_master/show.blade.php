@extends('Vine_master.layout')
@section('content')
<div class="card">
  <div class="card-header">VineMasterPage</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Vine_name : {{ $vine_master->Vine_name }}</h5>
        <p class="card-text">Googleparameters : {{ $vine_master->Googleparameters }}</p>
        <p class="card-text">Targetedcustomers : {{ $vine_master->Targetedcustomers }}</p>
        <p class="card-text"> Usedcustomers : {{ $vine_master->Usedcustomers }}</p>
        <p class="card-text">Contactperson : {{ $vine_master->Contactperson}}</p>
        <p class="card-text">Mobile no : {{ $vine_master->Mobile no}}</p>
        <p class="card-text">Emailid : {{ $vine_master->Emailid }}</p>
        <p class="card-text">Username : {{ $vine_master->Username }}</p>
        <p class="card-text">Password : {{ $vine_master->Password }}</p>
        <p class="card-text">Actions : {{ $vine_master->Actions }}</p>

  </div>
  </div>
      
    </hr>
  
  </div>
</div>