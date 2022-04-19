@extends('admin.app')
@section('content')
  <div class="card-body">
    <h1 class="text-center">View information in the Photo table</h1><br>
    <a href="{{route('admin.photo.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a><br><br>
    <table class="table">
    
      <tr>
          <th>Image</th>
          <td>
              <img src="{{asset($photo->image)}}" alt="img" width="100px" height="60px">
          </td>
      </tr>
      <tr>
        <th>Sana</th>
        <td>{{$photo->created_at->format('d.m.Y')}}</td>
      </tr>
    
    </table>
  </div>
@endsection