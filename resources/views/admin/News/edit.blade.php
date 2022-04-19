@extends('admin.app')
@section('content')
<div class="card-body">
    <h1 class="text-center">Change information in the News table</h1><br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
   @endif
   <a href="{{route('admin.news.index')}}"  class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a><br><br>
    <form action="{{route('admin.news.update',  $news->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
       @method('PUT')
            <div class="mb-3">
                <label for="image" class="form-label">Image</label><br>
                <img src="{{asset($news->image)}}" alt="img" width="100px" height="60px">
                <input type="file" name="image" class="form-control" id="image" value="{{$news->image}}">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title_uz</label>
                <input type="text" name="title_uz" class="form-control" id="title" value="{{$news->title_uz}}">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title_ru</label>
                <input type="text" name="title_ru" class="form-control" id="title" value="{{$news->title_ru}}">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title_en</label>
                <input type="text" name="title_en" class="form-control" id="title" value="{{$news->title_en}}">
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Description_uz</label>
                <textarea name="desc_uz" id="summernote1" cols="10" rows="5" class="form-control">{{$news->desc_uz}}</textarea>
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Description_ru</label>
                <textarea name="desc_ru" id="summernote2" cols="10" rows="5" class="form-control">{{$news->desc_ru}}</textarea>
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Description_en</label>
                <textarea name="desc_en" id="summernote3" cols="10" rows="5" class="form-control">{{$news->desc_en}}</textarea>
            </div>

           <button type="submit"  class="btn btn-success">Save</button>

    </form>
</div>
@endsection