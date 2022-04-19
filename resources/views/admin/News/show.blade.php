@extends('admin.app')
@section('content')
  <div class="card-body">
    <h1 class="text-center">View information in the News table</h1><br>
    <a href="{{route('admin.news.index')}}"  class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a><br><br>
    <table class="table">
        <tr>
            <th>Image</th>
            <td>
                <img src="{{asset($news->image)}}" alt="img" width="100px" height="60px">
            </td>
        </tr>
    
        <tr>
            <th>Title_uz</th>
            <td>{{$news->title_uz}}</td>
        </tr>
    
        <tr>
            <th>Title_ru</th>
            <td>{{$news->title_ru}}</td>
        </tr>
    
        <tr>
            <th>Title_en</th>
            <td>{{$news->title_en}}</td>
        </tr>
    
        <tr>
            <th>Description_uz</th>
            <td>{{$news->desc_uz}}</td>
        </tr>
    
        <tr>
            <th>Description_ru</th>
            <td>{{$news->desc_ru}}</td>
        </tr>
    
        <tr>
            <th>Description_en</th>
            <td>{{$news->desc_en}}</td>
        </tr>

    </table>
  </div>
@endsection