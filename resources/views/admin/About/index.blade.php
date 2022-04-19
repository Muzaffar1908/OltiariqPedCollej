@extends('admin.app')
@section('content')


  
  <!-- Modal -->
  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">About title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('admin.about.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" value="{{old('image')}}">
                </div>         

                <div class="mb-3">
                    <label for="image" class="form-label">Title_uz</label>
                    <input type="text" name="title_uz" class="form-control" value="{{old('title_uz')}}">
                </div>     

                <div class="mb-3">
                    <label for="image" class="form-label">Title_ru</label>
                    <input type="text" name="title_ru" class="form-control" value="{{old('title_uz')}}">
                </div>     

                <div class="mb-3">
                    <label for="image" class="form-label">Title_en</label>
                    <input type="text" name="title_en" class="form-control" value="{{old('title_uz')}}">
                </div>    
                
                <div class="mb-3">
                    <label for="desc" class="form-label">Desc_uz</label>
                    <textarea name="desc_uz" id="summernote1" cols="10" rows="5" class="form-control">{{old('desc_uz')}}</textarea>
                </div>   

                <div class="mb-3">
                    <label for="desc" class="form-label">Desc_ru</label>
                    <textarea name="desc_ru" id="summernote2" cols="10" rows="5" class="form-control">{{old('desc_ru')}}</textarea>
                </div>   

                <div class="mb-3">
                    <label for="desc" class="form-label">Desc_en</label>
                    <textarea name="desc_en" id="summernote3" cols="10" rows="5" class="form-control">{{old('desc_en')}}</textarea>
                </div>   

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        
      </div>
    </div>
  </div> --}}
  



<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            {{-- <h1>About</h1>
            <a  class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i>Add</a> --}}
        </div>
    </div>
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
          <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th>№</th>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  @foreach($abouts as $about)
                      <tbody>
                          <tr>
                              <td>{{$loop->index+1}}</td>
                              <td>
                                  <img src="{{asset($about->image)}}" alt="img" width="100px" height="60px">
                              </td>
                              <td>{{$about->title_en}}</td>
                              <td>{!!Str::limit(strip_tags($about->desc_en), 50)!!}</td>
                              <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{route('admin.about.show', $about->id)}}" type="button" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                        <a href="{{route('admin.about.edit', $about->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                        {{-- <form action="{{route('admin.about.destroy', $about->id)}}" method="POST" enctype="multipart/form-data">
                                           @csrf
                                           @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                        </form> --}}
                                    </div>
                              </td>
                          </tr>
                      </tbody>
                  @endforeach
              </table>
          </div>
    </div>
</div>

@endsection