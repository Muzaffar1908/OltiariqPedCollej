@extends('admin.app')
@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Text Setting</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('admin.textsetting.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
             
                    <div class="mb-3">
                        <label for="text_uz" class="form-label">Text_uz</label>
                        <input type="text" name="text_uz" class="form-control" id="text_uz">
                    </div>

                    <div class="mb-3">
                        <label for="text_ru" class="form-label">Text_ru</label>
                        <input type="text" name="text_ru" class="form-control" id="text_ru">
                    </div>

                    <div class="mb-3">
                        <label for="text_en" class="form-label">Text_en</label>
                        <input type="text" name="text_en" class="form-control" id="text_en">
                    </div>

                    <div class="mb-3">
                        <label for="add_uz" class="form-label">Address_uz</label>
                        <input type="text" name="address_uz" class="form-control" id="add_uz">
                    </div>

                    <div class="mb-3">
                        <label for="add_ru" class="form-label">Address_ru</label>
                        <input type="text" name="address_ru" class="form-control" id="add_ru">
                    </div>

                    <div class="mb-3">
                        <label for="add_en" class="form-label">Address_en</label>
                        <input type="text" name="address_en" class="form-control" id="add_en">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="phone" name="phone" class="form-control" id="phone">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
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
            <h1 class="toastrDefaultSuccess" id="slider">TextSetting</h1>
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
                        <th>Text</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach($textsettings as $textsetting)
                    <tbody>
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$textsetting->text_en}}</td>
                            <td>{{$textsetting->address_en}}</td>
                            <td>{{$textsetting->phone}}</td>
                            <td>{{$textsetting->email}}</td>  
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('admin.textsetting.show', $textsetting->id)}}" type="button" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                    <a href="{{route('admin.textsetting.edit', $textsetting->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                    <form action="{{route('admin.textsetting.destroy', $textsetting->id)}}" method="POST">
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