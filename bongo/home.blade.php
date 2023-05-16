@php 
	if(isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
		$webp = 'webp';
	} else {
		$webp = 'png';
	}
@endphp
@extends($activeTemplate.'layouts.frontend')
@section('content')

<!-- Section Hero -->
          {{-- if One Bunner --}}
       

          <section class="hero hero_new">
            <div class="hero__container">
              <div class="hero_wrapper">
                <div class="hero_grid">
                  <div class="hero_grid_item">
                     <div class="swiper hero_swiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="hero_slide" style="background-image: url({{ asset('assets/images/frontend/homepage/homepage_banner_1.'.$webp) }});">
                              <div class="hero_content_wrapper">
                                <div class="hero__content">
                                  <div class="hero_content_left_title">
                                    @lang('hero_content_left_title')
                                  </div>
                                  <div class="hero_content_left_subtitle">
                                    @lang('hero_content_left_subtitle')
                                  </div>
                                </div>
                                <a href="{{ route('user.register') }}" class="hero_content_btn main_btn_green">@lang('join us')</a>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="hero_slide" style="background-image: url({{ asset('assets/images/frontend/homepage/homepage_banner_slide_1.'.$webp) }});">
                            </div>
                          </div>
                          <div class="swiper-slide">
                           <div class="hero_slide" style="background-image: url({{ asset('assets/images/frontend/homepage/homepage_banner_slide_2.'.$webp) }});">
                           </div>
                         </div>
                         <div class="swiper-slide">
                           <div class="hero_slide" style="background-image: url({{ asset('assets/images/frontend/homepage/homepage_banner_slide_3.'.$webp) }});">
                           </div>
                         </div>
                        </div>
                      </div>
                  </div>

                  <div class="hero_grid_item" style="background-image: url({{ asset('assets/images/frontend/homepage/homepage_banner_2.'.$webp) }});">
    
                  </div>
                  <div class="hero_grid_item" style="background-image: url({{ asset('assets/images/frontend/homepage/homepage_banner_3.'.$webp) }});">
    
                  </div>
                </div>
    
              </div>
            </div>
          </section>
          <!-- Section Hero END -->
          <!-- Section Hero END --> 
          



    @if($sections->secs != null)
        @foreach(json_decode($sections->secs) as $sec)
            @include($activeTemplate.'sections.'.$sec)
        @endforeach
    @endif
@endsection
