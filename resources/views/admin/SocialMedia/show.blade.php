@extends('admin.app')
@section('content')

<h1 class="text-center">View data in a SocialMedia table</h1><br>
<div class="card-body">
    <a href="{{route('admin.socialmedia.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left"></i>Back</a><br><br>

    <table class="table">
        <thead>

            <tr>
                <th>Icon</th>
                <td>
                    <i class="{{$socialmedia->icon}}" style="font-size: 2em"></i>
                </td>
            </tr>

            <tr>
                <th>Url</th>
                <td>{{$socialmedia->url}}</td>
            </tr>
          
        </thead>
    </table>

</div>

@endsection