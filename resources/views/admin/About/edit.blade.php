@extends('admin.app')
@section('content')
    <h1 class="text-center">Change information in the About table</h1><br>
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
        <a href="{{asset(route('admin.about.index'))}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a><br><br>
        <form action="{{route('admin.about.update', $about->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="mb-3">
               <label for="image" class="form-label">Image</label><br>
               <img src="{{asset($about->image)}}" alt="img" width="100px" height="60px">
               <input type="file" name="image" class="form-control" id="image" value="{{$about->image}}">
           </div>        
       
           <div class="mb-3">   
               <label for="title" class="form-label">Title_uz</label>
               <input type="text" name="title_uz" class="form-control" id="title" value="{{$about->title_uz}}">
           </div>     
       
           <div class="mb-3">
               <label for="title" class="form-label">Title_ru</label>
               <input type="text" name="title_ru" class="form-control" id="title" value="{{$about->title_ru}}">
           </div>     

           <div class="mb-3">
               <label for="title" class="form-label">Title_en</label>
               <input type="text" name="title_en" class="form-control" id="title" value="{{$about->title_en}}">
           </div>    
           
           <div class="mb-3">
               <label for="desc" class="form-label">Desc_uz</label>
               <textarea name="desc_uz" id="summernote1" cols="10" rows="5" class="form-control">{{$about->desc_uz}}</textarea>
           </div>  
           @error('desc_uz')
               {{$message}}
           @enderror 

           <div class="mb-3">
               <label for="desc" class="form-label">Desc_ru</label>
               <textarea name="desc_ru" id="summernote2" cols="10" rows="5" class="form-control">{{$about->desc_ru}}</textarea>
           </div>   

           <div class="mb-3">
               <label for="desc" class="form-label">Desc_en</label>
               <textarea name="desc_en" id="summernote3" cols="10" rows="5" class="form-control">{{$about->desc_en}}</textarea>
           </div>   

           <button type="submit"  class="btn btn-success">Save</button>
       </form>
    </div>
@endsection