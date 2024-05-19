@extends('dashboard.layout.main')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            @include('auth.message')
            <div class="card-body">
                <a class="btn btn-primary" href="{{ '/_admin/add_watch' }}">Add watch</a>
                <h5 class="card-title">Watch Table</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getWatch as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td><img style="width:80px;height:80px;" src="{{asset('TimeTrove/watch/'.$item->photo_path)}}" alt="Watch"></td>
                                    <td>{{$item->price}} Tk</td>
                                    <td>
                                        <a href="{{url('/_admin/edit_watch/'.$item->id)}}" class="btn btn-success"><i class="fas fa-edit">Edit</i></a>
                                        <a href="{{url('/_admin/delete_watch/'.$item->id)}}" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
