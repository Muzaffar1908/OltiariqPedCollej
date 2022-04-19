@extends('admin.app')
@section('content')
<h1 class="text-center">View data in a TextSetting table</h1><br>
<div class="card-body">
    <a href="{{route('admin.textsetting.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left"></i>Back</a><br><br>

    <table class="table">
        <thead>
            <tr>
                <th>Text_uz</th>
                <td>{{$textsetting->text_uz}}</td>
            </tr>
            <tr>
                <th>Text_ru</th>
                <td>{{$textsetting->text_ru}}</td>
            </tr>
            <tr>
                <th>Text_en</th>
                <td>{{$textsetting->text_en}}</td>
            </tr>
            <tr>
                <th>Address_uz</th>
                <td>{{$textsetting->address_uz}}</td>
            </tr>
            <tr>
                <th>Address_ru</th>
                <td>{{$textsetting->address_ru}}</td>
            </tr>
            <tr>
                <th>Address_en</th>
                <td>{{$textsetting->address_en}}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{$textsetting->phone}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$textsetting->email}}</td>
            </tr>
        </thead>
    </table>

</div>
    
@endsection