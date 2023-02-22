@extends('Vine_user.layout')
@section('content')
$Vine_user =Vineuser ::find($id);
<div class="card">
  <div class="card-header">VineUserPage</div>
  <div class="card-body">
 
        <div class="card-body">
        
        <p class="card-text">User_name : {{ $Vine_user->User_name }}</p>
        <p class="card-text">Vine_id : {{ $Vine_user->Vine_id }}</p>
        
        <p class="card-text">User_mobileno : {{ $Vine_user->User_mobileno }}</p>
        <p class="card-text">Registerdate : {{ $Vine_user->Registerdate }}</p>
        <p class="card-text">Useddate : {{ $Vine_user->Useddate }}</p>
        <p class="card-text">Qrcode : {{ $Vine_user->Qrcode}}</p>
        <p class="card-text">Actions : {{ $Vine_user->Actions }}</p>

  </div>
  </div>
      
    </hr>
  
  </div>
</div>