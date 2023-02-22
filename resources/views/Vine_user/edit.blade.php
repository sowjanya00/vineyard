@extends('Vine_user.layout')
@section('content')
<div class="card">
  <div class="card-header">VineuserPage</div>
  <div class="card-body">

  <!-- <form action="{{ route('student.store') }}" method="post"> -->
      <form action="{{ url('Vine_user/' .$Vine_user->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <label>User_name</label></br>
        <input type="text" name="User_name" id="User_name" value="{{$Vine_user->User_name}}" class="form-control"></br>
        
        <input type="hidden" name="Vine_id" id="id" value="{{$Vine_user->Vine_id}}" id="id" />
        <label>Vineid</label></br>
        <!-- <input type="text" name="Vine_name" id="Vine_name" value="{{$Vine_user->Vine_name}}" class="form-control"></br> -->
        <select name="Vine_id" id="Vine_id" class="form-control">
                        
                             <option value=" ">-- Select Vine name--</option> 
                             
                             {{$Vine_user}} 
                             @foreach ($Vine_user as $data) 
                             <option value="{{$data->Vine_id}}">{{ $data->Vine_id }}</option> 
                             
                             @endforeach 
                              
                        </select>
                    </div>
        <label>User_mobileno</label></br>
        <input type="text" name="User_mobileno" id="User_mobileno" value="{{$Vine_user->User_mobileno}}" class="form-control"></br>
        <label>Registerdate</label></br>
        <input type="text" name="Registerdate" id="Registerdate" value="{{$Vine_user->Registerdate}}" class="form-control"></br>
        <label>Useddate</label></br>
        <input type="text" name="Useddate" id="Useddate" value="{{$Vine_user->Useddate}}" class="form-control"></br>
        <label>Qrcode</label></br>
        <input type="text" name="Qrcode" id="Qrcode" value="{{$Vine_user->Qrcode}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>