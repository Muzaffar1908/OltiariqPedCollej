@extends('admin.app')
@section('content')
<h1 class="text-center">View information in the result table</h1><br>
<div class="card-body">
    <a href="{{route('admin.result.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a><br><br>
    <table class="table">
            <tr>
                <th>Icon</th>
                <td>
                    <i class="{{$result->icon}} "  style="font-size: 2em;" ></i>
                </td>
            </tr>
            <tr>
                <th>Title_uz</th>
                <td>{{$result->title_uz}}</td>
            </tr>
            <tr>
                <th>Title_ru</th>
                <td>{{$result->title_ru}}</td>
            </tr>
            <tr>
                <th>Title_en</th>
                <td>{{$result->title_en}}</td>
            </tr>
            <tr>
                <th>Son</th>
                <td>{{$result->son}}</td>
            </tr>
        </table>
    </div>
@endsection