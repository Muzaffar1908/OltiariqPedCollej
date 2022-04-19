@extends('admin.app')
@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Social Media</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('admin.socialmedia.store')}}" method="POST">
                @csrf
             
                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon</label>
                        <input type="text" name="icon" class="form-control" id="icon" >
                    </div>

                    <div class="mb-3">
                        <label for="url" class="form-label">Url</label>
                        <input type="url" name="url" class="form-control" id="url">
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
            <h1 class="toastrDefaultSuccess" id="slider">SocialMedia</h1>
            <a class="btn btn-primary" type="button" data-bs-toggle="modal"  data-bs-target="#exampleModal"><i class="bi bi-plus"></i>Add</a>
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
                    <th>Url</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($socialmedias as   $socialmedia)
                <tbody>
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>
                            <i class="{{$socialmedia->icon}}" style="font-size: 2em;"></i>
                        </td>
                        <td>{{$socialmedia->url}}</td>
                        <td>
                            <form action="{{route('admin.activation')}}" method="POST" >
                                @csrf
                                <input type="hidden" name="type" value="social">
                                <input type="hidden" name="id" value="{{$socialmedia->id}}">
                                  @if ($socialmedia->status == true)
                                    <button type="submit" class="btn btn-success btn-sm">
                                        Active
                                    </button>
                                  @else
                                  <button type="submit" class="btn btn-danger btn-sm">
                                    Inactive
                                 </button>
                                  @endif
                            </form>
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('admin.socialmedia.show', $socialmedia->id)}}" type="button" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="{{route('admin.socialmedia.edit', $socialmedia->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                <form action="{{route('admin.socialmedia.destroy', $socialmedia->id)}}" method="POST">
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
       </div>
    </div>
</div>

@endsection