@extends('admin.app')
@section('content')
<h1 class="text-center">Change data in a TextSetting table</h1><br>
<div class="modal-body">
    <a href="{{route('admin.textsetting.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left"></i>Back</a><br><br>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('admin.textsetting.update', $textsetting->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label for="text_uz" class="form-label">Text_uz</label>
                <input type="text" name="text_uz" class="form-control" id="text_uz" value="{{$textsetting->text_uz}}">
            </div>

            <div class="mb-3">
                <label for="text_ru" class="form-label">Text_ru</label>
                <input type="text" name="text_ru" class="form-control" id="text_ru" value="{{$textsetting->text_ru}}">
            </div>

            <div class="mb-3">
                <label for="text_en" class="form-label">Text_en</label>
                <input type="text" name="text_en" class="form-control" id="text_en" value="{{$textsetting->text_en}}">
            </div>

            <div class="mb-3">
                <label for="add_uz" class="form-label">Address_uz</label>
                <input type="text" name="address_uz" class="form-control" id="add_uz" value="{{$textsetting->address_uz}}">
            </div>

            <div class="mb-3">
                <label for="add_ru" class="form-label">Address_ru</label>
                <input type="text" name="address_ru" class="form-control" id="add_ru" value="{{$textsetting->address_ru}}">
            </div>

            <div class="mb-3">
                <label for="add_en" class="form-label">Address_en</label>
                <input type="text" name="address_en" class="form-control" id="add_en" value="{{$textsetting->address_en}}">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="phone" name="phone" class="form-control" id="phone" value="{{$textsetting->phone}}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{$textsetting->email}}">
            </div>

      
            <button type="submit"  class="btn btn-success">Save</button>
   

    </form>
</div>
@endsection