
@extends($activeTemplate.'layouts.frontend')

@section('content')
       <!-- Promo Section -->
       <section class="promo_zino">
        <div class="promo_zino__container">
          <div class="promo_zino__wrapper">
            <div class="promo_zino__top">
              <div class="promo_zino__title">Promo</div>
              <div class="promo_zino_content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <p>
                  Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum.Lorem
                  ipsum dolor sit amet, consectetur adipiscing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                  irure dolor in reprehenderit in voluptate velit esse cillum
                  dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                  cupidatat non proident, sunt in culpa qui officia deserunt
                  mollit anim id est laborum.
                </p>
              </div>
            </div>
            <div class="promo_zino__bottom">
              <div class="promo_zino__item"><img src="{{ asset('assets/templates/basic/images/promo/promo_zino__img_1.png') }}" alt=""></div>
              <div class="promo_zino__item"><img src="{{ asset('assets/templates/basic/images/promo/promo_zino__img_2.png') }}" alt=""></div>
              <div class="promo_zino__item"><img src="{{ asset('assets/templates/basic/images/promo/promo_zino__img_1.png') }}" alt=""></div>
              <div class="promo_zino__item"><img src="{{ asset('assets/templates/basic/images/promo/promo_zino__img_2.png') }}" alt=""></div>
              <div class="promo_zino__item"><img src="{{ asset('assets/templates/basic/images/promo/promo_zino__img_1.png') }}" alt=""></div>
              <div class="promo_zino__item"><img src="{{ asset('assets/templates/basic/images/promo/promo_zino__img_2.png') }}" alt=""></div>
            </div>
          </div>
        </div>
      </section>
        <!-- Promo Section END -->
@endsection