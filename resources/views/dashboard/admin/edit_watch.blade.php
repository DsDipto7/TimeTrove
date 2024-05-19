@extends('dashboard.layout.main')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            @include('auth.message')
            <div class="card-body">
                <div class="card-title">Add watch</div>
                <hr>
                <form action="{{url('/_admin/edit_watch/'.$getWatch->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="input-1">Title</label>
                        <input type="text" class="form-control" id="input-1" name="title" value="{{$getWatch->title}}">
                    </div>
                    <div class="form-group">
                        <label for="input-2">Description</label>
                        <input type="text" class="form-control" id="input-2" name="description" value="{{$getWatch->description}}">
                    </div>
                    <div class="form-group">
                        <label for="input-3">Photo</label>
                        <img style="width:100px;height:80px;" src="{{asset('TimeTrove/watch/'.$getWatch->photo_path)}}" alt="Watch">
                        <input type="file" class="form-control" id="input-3" name="photo_path" >
                    </div>
                    <div class="form-group">
                        <label for="input-4">Price</label>
                        <input type="number" class="form-control" id="input-4" name="price" value="{{$getWatch->price}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
