@php 
	if(isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
		$webp = 'webp';
	} else {
		$webp = 'jpg';
	}
	$games = \App\Models\Btbgame::where('active',1)->paginate(48);
	$groups = \App\Models\Btbprovider::where('active', 1)->get();
    $gameContent = getContent('game.content',true);
@endphp

          <!-- Section Slots -->
          <section class="dasboard_hero homepage_dash">
            <div class="dasboard__container">
              <div class="dasboard_hero_wrapper">
                <div class="dasboard__buttons">
                  <a href="/user/dashboard" class="dasboard__item active dasboard__bonuses">@lang('Extra Bonuses')</a>
                  <a href="/user/games/slots" class="dasboard__item dasboard__slots">@lang('Games')</a>
                  <a href="/user/games/live" class="dasboard__item dasboard__live">@lang('Live Casino')</a>
                  <a href="/user/games/lottery" class="dasboard__item dasboard__lottery">@lang('Lottery')</a>
                  
                  <div class="select_dashboard__search dasboard__wrapper">
                      <label>
                          <input class="game-search" type="search" name="search" placeholder="Game search" value="<?php echo (isset($_GET['search']) && $_GET['search'] !='')? $_GET['search']: '';?>" onchange="$('#currentsearch').val($(this).val()); $('#currentpage').val(1); searchprovider();">
                      </label>
                  
                      <select class="profile_games_select" style="display: none;" name="provider" onchange="$('#currentprovider').val($(this).val()); $('#currentpage').val(1); searchprovider();">
                        <option value="0">All Providers</option>
                          @forelse($groups as $group)
                          <option value="{{ $group->id }}" >{{ $group->title }}</option>
                        @empty
                        @endforelse
                      </select>      
                  </div>
                </div>
                
                
    
                <div class="select_dashboard">
                  <div class="select__header">
                    <span class="select__current">
                      <img class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_1.png"
                        alt="Extra Bonuses">
                      @lang('Extra Bonuses') </span>
                    <div class="select__icon">
                      <img src="/assets/images/profile/arrow_right.png" alt="">
                    </div>
                  </div>
                  <div class="select__body">
                    <ul class="select__wrapp">
                      <a href="/user/dashboard" class="main-tabs__item active" data-tab="1" data-choice="choosen">
                        <img class="main-tabs__item-image" src="{{ getImage('assets/images/profile/dasboard_icon_1.png') }}" alt="Start">
                        @lang('Extra Bonuses')
                      </a>
                      <a href="/user/games/slots" class="main-tabs__item" data-tab="2" data-choice="choosen">
                        <img class="main-tabs__item-image" src="{{ getImage('assets/images/profile/dasboard_icon_2.png') }}" alt="Games">
                        @lang('Games')
                      </a>
                      <a href="/user/games/live" class="main-tabs__item " data-tab="3" data-choice="choosen">
                        <img class="main-tabs__item-image" src="{{ getImage('assets/images/profile/dasboard_icon_3.png') }}"
                          alt="Live Casino">
                        @lang('Live Casino')
                      </a>
                      <a href="/user/games/lottery" class="main-tabs__item " data-tab="4" data-choice="choosen">
                        <img class="main-tabs__item-image" src="{{ getImage('assets/images/profile/dasboard_icon_4.png') }}"
                          alt="Lottery">
                          @lang('Lottery')
                      </a>
                    </ul>
                  </div>
                </div>
                
              </div>
    
            </div>
          </section>




      <!-- Section Slots -->
      <section class="slots">
        <div class="slots__container">
          <div class="slots_wrapper">
            @if(Auth::check() && Auth::user()->username != 'dadaba')      
            	<div class="game-group slots_items grid_items">
            		@forelse($games as $keygame =>  $game)
            		<div class="<?php if($keygame > 5) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s" >
                       <div class="game-card slots_item grid_item">
                           <div class="slot_item_image image_slot">
                               <img   data-original="/{{imagePath()['game']['path']}}/<?php echo str_replace('jpg', $webp, $game['image'])?>" alt="{{  $game->title }}" style="width: 100%;">
                           </div>
                               @if(Auth::user()->ev)
                                   <a onclick="
                                   jQuery('#geme-iframe-modal').attr('src', jQuery(this).data('gameurl'));
                                   $('#exampleModalLabel').text('{{ $game['title'] }}');
                                   if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                                       $('.mobile-exit').delay(5000).fadeIn();;
                                       if ( window.matchMedia('(orientation: portrait)').matches ) {
                                           $('.mobile-landscape').show().delay(5000).fadeOut();
                                           $('#fullscreen .requestfullscreen').hide();
                                           $('#fullscreen .exitfullscreen').hide();
                                           $('#fullscreen').fullscreen();
                                        }
                                        if ( window.matchMedia('(orientation: landscape)').matches ) {
                                            $('.mobile-landscape').hide();
                                            $('#fullscreen .requestfullscreen').hide();
                                            $('#fullscreen .exitfullscreen').hide();
                                            $('#fullscreen').fullscreen();
                                         }
                                   } else {
                                       $('.mobile-landscape').hide();
                                       jQuery('#geme-iframe-modal').css('height', $(window).height()-90);
                                       $('#exampleModalLabel').text('{{ $game->title }}');
                                   } " data-gameurl="https://int.apiforb2b.com/games/{{ $game->link }}?operator_id={{ env('SLOTS_OPERATOR_ID') }}&user_id={{ auth()->user()->id }}&auth_token={{ auth()->user()->mobile }}&currency=USD&lang=en" class="slots_item_btn btn_slots" data-toggle="modal" data-target="#exampleModal">@lang('Play Now')</a>
                               @else
                                   <a href="{{ route('user.authorization') }}" class="slots_item_btn btn_slots">@lang('Play Now')</a>
                               @endif
                       </div>
                   </div>
               @empty
                   @lang('No Data Found')
               @endforelse
               		
                </div>
                <div class="slots_btn_more main_btn_full" data-wow-duration="0.5s" data-wow-delay="0.3s" onclick="slotspage()">
                	@lang('MORE GAMES')
                </div>
            @else
                <div class="game-group slots_items grid_items">
                        @forelse($games as $keygame =>  $game)
                             <div class="<?php if($keygame > 3) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s" >
                                <div class="game-card slots_item grid_item">
                                    <div class="slot_item_image image_slot">
                                        <img   data-original="/{{imagePath()['game']['path']}}/<?php echo str_replace('jpg', $webp, $game['image'])?>" alt="{{  $game->title }}" style="width: 100%;">
                                    </div>
                                    <a href="/user/dashboard" class="slots_item_btn btn_slots">@lang('Play Now')</a>
                                </div>
                                <!-- game-card end -->
                            </div>
                        @empty
                            @lang('No Data Found')
                        @endforelse
                        
                    </div>
                    <div class="slots_btn_more main_btn_full" data-wow-duration="0.5s" data-wow-delay="0.3s" onclick="slotspage()">
                    	@lang('MORE GAMES')
                   	</div>
            @endif
            </div>
      	</div>
      			<div class="modal fade game__popup" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document" style="width: 99%; max-width: 95%; margin-top: 0; margin-bottom: 0;">
                        <div class="modal-content section--bg">
                            <div class="modal-header">
                                <h6 class="modal-title method-name" id="exampleModalLabel">@lang('Payment By Okipays')</h6>
                                <a href="javascript:void(0)" class="close button-for-reload-balance" data-dismiss="modal" aria-label="Close" onclick="jQuery('#geme-iframe-modal').attr('src','');">
                                    <span aria-hidden="true">×</span>
                                </a>
                            </div>
                            <div id="fullscreen">
                                <a href="javascript:void(0)" class="mobile-exit close button-for-reload-balance" data-dismiss="modal" aria-label="Close" onclick="jQuery('#geme-iframe-modal').attr('src','');  $.fullscreen.exit(); jQuery('#exampleModal').close();" style="display: none;"></a>
                                <div class="mobile-landscape" style="display: none;">@lang('Please, use Landscape!')</div>
                                <iframe style="width: 100%;" src="" id="geme-iframe-modal">
                                </iframe>
                                <div style="text-align: right;"><a href="#" class="requestfullscreen" style="color: white;">Click to open it in fullscreen</a><a href="#" class="exitfullscreen" style="display: none; color: white; margin-right: 20px;">Click to exit fullscreen</a></div>
                            </div>
                        </div>
                    </div>
                </div>                
      	<input type="hidden" value="{{ $games->lastPage() }}" id="lastpage" />
        <input type="hidden" value="2" id="currentpage" />
        <input type="hidden" value="0" id="currentprovider" />
        <input type="hidden" value="" id="currentsearch" />
      </section>
      <!-- Section Slots END -->
      
        @push('script')
        	<script type="text/javascript">
            function searchprovider() {
          		$url = '/getbongosearchprovider?page='+$('#currentpage').val();
    			if($('#currentprovider').val() > 0) {
    				$url += '&provider='+ $('#currentprovider').val();
    			}
    			if($('#currentsearch').val() != '') {
    				$url += '&search='+ $('#currentsearch').val();
    			}
    			$.get( $url+'&lastpage=1', function( data ) {
    		        $('#lastpage').val(data);
    			});
      			$.get( $url, function( data ) {
    		        $('.slots_wrapper').html(data);
    			});
          	}
            function slotspage() {
				$url = '/getbongoslotspage?page='+$('#currentpage').val();
				if($('#currentprovider').val() > 0) {
					$url += '&provider='+ $('#currentprovider').val();
				}
				if($('#currentsearch').val() != '') {
					$url += '&search='+ $('#currentsearch').val();
				}
          		
      			$.get( $url, function( data ) {
    		        $('.slots_items').append(data);
    		        $nextpage = parseInt($('#currentpage').val())+1;
    		        if($nextpage > $('#lastpage').val()) {
    		        	$('.slots_btn_more').hide();
    		        } else {
    		        	$('#currentpage').val($nextpage);
    		        }
    			});
            }
          	</script>
        @endpush
	   

@if(0)
      <!-- Section Latest -->
      {{-- <section class="latest">
        <div class="latest__container">
          <div class="latest__wrapper">
            <div class="latest__top">
              <div class="latest_title title_h2">
                @lang('Latest bet & Race')
              </div>
              <div class="latest__btns">
                <button class="latest_btn main_btn active">
                  @lang('Latest bets')
                </button>
                <button class="latest_btn main_btn">
                  @lang('High rollers')
                </button>

                <button class="latest_btn main_btn">
                  @lang('Wager contest')
                </button>
              </div>
            </div>
            <div class="latest_table_wrapper latest_table_desctop">
              <div class="latest_table_grid latest_table_grid_heading">
                <div class="latest_table_item latest_table_headind">@lang('GAME')</div>
                <div class="latest_table_item latest_table_headind">@lang('Player')</div>
                <div class="latest_table_item latest_table_headind">@lang('Bet Amount')</div>
                <div class="latest_table_item latest_table_headind">@lang('Multiplier')</div>
                <div class="latest_table_item latest_table_headind">@lang('Profit Amount')</div>
              </div>
              <div class="latest_table_grid latest_table_grid_content">
                <div class="latest_table_item latest_table_lvl">@lang('Live - Sweet Bonanza CandyL.')</div>
                <div class="latest_table_item latest_table_status"><img src="{{ asset('assets/images/frontend/homepage/latest_image/about_table_item_1.png') }}"
                    alt=""><span>@lang('Cherry')</span></div>
                <div class="latest_table_item latest_table_points">47999.1936</div>
                <div class="latest_table_item latest_table_bonus">0.41 x</div>
                <div class="latest_table_item latest_table_cashback">47999.1936</div>
              </div>
              <div class="latest_table_grid latest_table_grid_content">
                <div class="latest_table_item latest_table_lvl">@lang('Keno')</div>
                <div class="latest_table_item latest_table_status"><img src="{{ asset('assets/images/frontend/homepage/latest_image/about_table_item_2.png') }}"
                    alt=""><span>@lang('Raspberry')</span></div>
                <div class="latest_table_item latest_table_points">1.60001600</div>
                <div class="latest_table_item latest_table_bonus">2.51 x</div>
                <div class="latest_table_item latest_table_cashback">1.60001600</div>
              </div>
              <div class="latest_table_grid latest_table_grid_content">
                <div class="latest_table_item latest_table_lvl">Hash Dice</div>
                <div class="latest_table_item latest_table_status"><img src="{{ asset('assets/images/frontend/homepage/latest_image/about_table_item_3.png') }}"
                    alt=""><span>@lang('Apple')</span></div>
                <div class="latest_table_item latest_table_points">1.97500000</div>
                <div class="latest_table_item latest_table_bonus">0.21 x</div>
                <div class="latest_table_item latest_table_cashback">1.97500000</div>
              </div>
              <div class="latest_table_grid latest_table_grid_content">
                <div class="latest_table_item latest_table_lvl">@lang('Egyptian')</div>
                <div class="latest_table_item latest_table_status"><img src="{{ asset('assets/images/frontend/homepage/latest_image/about_table_item_4.png') }}"
                    alt=""><span>@lang('Kiwi')</span></div>
                <div class="latest_table_item latest_table_points">0.00172668</div>
                <div class="latest_table_item latest_table_bonus">0.89 x</div>
                <div class="latest_table_item latest_table_cashback">0.00172668</div>
              </div>
              <div class="latest_table_grid latest_table_grid_content">
                <div class="latest_table_item latest_table_lvl">@lang('House of Fun')</div>
                <div class="latest_table_item latest_table_status item_hidden"><span>@lang('HIDDEN')</span></div>
                <div class="latest_table_item latest_table_points">47999.1936</div>
                <div class="latest_table_item latest_table_bonus">0.51 x</div>
                <div class="latest_table_item latest_table_cashback">47999.1936</div>
              </div>
              <div class="latest_table_grid latest_table_grid_content">
                <div class="latest_table_item latest_table_lvl">@lang('CoinFlip')</div>
                <div class="latest_table_item latest_table_status"><img src="{{ asset('assets/images/frontend/homepage/latest_image/about_table_item_6.png') }}"
                    alt=""><span>@lang('Pear')</span></div>
                <div class="latest_table_item latest_table_points">1.60001600</div>
                <div class="latest_table_item latest_table_bonus">3.55 x</div>
                <div class="latest_table_item latest_table_cashback">1.60001600</div>
              </div>
              <div class="latest_table_grid latest_table_grid_content">
                <div class="latest_table_item latest_table_lvl">@lang('Gems Bonanza')</div>
                <div class="latest_table_item latest_table_status"><img src="{{ asset('assets/images/frontend/homepage/latest_image/about_table_item_7.png') }}"
                    alt=""><span>@lang('Peach')</span></div>
                <div class="latest_table_item latest_table_points">1.97500000</div>
                <div class="latest_table_item latest_table_bonus">0.39 x</div>
                <div class="latest_table_item latest_table_cashback">1.97500000</div>
              </div>
              <div class="latest_table_grid latest_table_grid_content">
                <div class="latest_table_item latest_table_lvl">@lang('No Commission')</div>
                <div class="latest_table_item latest_table_status"><img src="{{ asset('assets/images/frontend/homepage/latest_image/about_table_item_8.png') }}"
                    alt=""><span>@lang('Pomegranate')</span>
                </div>
                <div class="latest_table_item latest_table_points">0.00172668</div>
                <div class="latest_table_item latest_table_bonus">0.22 x</div>
                <div class="latest_table_item latest_table_cashback">0.00172668</div>
              </div>
              <div class="latest_table_grid latest_table_grid_content">
                <div class="latest_table_item latest_table_lvl">@lang('Queen of Gold')</div>
                <div class="latest_table_item latest_table_status"><img src="{{ asset('assets/images/frontend/homepage/latest_image/about_table_item_9.png') }}"
                    alt=""><span>@lang('Watermelon')</span>
                </div>
                <div class="latest_table_item latest_table_points">47999.1936</div>
                <div class="latest_table_item latest_table_bonus">1.11 x</div>
                <div class="latest_table_item latest_table_cashback">47999.1936</div>
              </div>
              <div class="latest_table_grid latest_table_grid_content">
                <div class="latest_table_item latest_table_lvl">@lang('No Commission Speed Bacca.')</div>
                <div class="latest_table_item latest_table_status"><img
                    src="{{ asset('assets/images/frontend/homepage/latest_image/about_table_item_10.png') }}" alt=""><span>@lang('Vip Lemon')</span>
                </div>
                <div class="latest_table_item latest_table_points">1.60001600</div>
                <div class="latest_table_item latest_table_bonus">0.24 x</div>
                <div class="latest_table_item latest_table_cashback">1.60001600</div>
              </div>
            </div>
            <div class="latest_table_mobile">
              <div class="latest_table_mobile__row">
                  <div class="latest_table_mobile_col">
                    <div class="latest_table_item ">@lang('GAME')</div>
                      <div class="latest_table_item latest_table_lvl">@lang('Live - Sweet Bonanza CandyL.')
                      </div>
                  </div>
                  <div class="latest_table_mobile_col">
                    <div class="latest_table_item ">@lang('Player')</div>
                      <div class="latest_table_item latest_table_status"><img
                              src="{{ asset('assets/images/frontend/homepage/latest_image/about_table_item_1.png') }}" alt=""><span>@lang('Cherry')</span>
                      </div>
                  </div>
                  <div class="latest_table_mobile_col">
                    <div class="latest_table_item ">@lang('Bet Amount')</div>
                      <div class="latest_table_item latest_table_points">47999.1936
                      </div>
                  </div>
                  <div class="latest_table_mobile_col">
                    <div class="latest_table_item ">@lang('Multiplier')</div>
                      <div class="latest_table_item latest_table_bonus">0.41 x
                      </div>
                  </div>
                  <div class="latest_table_mobile_col">
                    <div class="latest_table_item ">@lang('Profit Amount')</div>
                      <div class="latest_table_item latest_table_cashback">47999.1936
                      </div>
                  </div>
              </div>
              <div class="latest_table_mobile__row">
                <div class="latest_table_mobile_col">
                  <div class="latest_table_item ">@lang('GAME')</div>
                    <div class="latest_table_item latest_table_lvl">@lang('Live - Sweet Bonanza CandyL.')
                    </div>
                </div>
                <div class="latest_table_mobile_col">
                  <div class="latest_table_item ">@lang('Player')</div>
                    <div class="latest_table_item latest_table_status"><img
                            src="{{ asset('assets/images/frontend/homepage/latest_image/about_table_item_2.png') }}" alt=""><span>Cherry</span>
                    </div>
                </div>
                <div class="latest_table_mobile_col">
                  <div class="latest_table_item ">@lang('Bet Amount')</div>
                    <div class="latest_table_item latest_table_points">47999.1936
                    </div>
                </div>
                <div class="latest_table_mobile_col">
                  <div class="latest_table_item ">@lang('Multiplier')</div>
                    <div class="latest_table_item latest_table_bonus">0.41 x
                    </div>
                </div>
                <div class="latest_table_mobile_col">
                  <div class="latest_table_item ">@lang('Profit Amount')</div>
                    <div class="latest_table_item latest_table_cashback">47999.1936
                    </div>
                </div>
            </div>
            <div class="latest_table_mobile__row">
              <div class="latest_table_mobile_col">
                <div class="latest_table_item ">@lang('GAME')</div>
                  <div class="latest_table_item latest_table_lvl">@lang('Live - Sweet Bonanza CandyL.')
                  </div>
              </div>
              <div class="latest_table_mobile_col">
                <div class="latest_table_item ">@lang('Player')</div>
                  <div class="latest_table_item latest_table_status"><img
                          src="{{ asset('assets/images/frontend/homepage/latest_image/about_table_item_3.png') }}" alt=""><span>@lang('Cherry')</span>
                  </div>
              </div>
              <div class="latest_table_mobile_col">
                <div class="latest_table_item ">@lang('Bet Amount')</div>
                  <div class="latest_table_item latest_table_points">47999.1936
                  </div>
              </div>
              <div class="latest_table_mobile_col">
                <div class="latest_table_item ">@lang('Multiplier')</div>
                  <div class="latest_table_item latest_table_bonus">0.41 x
                  </div>
              </div>
              <div class="latest_table_mobile_col">
                <div class="latest_table_item ">@lang('Profit Amount')</div>
                  <div class="latest_table_item latest_table_cashback">47999.1936
                  </div>
              </div>
          </div>

          </div>
          </div>
        </div>
      </section> --}}
      <!-- Section Latest END -->
@endif
