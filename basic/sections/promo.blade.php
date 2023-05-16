@php
	$promoContent = \App\Models\Frontend::where('data_keys', 'promo.content')->first();
	$promoElements = \App\Models\Frontend::where('data_keys', 'promo.element')->orderBy('id', 'ASC')->get();
@endphp
       <!-- Promo Section -->
        <section class="promo_zino">
        <div class="promo_zino__container">
          <div class="promo_zino__wrapper">
            <div class="promo_zino__top">
                <div class="promo_zino__title">{{ $promoContent->data_values->heading }}</div>
                <div class="promo_zino_content">
                  @php echo $promoContent->data_values->sub_heading @endphp
                </div>
              </div>
              <div class="promo_zino__bottom">
              	@foreach($promoElements as $promoElement)
              	<div class="promo_zino__item"><img src="{{ getImage('assets/images/frontend/promo/'.@$promoElement->data_values->bonus_image,'530x350') }}" alt=""></div>
                @endforeach
              </div>
            </div>
          </div>
        </section>
        <!-- Promo Section END -->
