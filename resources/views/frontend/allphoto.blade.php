@extends('frontend.layout.app')
@section('content')


<div class="photogallery_section section paddingX py-5">
    <div class="container-fluid">
      <span class="title wow">{{ __('words.image gallery')}}</span>
      <div class="photogallery">
        <div class="wrapper" id="gallery-container">
             @foreach($photos as $photo)
                <figure class="photogallery__item">
                    <a
                    data-fancybox="images"
                    href="{{asset($photo->image)}}"
                    >
                    <img
                        class="img-fluid"
                        src="{{asset($photo->image)}}"
                    />
                    <i class="fa fa-camera"></i>
                    </a>
                </figure>
    
             @endforeach
         
        </div>
      </div>
      {{$photos->links('frontend.layout.pagination')}}
    </div>
</div>

@endsection