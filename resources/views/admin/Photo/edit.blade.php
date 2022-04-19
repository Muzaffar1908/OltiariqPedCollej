@extends('admin.app')
@section('content')
  <div class="card-body">
    <h1 class="text-center">Change information in the Photo table</h1><br>
    
    <form action="{{route('admin.photo.update', $photo->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
            @method('PUT')
            <div class="mb-3" >
                <label for="image" class="form-label">Image</label><br>
                <img src="{{asset($photo->image)}}" alt="img" width="100px" height="60px">
                <input type="file" name="image" class="form-control" id="image" value="{{$photo->image}}">
            </div>
    
       <button type="submit"  class="btn btn-success">Save</button>
    
    </form>
  </div>
@endsection