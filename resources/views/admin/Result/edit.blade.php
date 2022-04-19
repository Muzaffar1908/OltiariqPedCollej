@extends('admin.app')
@section('content')
<h1 class="text-center">Change information in the result table</h1><br>
    <div class="card-body">
    <a href="{{route('admin.result.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a><br><br>

        <form action="{{route('admin.result.update', $result->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
               @method('PUT')
                <div class="mb-3">
                    <label for="icon" class="form-label">Icon</label><br>
                    <i class="{{$result->icon}}" style="font-size: 2em"></i>
                    <input type="text" name="icon" class="form-control" id="icon" value="{{$result->icon}}">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title_uz</label>
                    <input type="text" name="title_uz" class="form-control" id="title" value="{{$result->title_uz}}">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title_ru</label>
                    <input type="text" name="title_ru" class="form-control" id="title" value="{{$result->title_ru}}">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title_en</label>
                    <input type="text" name="title_en" class="form-control" id="title" value="{{$result->title_en}}">
                </div>

                <div class="mb-3">
                    <label for="son" class="form-label">Son</label>
                    <input type="text" name="son" class="form-control" id="son" value="{{$result->son}}">
                </div>

                <button type="submit"  class="btn btn-success">Save</button>
       

        </form>
    </div>
@endsection