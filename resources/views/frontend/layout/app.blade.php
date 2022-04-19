<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('css/fa/css/all.min.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"
    />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.3/dist/jquery.fancybox.min.css"
    />
    <link rel="stylesheet" href="{{asset('css/stellarnav.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    
  {{-- sweet alert  --}}
   <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <title>O'zbekiston Respublikasi Davlat</title>
  </head>

  <body>
    <div class="bg_dark"></div>

    <div class="loader_wrapper">
      <div class="loader"></div>
    </div>

    <span class="anim01"></span>
    <span class="anim02"></span>
    <span class="anim03"></span>
    <span class="anim04"></span>

    <div class="modal_fullscreen"></div>
    <div class="goTop">
      <i class="far fa-arrow-alt-circle-up"></i>
    </div>
   
    <div class="accessibility_menu">
      <div class="container">
        <div class="accessibility_wrapper">
          <div class="font_size accessibility_item">
            <span>{{ __('words.font size')}}</span>
            <div class="buttons">
              <button class="small_size">A-</button>
              <button class="normal_size">A</button>
              <button class="high_size">A+</button>
            </div>
          </div>
          <div class="color_system accessibility_item">
            <span>{{ __('words.system color')}}</span>
            <div class="buttons">
              <button class="grayscale">A</button>
              <button class="invert">A</button>
              <button class="contrast">A</button>
            </div>
          </div>
          <button class="reset accessibility_item">{{ __('words.simple appearance')}}</button>
          <i class="fas fa-times text-dark close_icon"></i>
        </div>
      </div>
    </div>
    <header class="section">
      <div class="header_top paddingX py-1 headline">
        <div
          class="
            container-fluid
            d-flex
            justify-content-between
            align-items-center
          "
        >
          <div class="links">
            <a href="{{route('flag')}}" class="wow link d-none d-sm-block">
              <img src="{{asset('img/png/uzb.png')}}" />
              <span>{{ __('words.flag')}}</span>
            </a>
            <a href="{{route('gerb')}}" class="wow link d-none d-sm-block">
              <img src="{{asset('img/png/gerb.gif')}}" />
              <span>{{ __('words.emblem')}}</span>
            </a>
            <a href="{{route('madhiya')}}" class="wow link d-none d-sm-block">
              <img src="{{asset('img/png/madhiya.png')}}" />
              <span>{{ __('words.anthem')}}</span>
            </a>
            <a href="#" class="wow link accessibility">
              <i class="fas fa-eye"
                ><span class="d-none d-sm-block"
                  >&nbsp; {{ __('words.for the blind')}}</span
                ></i
              >
            </a>
           
          </div>
          <div class="langs">
            <a href="/locale/uz" class="uzb wow lang">
              <img src="{{asset('img/png/uzb.png')}}" />
              <span>Uzb</span>
            </a>
            <a href="/locale/ru" class="rus wow lang">
              <img src="{{asset('img/png/rus.png')}}" />
              <span>Рус</span>
            </a>
            <a href="/locale/en" class="eng wow lang">
              <img src="{{asset('img/png/eng.png')}}" />
              <span>Eng</span>
            </a>
          </div>
        </div>
      </div>

      @php
        $socialmedias = \App\Models\SocialMedia::where('status', '=', 1)->get();
        $textsetting =  \App\Models\TextSetting::first();
       @endphp
      <div class="header_info paddingX py-1 headline">
        <div class="container-fluid">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col-xl-4">
              <a href="{{route('home')}}" class="logo">
                <i class="far fa-circle"></i>
                <span
                  >{{$textsetting['text_' . session('locale')]}}</span
                >
              </a>
            </div>
            <div class="col-xl-8">
              <div class="info_block row">
                <div class="col-lg-4">
                  <a href="tel:+998906325914" class="info_item">
                    <i class="fas fa-phone-alt"></i>
                    <div class="wrap_item">
                      <span class="phone">{{$textsetting->phone}}</span>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 d-none d-sm-block">
                  <div class="info_item">
                    <i class="fas fa-box"></i>
                    <div class="wrap_item">
                      <a href="mailto:bobakalonov@gmail.com" class="email"
                        >{{$textsetting->email}}</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="info_item social">
                   @foreach($socialmedias as $socialmedia)
                      <a href="{{$socialmedia->url}}"><i class="{{$socialmedia->icon}}"></i></a>
                    @endforeach
                
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="stellarnav paddingX headline">
      <ul>
     
        <li><a href="{{route('home')}}">{{ __('words.home')}}</a></li>
        <li><a href="{{route('new')}}">{{ __('words.news')}}</a></li>
        <li><a href="{{route('about')}}">{{ __('words.about as')}}</a></li>
        <li><a href="{{route('contact')}}">{{ __('words.contact')}}</a></li>
      
      </ul>
    </div>

      @yield('content')
      @php
       $links = \App\Models\Link::all();
      @endphp

  <div class="wow services paddingX py-5">
      <span class="title wow">{{ __('words.useful links')}}</span>
      <div class="container-fluid">
        <div class="swiper-container mySwiper">
          <div class="swiper-wrapper">
              @foreach($links as $link)
                <div class="swiper-slide">
                  <i class="{{$link->icon}}"></i>
                  <a href="#" class="service_title"
                    >{{$link['title_' . session('locale')]}}</a>
                </div>
              @endforeach
           
         
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
  </div>

      @php
         $textsetting = \App\Models\TextSetting::first();
         $photos = \App\Models\Photo::all();
      @endphp
    <div class="footer">
      <div class="row paddingX items">
        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
          <a href="{{route('home')}}" class="logo">
            <img src="https://source.unsplash.com/random/100" alt="" />
            <span>{{$textsetting['text_' . session('locale')]}}</span>
          </a>
          <div class="social">
             @foreach($socialmedias as $socialmedia)
             <a href="{{$socialmedia->url}}" class="{{$socialmedia->icon}}"></a>
             @endforeach
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
         
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
          
        </div>
        <div class="col-12 col-md-6 col-lg-12 col-xl-3">
          <span class="sub_title">{{ __('words.contact')}}</span>
          <div class="contacts">
            <div class="contacts__item">
              <i class="fas fa-map-marker-alt"></i>
              <span class="wrap">
                <span>{{$textsetting['address_' . session('locale')]}}</span>
              </span>
            </div>
            <a href="tel:+998906325914" class="contacts__item">
              <i class="fas fa-phone-alt"></i>
              <span>{{$textsetting->phone}}</span>
            </a>
            <a href="mailto:example@mail.com" class="contacts__item">
              <i class="fas fa-mail-bulk"></i>
              <span>{{$textsetting->email}}</span>
            </a>
          </div>
        </div>
      </div>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48628.95034719378!2d71.75544211991246!3d40.37983490223694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb83431937abc5%3A0xcfa4d876b34e7bbc!2z0KTQtdGA0LPQsNC90LAsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e0!3m2!1sru!2s!4v1635587830140!5m2!1sru!2s"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.2.0/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.3/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/stellarnav.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/headerSlider.js')}}"></script>
    
    {{-- sweet alert --}}
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    @if(session()->has('message'))
    <script>
              Swal.fire({
                title: 'Done!',
                text: '{{session('message')}}',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
    </script>
    @endif
  </body>
</html>
