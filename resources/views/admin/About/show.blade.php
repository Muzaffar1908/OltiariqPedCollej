@extends('admin.app')
@section('content')
    <h1 class="text-center">View information in the About table</h1><br>
    <div class="card-body">
        <a href="{{asset(route('admin.about.index'))}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a><br><br>
         <div class="table-responsive">
              <table class="table">

                   <tr>
                       <th>Image</th>
                       <td>
                           <img src="{{asset($about->image)}}" alt="img" width="100px" height="60px">
                       </td>
                   </tr>

                   <tr>
                       <th>Title_uz</th>
                       <td>{{$about->title_uz}}</td>
                   </tr>

                   <tr>
                        <th>Title_ru</th>
                        <td>{{$about->title_ru}}</td>
                    </tr>

                    <tr>
                        <th>Title_en</th>
                        <td>{{$about->title_en}}</td>
                    </tr>

                    <tr>
                        <th>Desc_uz</th>
                        <td>{!!$about->desc_uz!!}</td>
                    </tr>

                    <tr>
                        <th>Desc_ru</th>
                        <td>{!!$about->desc_ru!!}</td>
                    </tr>

                    <tr>
                        <th>Desc_en</th>
                        <td>{!!$about->desc_en!!}</td>
                    </tr>
              </table>
         </div>
    </div>
@endsection