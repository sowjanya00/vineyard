@extends('Vine_user.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>VineUserPage</h2>
                    </div>
                    <div class="card-body">
                        <a href= "{{ url('/Vine_user/create' ) }}" class="btn btn-success btn-sm" title="Add New Vinename">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>User_name</th>
                                        <th>Vine_id</th>
                                        <th>User_mobileno</th>
                                        <th>Registerdate</th>
                                        <th>Useddate</th>
                                        <th>Qrcode</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($Vine_user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        
                                        <td>{{ $item->User_name }}</td>
                                        <td>{{ $item->Vine_id}}</td>
                                        <td>{{ $item->User_mobileno }}</td>
                                        <td>{{ $item->Registerdate}}</td>
                                        <td>{{ $item->Useddate}}</td>
                                        <td>{{ $item->Qrcode}}</td>
                                        
                                        

                                        <td>
                                            <a href="{{ url('/Vine_user/' . $item->id) }}" title="View Vine_user "><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/Vine_user/'. $item->id . 'edit') }}" title="Edit Vine_user"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/Vine_user' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Vine_user" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>