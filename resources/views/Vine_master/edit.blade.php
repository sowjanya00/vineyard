@extends('Vine_master.layout')
@section('content')
<div class="card">
  <div class="card-header">Vinemaster Page</div>
  <div class="card-body">

  <!-- <form action="{{ route('student.store') }}" method="post"> -->
      <!-- <form action="{{ url('Vine_master/' .$Vine_master->id) }}" method="post"> -->
      <form action="{{ route(''Vine_master.store') }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="Vine_id" id="id" value="{{$Vine_master->Vine_id}}" id="id" />
        <label>Vinename</label></br>
        <!-- <input type="text" name="Vine_name" id="Vine_name" value="{{$Vine_master->Vine_name}}" class="form-control"></br> -->
        <select name="Vine_name" id="Vine_id" class="form-control">
                        
                             <option value=" ">-- Select Vine name--</option> 
                             
                             {{$Vine_master}} 
                             @foreach ($Vine_master as $data) 
                             <option value="{{$data->Vine_name}}">{{ $data->Vine_name }}</option> 
                             
                             @endforeach 
                              
                        </select>
                    </div>
        <label>Googleparameters</label></br>
        <input type="text" name="Googleparameters" id="Googleparameters" value="{{$Vine_master->Googleparameters}}" class="form-control"></br>
        <label>Url</label></br>
        <input type="text" name="Url" id="Url" value="{{$Vine_master->Url}}" class="form-control"></br>
        
        <label>Targetedcustomers</label></br>
        <input type="text" name="Targetedcustomers" id="Targetedcustomers" value="{{$Vine_master->Targetedcustomers}}" class="form-control"></br>
        <label>Usedcustomers</label></br>
        <input type="text" name="Usedcustomers" id="Usedcustomers" value="{{$Vine_master->Usedcustomers}}" class="form-control"></br>
        <label>Contactperson</label></br>
        <input type="text" name="Contactperson" id="Contactperson" value="{{$Vine_master->Contactperson}}" class="form-control"></br>
        <label>Mobileno</label></br>
        <input type="text" name="Mobileno" id="Mobileno" value="{{$Vine_master->Mobileno}}" class="form-control"></br>
        <label>Emailid</label></br>
        <input type="text" name="Emailid" id="Emailid" value="{{$Vine_master->Emailid}}" class="form-control"></br>
        <label>Username</label></br>
        <input type="text" name="Username" id="Username" value="{{$Vine_master->Username}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="Password" id="Password" value="{{$Vine_master->Password}}" class="form-control"></br>

        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>