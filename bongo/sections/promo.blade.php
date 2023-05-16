@php
	$promoContent = \App\Models\Frontend::where('data_keys', 'promo.content')->first();
	$promoElements = \App\Models\Frontend::where('data_keys', 'promo.element')->orderBy('id', 'ASC')->get();
@endphp
       <!-- Promo Section -->
        <section class="promo">
          <div class="promo__container">
            <div class="promo__wrapper">
              <div class="promo__top">
                <div class="promo__title">{{ $promoContent->data_values->heading }}</div>
                <div class="promo_content">
                  @php echo $promoContent->data_values->sub_heading @endphp
                </div>
              </div>
              <div class="promo__bottom">
              	@foreach($promoElements as $promoElement)
                <div
                  class="promo__item"
                  style="background-image: url({{ getImage('assets/images/frontend/promo/'.@$promoElement->data_values->bonus_image,'530x350') }})"
                >
                	@if($promoElement->data_values->heading)
                      <div class="promo__content_wrapper">
                        <div class="promo__content">
                        	@if($promoElement->data_values->heading)
                          		<div class="promo__left_title">{{ $promoElement->data_values->heading }}</div>
                          	@endif
                          	@if($promoElement->data_values->sub_heading)
                              <div class="promo__left_subtitle">
                                {{ $promoElement->data_values->sub_heading }}
                              </div>
                            @endif
                        </div>
                        @if($promoElement->data_values->button_text)
                        	<a 
                        		@if($promoElement->data_values->button_link)
                        			href="{{ $promoElement->data_values->button_link }}"
                        		@endif	
                        		class="promo__btn main_btn_green">{{ $promoElement->data_values->button_text }}</a>
                      	 @endif
                      </div>
                	@endif
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </section>
        <!-- Promo Section END -->
