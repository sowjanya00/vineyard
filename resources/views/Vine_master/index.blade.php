@extends('Vine_master.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>VineMasterPage</h2>
                    </div>
                    <div class="card-body">
                        <a href= "{{ url('/Vine_master/create' ) }}" class="btn btn-success btn-sm" title="Add New Vinename">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Vinename</th>
                                        <th>Googleparameters</th>
                                        <th>Url</th>
                                        <th>Targetedcustomers</th>
                                        <th>Usedcustomers</th>
                                        <th>Contactperson</th>
                                        <th>Mobileno</th>
                                        <th>Emailid</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($Vine_master as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        
                                        <td>{{ $item->Vine_name }}</td>
                                        <td>{{ $item->Googleparameters }}</td>
                                        <td>{{ $item->Url}}</td>
                                        <td>{{ $item->Targetedcustomers }}</td>
                                        <td>{{ $item->Usedcustomers}}</td>
                                        <td>{{ $item->Contactperson }}</td>
                                        <td>{{ $item->Mobileno }}</td>
                                        <td>{{ $item->Emailid }}</td>
                                        <td>{{ $item->Username}}</td>
                                        <td>{{ $item->Password}}</td>
                                        

                                        <td>
                                            <a href="{{ url('/Vine_master/' . $item->id) }}" title="View Vine_master "><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/Vine_master/'. $item->id . 'edit') }}" title="Edit Vine_master"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/vine_master' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Vine_master" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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