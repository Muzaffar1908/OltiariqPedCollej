@extends('admin.app')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Contact</h1>
        </div>
    </div>
    <div class="card-body">
          <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th>№</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Region</th>
                          <th>Description</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  @foreach($contacts as $contact)
                      <tbody>
                          <tr>
                              <td>{{ ($contacts->currentpage() - 1) * $contacts->perpage() + ($loop->index+1)  }}</td>
                              <td>{{$contact->name}}</td>
                              <td>{{$contact->email}}</td>
                              <td>{{$contact->phone}}</td>
                              <td>{{$contact->region}}</td>
                              <td>{{Str::limit($contact->desc, 30)}}</td>
                              <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('admin.contact.show', $contact->id)}}" type="button" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                    <form action="{{route('admin.contact.destroy', $contact->id)}}" method="POST">
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
              {{$contacts->links()}}
          </div>
    </div>
</div>

@endsection