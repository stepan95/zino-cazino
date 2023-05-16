@extends($activeTemplate.'layouts.master')
@section('content')
<?php  if(Auth::user()->username == 'dadaba') { 
    header('Location: '.route('user.games', 'slots'));
}?>
@php 
	if(isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
		$webp = 'webp';
	} else {
		$webp = 'jpg';
	}
@endphp

<div class="page-wrapper" id="main-scrollbar" data-scrollbar="">
<section class="balance_profile">
        <div class="balance_profile_bottom">
            <div class="balance_container">
            <div class="balance_menu balance_menu_mobile">
                <div class="balance_menu_item">
                        <a href="{{ route('user.home') }}" class="balance_menu_item_title">
                            @lang('Profile')
                        </a>
                    </div>
                    <div class="balance_menu_item">
                        <p class="balance_menu_item_title">
                            deposit
                        </p>
                        <ul class="balance_menu_item_list">
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.deposit') }}"> Deposit Money</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.deposit.history') }}"> History</a>
                            </li>
                        </ul>
                    </div>
                    <div class="balance_menu_item">
                        <p class="balance_menu_item_title">
                            Withdraw
                        </p>
                        <ul class="balance_menu_item_list">
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.withdraw') }}"> Withdraw</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.withdraw.history') }}">Withdraw History</a>
                            </li>
                        </ul>
                    </div>
                    <div class="balance_menu_item">
                        <a href="{{ route('user.referrals') }}" class="balance_menu_item_title">
                            @lang('Referrals')
                        </a>
                    </div>
                    <div class="balance_menu_item">
                        <p class="balance_menu_item_title">
                             Reports
                        </p>
                        <ul class="balance_menu_item_list">
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.gameLog') }}"> Game Log</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.commissionLog') }}"> Commission Log</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.transactions') }}"> Transactions</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.notifications') }}"> Notifications</a>
                            </li>
                        </ul>
                    </div>
                    <div class="balance_menu_item">
                        <p class="balance_menu_item_title">
                            Support
                        </p>
                        <ul class="balance_menu_item_list">
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('ticket.open') }}"> Create New</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('ticket') }}"> My Tickets</a>
                            </li>
                        </ul>
                    </div>
                    <div class="balance_menu_item">
                        <p class="balance_menu_item_title">
                            Account
                        </p>
                        <ul class="balance_menu_item_list">
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.change.password') }}"> Change Password</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.profile.setting') }}"> Profile Setting</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.twofactor') }}"> 2FA Security</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.logout') }}"> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="profile_games">
        <div class="profile_games_container">
            <div class="profile_games_top">
                <div class="profile_games_top_wrapper">
                	<?php if(isset($_ENV['SGLGAMES']) && $_ENV['SGLGAMES'] == 1) { ?>
                    <div class="no-mobile">
                           <a  class="more-games-button active" href="{{ route('user.home') }}">Extra Bonuses</a>
                    	   <a  class="more-games-button"  href="{{ route('user.games', 'slots') }}">Games</a>
         			   	   <a  class="more-games-button"  href="{{ route('user.games', 'live') }}">Live Casino</a>
         			   	   <a  class="more-games-button"   href="{{ route('user.games', 'lottery') }}">Lottery</a>
                    </div>
                    <div class="mobile">
                       {{-- <select class="type_games_select" onchange="$(location).attr('href',$(this).val());">
                       		<option value="{{ route('user.home') }}" selected="selected">b2b slots</option>
                    	    <option value="{{ route('user.games', 'slots') }}">Slots</option>
               				<option value="{{ route('user.games', 'live') }}">Live Casino</option>
               				<option value="{{ route('user.games', 'lottery') }}">Lottery</option>
                	   </select> --}}

                       <div class="select_dashboard">
                        <div class="select__header">
                          <span class="select__current">
                            <img  loading="lazy"class="main-tabs__item-image"
                              src="/assets/images/profile/dasboard_icon_1.png"
                              alt="Extra Bonuses">
                              Extra Bonuses</span>
                          <div class="select__icon">
                            <img  loading="lazy"src="/assets/images/profile/arrow_right.png" alt="">
                          </div>
                        </div>
                        <div class="select__body">
                          <ul class="select__wrapp">
                            <a href="/user/dashboard" class="main-tabs__item active" data-tab="1" data-choice="choosen">
                              <img class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_1.png" alt="Start">
                              Extra Bonuses
                            </a>
                            <a href="/user/games/slots" class="main-tabs__item" data-tab="2" data-choice="choosen">
                              <img class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_2.png" alt="GAMES">
                              GAMES
                            </a>
                            <a href="/user/games/live" class="main-tabs__item" data-tab="3" data-choice="choosen">
                              <img class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_3.png"
                                alt="Live Casino">
                              Live Casino
                            </a>
                            <a href="/user/games/lottery" class="main-tabs__item" data-tab="4" data-choice="choosen">
                              <img class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_4.png"
                                alt="Lottery">
                                Lottery
                            </a>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <div class="search-f">
                        <label>
                          <input class="game-search" type="search" name="search" placeholder="Game search" value="<?php echo (isset($_GET['search']) && $_GET['search'] !='')? $_GET['search']: '';?>" onchange="$('#currentsearch').val($(this).val()); $('#currentpage').val(1); searchprovider();">
                      </label>
                    </div>
                    
                    
                    <select class="profile_games_select" style="display: none; float: right;" name="provider" onchange="$('#currentprovider').val($(this).val()); $('#currentpage').val(1); searchprovider();">
                        <option value="0">All Providers</option>
                          @forelse($groups as $group)
                          <option value="{{ $group->id }}" >{{ $group->title }}</option>
                        @empty
                        @endforelse
                      </select>  
                </div>
                <p class="profile_games_description">
                    In the gaming hall, you have access to slot machines, with the highest return percentage and incredibly gambling gameplay!
                </p>
            </div>
            <div class="title-behind no-mobile">Extra Bonuses</div>
            <div class="profile_games_grid" style="display: block !important">
            	@if(Auth::check() && Auth::user()->username != 'dadaba')
                	<div class="row justify-content-center mb-none-30 slots_wrapper">
                        
                    		<div class="game-group row justify-content-center mb-none-30">
                        		@forelse($games as $keygame =>  $game)
                                     <div class="col-xl-2 col-lg-4 col-sm-6 mb-30 <?php if($keygame > 5) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s" >
                                        <div class="game-card">
                                       
                                            <div class="game-card__thumb">
                                                <img src="/{{imagePath()['game']['path']}}/<?php echo str_replace('jpg', $webp, $game['image'])?>" alt="image" style="width: 100%;">
                                            </div>
                                            <div class="game-card__content">
                                            	<h4 class="game-name">{{ $game->title }}</h4>
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
                                                    } " data-gameurl="https://int.apiforb2b.com/games/{{ $game->link }}?operator_id={{ env('SLOTS_OPERATOR_ID') }}&user_id={{ auth()->user()->id }}&auth_token={{ auth()->user()->mobile }}&currency=USD&lang=en" class="cmn-btn d-block text-center btn-sm mt-3 btn--capsule" data-toggle="modal" data-target="#exampleModal" style="color: #363636; cursor: pointer;">@lang('Play Now')</a>
                                                @else
                                                    <a href="{{ route('user.authorization') }}" class="cmn-btn d-block text-center btn-sm mt-3 btn--capsule" style="color: #363636; cursor: pointer;">@lang('Play Now')</a>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- game-card end -->
                                    </div>
                                @empty
                                    @lang('No Data Found!')
                                @endforelse
                                
                        	</div>
                        	<div class="col-xl-3 col-lg-4 col-sm-6 mb-30 wow fadeInUp more-games-button" data-wow-duration="0.5s" data-wow-delay="0.3s" onclick="slotspage()">
                            	MORE GAMES
                       		</div>
                    </div>
                @else
                <div class="row justify-content-center mb-none-30 slots_wrapper">
                   
                		<div class=" game-group row justify-content-center mb-none-30 ">
                    		@forelse($games as $keygame =>  $game)
                                 <div class="col-xl-2 col-lg-4 col-sm-6 mb-30 <?php if($keygame > 3) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s" >
                                    <div class="game-card">
                                    
                                        <div class="game-card__thumb">
                                            <img src="/{{imagePath()['game']['path']}}/<?php echo str_replace('jpg', $webp, $game['image'])?>" alt="image" style="width: 100%;">
                                        </div>
                                        <div class="game-card__content">
                                        	<h4 class="game-name">{{ $game->title }}</h4>
                                            <a href="/user/dashboard" class="cmn-btn d-block text-center btn-sm mt-3 btn--capsule">@lang('Play Now')</a>
                                        </div>
                                    </div>
                                    <!-- game-card end -->
                                </div>
                            @empty
                                @lang('No Data Found!')
                            @endforelse
                            
                    	</div>
                   		<div class="col-xl-3 col-lg-4 col-sm-6 mb-30 wow fadeInUp more-games-button" data-wow-duration="0.5s" data-wow-delay="0.3s" onclick="slotspage()">
                        	MORE GAMES
                   		</div>
                </div>
                @endif
            </div>

        </div>
    </section>
    <input type="hidden" value="{{ $games->lastPage() }}" id="lastpage" />
    <input type="hidden" value="2" id="currentpage" />
    <input type="hidden" value="0" id="currentprovider" />
    <input type="hidden" value="" id="currentsearch" />

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 99%; max-width: 95%; margin-top: 0; margin-bottom: 0;">
        <div class="modal-content section--bg" style="background-color: #000;">
            <div class="modal-header">
                <h6 class="modal-title method-name" id="exampleModalLabel"></h6>
                <a href="javascript:void(0)" class="close button-for-reload-balance" data-dismiss="modal" aria-label="Close" onclick="jQuery('#geme-iframe-modal').attr('src','');">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
            <div id="fullscreen">
            	<a href="javascript:void(0)" class="mobile-exit close button-for-reload-balance" data-dismiss="modal" aria-label="Close" onclick="jQuery('#geme-iframe-modal').attr('src','');  $.fullscreen.exit(); jQuery('#exampleModal').close();" style="display: none;"></a>
            	<div class="mobile-landscape" style="display: none;">Please, use Landscape!</div>
                <iframe style="width: 100%;" src="" id="geme-iframe-modal" allow="fullscreen">
                </iframe>
                <div style="text-align: right;"><a href="#" class="requestfullscreen" style="color: white;">Click to open it in fullscreen</a><a href="#" class="exitfullscreen" style="display: none; color: white; margin-right: 20px;">Click to exit fullscreen</a></div>
            </div>

        </div>
    </div>
</div>

@endsection
@push('script')
<script type="text/javascript">
/*
    (function dynamicStyle() {
      var customAttr = $('*[data-css]');
      var allStyle = customAttr.attr('data-css');
      var styles = allStyle.split(',');
      for (var i = 0; i < styles.length; i++) {
          var singleStyle = styles[i].split(':');
          customAttr.css(singleStyle[0], function () {
            var styleCss = ($(this).data('css_val'));
            return styleCss;
          });
      }
    })();
*/
    (function ($) {
    	// open in fullscreen
    	$('#fullscreen .requestfullscreen').click(function() {
    		$('#fullscreen').fullscreen();
    		return false;
    	});
    	// exit fullscreen
    	$('#fullscreen .exitfullscreen').click(function() {
    		$.fullscreen.exit();
    		return false;
    	});
    	// document's event
    	$(document).bind('fscreenchange', function(e, state, elem) {
    		// if we currently in fullscreen mode
    		if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        		if ($.fullscreen.isFullScreen()) {
        			$('#fullscreen .requestfullscreen').hide();
        			$('#fullscreen .exitfullscreen').show();
        			$('#fullscreen iframe').addClass('importantRule');
        		} else {
        			$('#fullscreen .requestfullscreen').show();
        			$('#fullscreen .exitfullscreen').hide();
        			$('#fullscreen iframe').removeClass('importantRule');
        		}
    		} else {
    			$('#fullscreen iframe').addClass('importantRule2');
    			$('#fullscreen iframe').addClass('importantRule2');
    		}
    	});
		$('.button-for-reload-balance').click(function() {
			$.get( '/getBalance', function( data ) {
		        $('.jsBalance').text(data.balance);
		        $('.jsMoney').text(data.money);
		        $('.jsBonus').text(data.bonus);
		        $('.jsWagering').text(data.wagering);
		        $('.jsWithdraw').text(data.wwithdraw);
		        $('.jsTotalDeposit').text(data.deposit);
		        $('.jsTotalWithdraw').text(data.withdraw);
		        $('.jsTotalBonus').text(data.totalbonus);
			});

		})

		
    })(jQuery);

    function searchprovider() {
  		$url = '/getzinosearchprovider?page='+$('#currentpage').val();
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
		$url = '/getzinoslotspage?page='+$('#currentpage').val();
		if($('#currentprovider').val() > 0) {
			$url += '&provider='+ $('#currentprovider').val();
		}
		if($('#currentsearch').val() != '') {
			$url += '&search='+ $('#currentsearch').val();
		}
  		
		$.get( $url, function( data ) {
	        $('.game-group').append(data);
	        $nextpage = parseInt($('#currentpage').val())+1;
	        if($nextpage > $('#lastpage').val()) {
	        	$('.more-games-button').hide();
	        } else {
	        	$('#currentpage').val($nextpage);
	        }
		});
    }
</script>
<style>
.game-group {
	width: 100%
}
.more-games-button {
	background-color: transparent;
	padding: 10px 20px;
    cursor: pointer;
	display: block;
	text-align: center;
	border-radius: 5px;
	color: #ffffff;
	border: 1px solid #535353;
	text-transform: uppercase;
	display:inline-block;
	width: auto;
	margin: 0 5px 5px 0;
}
.more-games-button:hover {
	color: #ee9f00;
}
.more-games-button.active {
	background-color: #ee9f00;
	padding: 10px 20px;
    cursor: pointer;
	text-align: center;
	border-radius: 5px;
	color: white;
}
.choices__list--dropdown .choices__item--selectable, .choices__list[aria-expanded] .choices__item--selectable {
	padding-right: 0 !important;
}
@media (min-width: 800px) {
    .mobile {
        display: none !important;
    }
}
.title-behind {
	 height: 1px;
    font-size: 80px;
    text-transform: uppercase;
    opacity: 0.2;
    line-height: 125px;
}
@media screen and (max-width: 800px) {
    .profile_games_grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .search-f {
        float: left; 
    	max-width: 49% !important;  
    }
    .choices {
        float: right; 
    	max-width: 49% !important;  
    	margin-top: 15px;
        margin-bottom: 15px;
    }
    .mobile,
    .mobile .choices {
    	float: none;
    	width: 100%;
    	max-width: 100% !important;  
    } 
    .search-f label,
    .search-f input {
    	max-width: 100%;
    	min-width: 100%;
    }
    .profile_games_top_wrapper {
        display: inline-block !important;  
    }
    .mobile div {
        text-transform: uppercase;
    }    
}

</style>

<script>
	function searchJS($title) {
    	jQuery('.groups').hide()
    	$('.groups[data-name*="'+$title+'"]').show();
	}
</script>
@if($prov > 0)
<script type="text/javascript">
(function ($) {
	jQuery('.groups').hide(); jQuery('.group{{ $prov }}').show();
})(jQuery);
</script>
@endif
@endpush
