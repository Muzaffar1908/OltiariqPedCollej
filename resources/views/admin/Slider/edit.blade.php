@extends('admin.app')
@section('content')
<div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="text-center">Change the data in the slider table</h1><br>
    <a href="{{route('admin.slider.index')}}" class="btn btn-primary" style="margin-left: 10px"><i class="bi bi-arrow-left"></i>Back</a><br><br>
    <form action="{{route('admin.slider.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
           @method('PUT')
            <div class="mb-3">
                <label for="image" class="form-label">Image</label><br>
                 <img src="{{asset($slider->image)}}" alt="img" width="100px" height="60px">
                <input type="file" name="image" class="form-control" id="image" value="{{$slider->image}}">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title_uz</label>
                <input type="text" name="title_uz" class="form-control" id="title" value="{{$slider->title_uz}}">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title_ru</label>
                <input type="text" name="title_ru" class="form-control" id="title" value="{{$slider->title_ru}}">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title_en</label>
                <input type="text" name="title_en" class="form-control" id="title" value="{{$slider->title_en}}">
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Description_uz</label>
                <textarea name="desc_uz" id="summernote1" cols="10" rows="5" class="form-control">{{$slider->desc_uz}}</textarea>
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Description_ru</label>
                <textarea name="desc_ru" id="summernote2" cols="10" rows="5" class="form-control">{{$slider->desc_ru}}</textarea>
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Description_en</label>
                <textarea name="desc_en" id="summernote3" cols="10" rows="5" class="form-control">{{$slider->desc_en}}</textarea>
            </div>

            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="url" name="link" class="form-control" id="link" value="{{$slider->link}}">
            </div>
      
           <button type="submit" class="btn btn-success">Save</button>
   

    </form>
</div>
@endsection