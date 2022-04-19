@extends('admin.app')
@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">News</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             
                <form action="{{route('admin.news.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                 
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputEmail1" value="{{old('image')}}">
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Title_uz</label>
                            <input type="text" name="title_uz" class="form-control" id="exampleInputPassword1" value="{{old('title_uz')}}">
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Title_ru</label>
                            <input type="text" name="title_ru" class="form-control" id="exampleInputPassword1" value="{{old('title_ru')}}">
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Title_en</label>
                            <input type="text" name="title_en" class="form-control" id="exampleInputPassword1" value="{{old('title_en')}}">
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description_uz</label>
                            <textarea name="desc_uz" id="summernote1" cols="10" rows="5" class="form-control">{{old('desc_uz')}}</textarea>
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description_ru</label>
                            <textarea name="desc_ru" id="summernote2" cols="10" rows="5" class="form-control">{{old('desc_ru')}}</textarea>
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description_en</label>
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
</div>

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1>News</h1>
            <a  class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i>Add</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card-body">
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
                @foreach($newss as $news)
                    <tbody>
                        <tr>
                            <td>{{($newss->currentpage() - 1) * $newss->perpage() + ($loop->index+1)}}</td>
                            <td>
                                <img src="{{asset($news->image)}}" alt="img" width="100px" height="60px">
                            </td>
                            <td>{{$news->title_en}}</td>
                            <td>{!!Str::limit(strip_tags($news->desc_en), 50)!!}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('admin.news.show', $news->id)}}" type="button" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                    <a href="{{route('admin.news.edit', $news->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                    <form action="{{route('admin.news.destroy', $news->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            {{$newss->links()}}
        </div>
    </div>
</div>
@endsection