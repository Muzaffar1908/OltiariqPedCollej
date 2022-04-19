@extends('frontend.layout.app')

@section('content')
@php
    $socialmedias = \App\Models\SocialMedia::where('status', '=', 1)->get();
@endphp
<div class="news_content py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="row">
          <div class="col-12 py-3">
            <img
              class="news_img"
              src="{{asset($news->image)}}"
            />
          </div>
          <div class="col-12">
            <span class="date text-muted mb-1">{{$news->created_at}} [{{count($news->views)}}]</span>
            <h5 class="news_title">
                {{$news['title_' . session('locale')]}}
            </h5>
            <p>
               {{$news->desc_en}}
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-5 py-3">
          <h5 class="text-dark mb-3">{{ __('words.other news')}}</h5>
           @foreach($newss as $news)
           <div class="row mb-3">
              <div class="col-4">
                <img
                  class="news_thumbs"
                  src="{{asset($news->image)}}"
                />
              </div>
              <div class="col-8">
                <a class="text-dark" href="{{route('newsShow', $news->slug)}}"
                  > {{$news['title_' . session('locale')]}}</a>
              </div>
          </div>
           @endforeach
        

      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div
          class="f_widget social-widget pl_70 wow fadeInLeft"
          data-wow-delay="0.8s"
          style="
            visibility: visible;
            animation-delay: 0.8s;
            animation-name: fadeInLeft;
          "
        >
          <div class="f_social_icon">
            @foreach($socialmedias as $socialmedia)
              <a href="{{$socialmedia->url}}" class="{{$socialmedia->icon}}"></a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection