@extends('admin.app')
@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Results</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             
                <form action="{{route('admin.result.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                 
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Icon</label>
                            <input type="text" name="icon" class="form-control" id="exampleInputEmail1" value="{{old('icon')}}">
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
                            <label for="exampleInputPassword1" class="form-label">Son</label>
                            <input type="text" name="son" class="form-control" id="exampleInputPassword1" value="{{old('son')}}">
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
            <h1>Results</h1>
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
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Son</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach($results as $result)
                    <tbody>
                        <tr>
                            <td>{{($results->currentpage() - 1) * $results->perpage() + ($loop->index+1)}}</td>
                            <td>
                               <i class="{{$result->icon}}" style="font-size: 2em;"></i>
                            </td>
                            <td>{{$result->title_en}}</td>
                            <td>{{$result->son}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('admin.result.show', $result->id)}}" type="button" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                    <a href="{{route('admin.result.edit', $result->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                    <form action="{{route('admin.result.destroy', $result->id)}}" method="POST">
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
            {{$results->links()}}
         </div>
    </div>
</div>
@endsection