@extends('dashboard.layout.main')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Hover Table</h5>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Transaction id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($getInvoice as $item)
                           <tr>
                                <th scope="row">{{$item->id}}</th>
                                <th scope="row">{{$item->transaction_id}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->amount}}</td>
                                <td>@if($item->status=='Processing') <span class="badge bg bg-success">Paid</span> @else <span class="badge bg bg-danger">Not Paid</span> @endif</td>

                            </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection