@extends($activeTemplate.'layouts.frontend')
@section('content')
   @php
      $banners = getContent('banner.element', false, null ,true);
   @endphp

      <!-- hero start -->
      
      <style>
        .owl-nav {
            display: none !important; 
        }
        .owl-dots {
        	position: relative;
            z-index: 99;
        	margin-top: -75px;
        }
        .owl-carousel1 .hero.bg_img {
        	background-size: contain !important;
        }
        .owl-carousel11 .hero.bg_img {
        	background-size: contain !important;
        }
        .owl-carousel1 {
        	display: block !important;
        }
        .owl-carousel11 {
        	display: none !important;
        }
        @media (max-width: 600px) {
            .owl-carousel11 {
            	display: block !important;
            }
            .owl-carousel1 {
            	display: none !important;
         }
        }
      </style>
      
      <div class="owl-carousel owl-carousel1  owl-theme">  
      	  @foreach($banners as $keybanner => $banner)
               @if($banner->data_values->page == '/')
               <section class="hero bg_img" style="background: url( {{ getImage('assets/images/frontend/banner/'.@$banner->data_values->image,'1920x780') }} ) 50% 50% no-repeat; width: 100%;">
                  @if($banner->data_values->sub_heading != 'Register, deposit and get 250% and more bonuses, gifts')
                     <div class="container"></div>
                  @else
                     <div class="container container-fully">
                           <div class="row justify-content-between align-items-center">
                              <div class="col-lg-6">
                                 <div class="hero__content text-lg-left text-center">
                                    <h2 class="hero__title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">{{ __($banner->data_values->heading) }}</h2>
                                    <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">{{ __($banner->data_values->sub_heading) }}</p>
                                    <div class="btn-group justify-content-lg-start justify-content-center mt-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
                                       <a href="{{ __($banner->data_values->button_url_1) }}" class="cmn-btn">{{ __($banner->data_values->button_1) }}</a>
                                       <a href="{{ __($banner->data_values->button_url_2) }}" class="cmn-btn-two">{{ __($banner->data_values->button_2) }}</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                  @endif
               </section>
               @endif
            @endforeach
      </div>
      <div class="owl-carousel owl-carousel11  owl-theme">
      	  @foreach($banners as $keybanner => $banner)
           @if($banner->data_values->page == '/')
      		@if(isset($banner->data_values->imagemobile) and  $banner->data_values->imagemobile != "") 
               <section class="hero bg_img">
                  <img src="{{ getImage('assets/images/frontend/banner/'.@$banner->data_values->imagemobile,'400x500') }}" />
                  @if($banner->data_values->sub_heading != 'Register, deposit and get 250% and more bonuses, gifts')
                    
                  @else
                     <div class="container container-fully" style="position: absolute; top: 20%;">
                        <div class="row justify-content-between align-items-center">
                           <div class="col-lg-6">
                              <div class="hero__content text-lg-left text-center">
                                 <h2 class="hero__title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">{{ __($banner->data_values->heading) }}</h2>
                                 <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">{{ __($banner->data_values->sub_heading) }}</p>
                                 <div class="btn-group justify-content-lg-start justify-content-center mt-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
                                    <a href="{{ __($banner->data_values->button_url_1) }}" class="cmn-btn">{{ __($banner->data_values->button_1) }}</a>
                                    <a href="{{ __($banner->data_values->button_url_2) }}" class="cmn-btn-two">{{ __($banner->data_values->button_2) }}</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endif
               </section>
          	@endif
             @endif
          @endforeach
          
      </div>
      
     
      <!-- hero end -->

    @if($sections->secs != null)
        @foreach(json_decode($sections->secs) as $sec)
            @include($activeTemplate.'sections.'.$sec)
        @endforeach
    @endif
@endsection
