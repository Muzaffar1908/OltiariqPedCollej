@extends('frontend.layout.app')
@section('content')
<div class="wrapper header_slider loading">
    <main>
        <div class="slideshow">
            <div class="slides">
                @foreach($sliders as $slider)
                <div class="slide 
                    @if ($sliders[0]->id == $slider->id)
                    slide--current
                    @endif
                ">
                    <div
                    class="slide__img"
                    style="
                        background-image: url({{$slider->image}});
                    "
                    ></div>
                    <h2 class="slide__title"> {{$slider['title_' . session('locale')]}}</h2>
                    <p class="slide__desc">
                        {{$slider['desc_' . session('locale')]}}
                    </p>
                    <a class="slide__link" href="{{$slider->link}}">{{ __('words.more')}}</a>
                </div>
                @endforeach
            </div>
            <nav class="slidenav">
                <button class="slidenav__item slidenav__item--prev">
                    <i class="fas fa-angle-left"></i>
                </button>
                <button class="slidenav__item slidenav__item--next">
                    <i class="fas fa-angle-right"></i>
                </button>
            </nav>
        </div>
    </main>
</div>

<div class="news paddingX py-5">
    <div class="container-fluid">
      <span class="title wow">{{ __('words.news')}}</span>
      <div class="news_block swiper-container">
        <div class="swiper-wrapper">
            @foreach($newss as $news)
                <div class="news_item swiper-slide">
                    <div class="date_news">
                        <i class="far fa-calendar-alt"></i>
                        <span class="date">{{$news->created_at}} [{{count($news->views)}}]</span>
                    </div>
                    <div class="news_img">
                       <img src="{{asset($news->image)}}" />
                    </div>
                    <span class="news_title"
                    > {{$news['title_' . session('locale')]}}</span
                    >
                    <span class="news_description"
                    > {{$news['desc_' . session('locale')]}}</span
                    >
                    <a href="{{route('newsShow', $news->slug)}}" class="nd_btn"
                    ><span>{{ __('words.read  more')}}</span></a
                    >
                </div>
            @endforeach
        </div>
      </div>
    </div>
    <a href="{{route('new')}}" class="st_btn">
      <span>{{ __('words.see all')}}</span>
    </a>
</div>

  <div class="photogallery paddingX">
    <span class="title wow">{{ __('words.image gallery')}}</span>
    <div class="wrapper" id="gallery-container">
        @foreach($photos as $photo)
            <figure class="photogallery__item">
                <a
                data-fancybox="images"
                href="{{$photo->image}}"
              
                >
                <img class="img-fluid" src="{{$photo->image}}" />
                <i class="fa fa-camera"></i>
                </a>
            </figure>
        @endforeach
      
    </div>
    <a href="{{route('allPhoto')}}" class="st_btn">
      <span>{{ __('words.see all')}}</span>
    </a>
</div>
  
  <div class="counter_section paddingX py-5">
    <span class="title wow">{{ __('words.indicators')}}</span>
    <div class="counter_wrapper row">
        @foreach($results as $result)
            <div class="col-xl-3 col-lg-6 col-md-12 m-0">
                <div class="wow item_counter">
                    <i class="{{$result->icon}}"></i>
                    <span class="counter_title"> {{$result['title_' . session('locale')]}}</span>
                    <span class="counter">{{$result->son}}</span>
                </div>
            </div>
        @endforeach
     
    </div>
</div>

@endsection