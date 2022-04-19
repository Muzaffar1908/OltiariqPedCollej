@extends('frontend.layout.app')
@section('content')
<div class="news_section section paddingX py-5">
    <div class="container-fluid">
      <span class="title wow">{{ __('words.news')}}</span>
      <div class="wrapper row">

            @foreach($new as $news)

            <div class="col-md-6 col-12 col-xl-4 mb-4">
                <div class="news_item">
                  <div class="news_item swiper-slide">
                        <div class="date_news">
                            <i class="far fa-calendar-alt"></i>
                            <span class="date">{{$news->created_at}} [{{count($news->views)}}]</span>
                        </div>
                        <div class="news_img">
                            <img src="{{asset($news->image)}}" />
                        </div>
                        <span class="news_title">{{$news['title_' . session('locale')]}}</span>
                        <span class="news_description">{{$news['desc_' . session('locale')]}}</span>
                        <a href="{{route('newsShow', $news->slug)}}" class="nd_btn"
                        ><span>{{ __('words.read  more')}}</span></a>
                  </div>
                </div>
            </div>
            {{-- <div class="col-md-6 col-12 col-xl-4 mb-4">
                <div class="news_item">
                <div class="news_item swiper-slide">
                    <div class="date_news">
                        <i class="far fa-calendar-alt"></i>
                        <span class="date">{{$news->created_at}}</span>
                    </div>
                    <div class="news_img">
                       <img src="{{$news->image}}" />
                    </div>
                    <span class="news_title" {{$news['title_' . session('locale')]}}</span
                    >
                    <span class="news_description"> {{$news['desc_' . session('locale')]}}</span
                    >
                    <a href="{{route('newsShow', $news->id)}}" class="nd_btn"
                    ><span>Batafsil</span></a
                    >
                </div>
                </div>
            </div> --}}
            @endforeach


      
      </div>
       {{$new->links('frontend.layout.pagination')}}
    </div>
</div>
@endsection