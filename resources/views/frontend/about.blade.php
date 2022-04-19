@extends('frontend.layout.app')
@section('content')

<div class="content py-4">
    <div class="container">
      <div class="about">
            <div class="about__item">
                <div class="about__item--block">
                   <img src="{{$about->image}}" />
                </div>
                <div class="about__item--block">
                    <h3 class="title"> {{$about['title_' . session('locale')]}}</h3>
                    <div class="desc">
                        {!!$about['desc_' . session('locale')]!!}
                    </div>
                </div>
            </div>
      </div>
    </div>
</div>

@endsection