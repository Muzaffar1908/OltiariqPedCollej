@extends('admin.app')
@section('content')
<h1 class="text-center">Change data in a SocialMedia table</h1><br>

<div class="card-body">
    <a href="{{route('admin.socialmedia.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left"></i>Back</a><br><br>

    <form action="{{route('admin.socialmedia.update', $socialmedia->id)}}" method="POST">
        @csrf
           @method('PUT')
            <div class="mb-3">
                <label for="icon" class="form-label">Icon</label><br>
                <i class="{{$socialmedia->icon}}" style="font-size: 2em"></i>
                <input type="text" name="icon" class="form-control" id="icon" value="{{$socialmedia->icon}}">
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input type="url" name="url" class="form-control" id="url" value="{{$socialmedia->url}}">
            </div>

         
           <button type="submit"  class="btn btn-success">Save</button>
   

    </form>
</div>
@endsection