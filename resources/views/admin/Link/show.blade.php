@extends('admin.app')
@section('content')
<h1 class="text-center">View information in the Link table</h1><br>

    <div class="card-body">
    <a href="{{route('admin.link.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a><br><br>
    <table class="table">
        <tr>
            <th>Icon</th>
            <td>
                <i class="{{$link->icon}}" style="font-size: 2em"></i>
            </td>
        </tr>

        <tr>
            <th>Title_uz</th>
            <td>{{$link->title_uz}}</td>
        </tr>

        <tr>
            <th>Title_ru</th>
            <td>{{$link->title_ru}}</td>
        </tr>

        <tr>
            <th>Title_en</th>
            <td>{{$link->title_en}}</td>
        </tr>

        <tr>
            <th>Link</th>
            <td>{{$link->link}}</td>
        </tr>
    </table>
    </div>
@endsection