@extends('frontend.layout.app')
@section('content')

<div class="content py-4">
    <div class="container">
      <div class="info_box">`
            <h3 class="title mb-5">{{ __('words.state emblem of the republic of uzbekistan')}}</h3>
            <img class="mb-3" src="{{asset('img/png/gerb.gif')}}"><br>
              {{ __('words.emblemtext')}}
        </div>
    </div>
</div>

@endsection