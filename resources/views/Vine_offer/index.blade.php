@extends('Vine_offer.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>VineOfferPage</h2>
                    </div>
                    <div class="card-body">
                        <a href= "{{ url('/Vine_offer/create' ) }}" class="btn btn-success btn-sm" title="Add New Vinename">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>vine_name</th>
                                        <th>Offer_mobileno</th>
                                        <th>Offer_details</th>
                                        <th>Valid_upto</th>
                                        <th>Offerused</th> 
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($Vine_offer as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        
                                        <td>{{ $item->Vine_name }}</td>
                                        <td>{{ $item->Offer_mobileno }}</td>
                                        <td>{{ $item->Offer_details }}</td>
                                        <td>{{ $item->Valid_upto}}</td>
                                        <td>{{ $item->Offerused }}</td>
                                        
                                        

                                        <td>
                                            <a href="{{ url('/Vine_offer/' . $item->id) }}" title="View Vine_offer "><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/Vine_offer/'. $item->id . 'edit') }}" title="Edit Vine_offer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/vine_offer' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Vine_offer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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