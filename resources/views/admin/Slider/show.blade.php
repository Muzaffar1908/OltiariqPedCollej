@extends('admin.app')
@section('content')
    <div class="card-body">
        <h1 class="text-center">View data in a slider table</h1><br>
    <a href="{{route('admin.slider.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left"></i>Back</a><br><br>
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <td>
                    <img src="{{asset($slider->image)}}" alt="img" width="100px" height="60px">
                </td>
            </tr>
            <tr>
                <th>Title_uz</th>
                <td>{{$slider->title_uz}}</td>
            </tr>
            <tr>
                <th>Title_ru</th>
                <td>{{$slider->title_ru}}</td>
            </tr>
            <tr>
                <th>Title_en</th>
                <td>{{$slider->title_en}}</td>
            </tr>
            <tr>
                <th>Description_uz</th>
                <td>{{$slider->desc_uz}}</td>
            </tr>
            <tr>
                <th>Description_ru</th>
                <td>{{$slider->desc_ru}}</td>
            </tr>
            <tr>
                <th>Description_en</th>
                <td>{{$slider->desc_en}}</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>{{$slider->link}}</td>
            </tr>
        </thead>
    </table>
    </div>
@endsection