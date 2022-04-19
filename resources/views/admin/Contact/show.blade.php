@extends('admin.app')
@section('content')
    <h1 class="text-center">View information in the Contact table</h1><br>
    <div class="card-body">
         <a href="{{route('admin.contact.index')}}" class="btn btn-primary"><i class="bi bi-arrow-left-short"></i>Back</a><br><br>
         <div class="table-responsive">
              <table class="table">
                  <tr>
                      <th>Name</th>
                      <td>{{$contact->name}}</td>
                  </tr>

                  <tr>
                      <th>Email</th>
                      <td>{{$contact->email}}</td>
                  </tr>

                  <tr>
                      <th>Phone</th>
                      <td>{{$contact->phone}}</td>
                  </tr>

                  <tr>
                      <th>Region</th>
                      <td>{{$contact->region}}</td>
                  </tr>

                  <tr>
                      <th>Description</th>
                      <td>{{$contact->desc}}</td>
                  </tr>
              </table>
         </div>
    </div>
@endsection