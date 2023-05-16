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
            @if($banner->data_values->page == $slug)
                <section class="hero bg_img" style="background: url( {{ getImage('assets/images/frontend/banner/'.@$banner->data_values->image,'1920x780') }} ) 50% 50% no-repeat; width: 100%;">
               
                </section>
            @endif
          @endforeach
      </div>
      <!-- hero end -->
      @if($text != '')
      <div class="container">
      	{!! html_entity_decode($text) !!}
      </div>
      @endif
    @if($sections != null)
        @foreach(json_decode($sections) as $sec)
            @include($activeTemplate.'sections.'.$sec)
        @endforeach
    @endif
@endsection
