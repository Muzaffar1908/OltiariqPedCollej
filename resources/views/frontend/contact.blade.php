@extends('frontend.layout.app')
@section('content')
  
<div class="content py-4">
    <div class="container">
      <div class="row align-items-stretch contact-wrap">
        <div class="col-md-6">
          <div class="form h-100">
            <h3>{{ __('words.contact')}}</h3>

            <form action="{{route('contactSend')}}" class="mb-5"  method="POST"  id="contactForm"  name="contactForm">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group mb-5">
                        <label for="" class="col-form-label">{{ __('words.your name')}} *</label>
                        <input type="text"  class="form-control"  name="name"   id="name"  placeholder="{{ __('words.your name')}}" />
                    </div>

                    <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">{{ __('words.email')}} *</label>
                    <input  type="text"  class="form-control"  name="email"  id="email"    placeholder="{{ __('words.email')}}" />
                    </div>
                 </div>

              <div class="row">

                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">{{ __('words.phone')}}</label>
                  <input  type="text"  class="form-control"  name="phone"  id="phone"  placeholder="{{ __('words.phone')}}"/>
                </div>

                <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">{{ __('words.region')}}</label>
                    <input  type="text"   class="form-control"  name="region"    id="company"    placeholder="{{ __('words.region')}}"  />
                </div>

              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-5">
                    <label for="message" class="col-form-label">{{ __('words.message text')}} *</label>
                    <textarea  class="form-control"  name="desc"  id="message"  cols="30"   rows="4"  placeholder="{{ __('words.message text')}}" ></textarea>
                </div>
              </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                    <input  type="submit"  value="{{ __('words.send')}}"  class="btn btn-primary rounded-0 py-2 px-4"/>
                    <span class="submitting"></span>
                    </div>
                </div>
            </form>

            <div id="form-message-warning mt-4"></div>
            <div id="form-message-success">
               {{ __('words.the field marked "*" must be filled in!')}}
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-info h-100">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48628.950347193844!2d71.75544211991246!3d40.37983490223694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb83431937abc5%3A0xcfa4d876b34e7bbc!2sFergana%2C%20Uzbekistan!5e0!3m2!1sen!2s!4v1627027066072!5m2!1sen!2s"
              width="100%"
              height="100%"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection