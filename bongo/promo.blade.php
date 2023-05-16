
@extends($activeTemplate.'layouts.frontend')

@section('content')
       <!-- Promo Section -->
        <section class="promo">
          <div class="promo__container">
            <div class="promo__wrapper">
              <div class="promo__top">
                <div class="promo__title">@lang('PROMO')</div>
                <div class="promo_content">
                  <p>
                    @lang('promo_content_1')
                  </p>
                  <p>
                    @lang('promo_content_2')
                  </p>
                </div>
              </div>
              <div class="promo__bottom">
                <div
                  class="promo__item"
                  style="background-image: url({{ asset('assets/templates/bongo/images/promo/homepage_banner_1.png') }})"
                >
                  <div class="promo__content_wrapper">
                    <div class="promo__content">
                      <div class="promo__left_title">@lang('hero_content_left_title')</div>
                      <div class="promo__left_subtitle">
                        @lang('hero_content_left_subtitle')
                      </div>
                    </div>
                    <a href="{{ route('user.register') }}"  class="promo__btn main_btn_green">@lang('join us')</a>
                  </div>
                </div>
                <div
                  class="promo__item"
                  style="
                    background-image: url({{ asset('assets/templates/bongo/images/promo/homepage_banner_slide_1.png') }});
                  "
                ></div>
                <div
                  class="promo__item"
                  style="
                    background-image: url({{ asset('assets/templates/bongo/images/promo/homepage_banner_slide_2.png') }});
                  "
                ></div>
                <div
                  class="promo__item"
                  style="
                    background-image: url({{ asset('assets/templates/bongo/images/promo/homepage_banner_slide_3.png') }});
                  "
                ></div>
              </div>
            </div>
          </div>
        </section>
        <!-- Promo Section END -->
@endsection