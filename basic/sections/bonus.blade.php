@php
	$bonusElements = \App\Models\Frontend::where('data_keys', 'bonus.element')->orderBy('id', 'ASC')->get();
@endphp
        <!-- Section Bonuses -->
        <section class="bonuses_zino">
          <div class="bonuses_zino__container">
            <div class="bonuses_zino__wrapper">
              <!-- Tabs Desctop -->
              <div class="bonuses_zino__tab bonuses_zino__tab__desctop" id="tab-block">
                <ul class="bonuses_zino__tab__menu tab-mnu">
                	@foreach($bonusElements as $bonusElement)
                		<li
                			@if($loop->first)
                				class="active"
                			@endif
                            >
                            {{ $bonusElement->data_values->name }}
                          </li>
                 	@endforeach
                </ul>
                <div class="bonuses_zino__tab__content tab-cont">
                	@foreach($bonusElements as $bonusElement)
                       <div class="bonuses_zino__tab__wrapper tab-pane">
                        <div class="bonuses_zino__tab__title">{{ $bonusElement->data_values->title }}</div>
                        <div class="bonuses_zino__tab__text">
                        	@php echo $bonusElement->data_values->description @endphp
                        </div>
                      </div>
                	@endforeach
                </div>
              </div>
              <!-- Tabs Desctop END -->
            </div>
           </div>
        </section>
        <!-- Section Bonuses END -->
