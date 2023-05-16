@extends($activeTemplate.'layouts.master')
@section('content')

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
                <div class="profile_games_top_wrapper" style="position: relative; z-index: 2">
                    <div  class="no-mobile">
                       <?php  if(Auth::user()->username != 'dadaba') { ?><a  class="more-games-button" href="{{ route('user.home') }}">Extra Bonuses</a><?php }?>
                       <a  class="more-games-button <?php echo ('slots' == $activecat)? 'active': '' ?>" href="{{ route('user.games', 'slots') }}">Games</a>
         			   <a  class="more-games-button <?php echo ('live' == $activecat)? 'active': '' ?>" href="{{ route('user.games', 'live') }}">Live Casino</a>
         			   <a  class="more-games-button <?php echo ('lottery' == $activecat)? 'active': '' ?>" href="{{ route('user.games', 'lottery') }}">Lottery</a>
                    </div>
                     <div class="mobile">
                       {{-- <select class="type_games_select" onchange="$(location).attr('href',$(this).val());">
                       		<option value="{{ route('user.home') }}" >b2b slots</option>
                    	   	<option value="{{ route('user.games', 'slots') }}" <?php // echo ('slots' == $activecat)? 'selected="selected"': '' ?>>Slots</option>
               				<option value="{{ route('user.games', 'live') }}" <?php  //echo ('live' == $activecat)? 'selected="selected"': '' ?>>Live Casino</option>
               				<option value="{{ route('user.games', 'lottery') }}" <?php  //echo ('lottery' == $activecat)? 'selected="selected"': '' ?>>Lottery</option>
                	   </select> --}}
                       <div class="select_dashboard">
                        <div class="select__header">
                            <?php  if(Auth::user()->username != 'dadaba') { ?>
                                <?php if($activecat == 'dashboard') { ?>
                                    <span class="select__current"><img  loading="lazy"class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_1.png" alt="Slots">Extra Bonuses</span>
                                   <?php } elseif($activecat == 'slots') { ?>   
                                       <span class="select__current"><img  loading="lazy"class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_2.png" alt="Games">GAMES</span>
                                   <?php } elseif($activecat == 'lottery') { ?>   
                                       <span class="select__current"><img  loading="lazy"class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_4.png" alt="Lottery">Lottery</span>
                                   <?php } else { ?>
                                       <span class="select__current"><img  loading="lazy"class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_3.png" alt="Extra Bonuses">Live Casino</span>
                                   <?php } ?>
                           <?php } ?>
                          <div class="select__icon">
                            <img  loading="lazy"src="/assets/images/profile/arrow_right.png" alt="">
                          </div>
                        </div>
                        <div class="select__body">
                            <ul class="select__wrapp">
                                 <a href="/user/dashboard" class="main-tabs__item" data-tab="1" data-choice="choosen">
                                  <img class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_1.png" alt="Start">
                                  Extra Bonuses
                                </a>
                                
                                <a href="/user/games/slots" class="main-tabs__item <?php echo ('slots' == $activecat)? 'active': '' ?>" data-tab="2" data-choice="choosen">
                                  <img class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_2.png" alt="Games">
                                  GAMES
                                </a>
                                <a href="/user/games/live" class="main-tabs__item <?php echo ('live' == $activecat)? 'active': '' ?>" data-tab="3" data-choice="choosen">
                                  <img class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_3.png"
                                    alt="Live Casino">
                                  Live Casino
                                </a>
                                <a href="/user/games/lottery" class="main-tabs__item <?php echo ('lottery' == $activecat)? 'active': '' ?>" data-tab="4" data-choice="choosen">
                                  <img class="main-tabs__item-image" src="/assets/images/profile/dasboard_icon_4.png"
                                    alt="Lottery">
                                    Lottery
                                </a>
                              </ul>
                        </div>
                      </div>
                    </div>
                    <div id="search-f"  class="search-f">
                        <label>
                             <input class="game-search" type="search" name="search" placeholder="Game search" value="<?php echo (isset($_GET['search']) && $_GET['search'] !='')? $_GET['search']: '';?>" onchange="$('#currentsearch').val($(this).val()); $('#currentpage').val(1); slgsearchprovider();">
                        </label>
                    </div>
                    <select class="profile_games_select" style="display: none;" name="provider" onchange="$('#currentprovider').val($(this).val()); $('#currentpage').val(1); slgsearchprovider();">
                        <option value="0">All Providers</option>
                         @forelse($providers as $provider)
                        <option value="{{ $provider->provider }}" <?php echo (isset($_GET['provider']) && $provider->provider == $_GET['provider'])? 'selected="selected"': '' ?>>
                            {{ $provider->provider }}</span>
                        </option>
                        @empty
                        @endforelse
                      </select>    
                    
                </div>
                <div class="dasboard_under_buttons" style="margin-top:  30px; margin-bottom: -60px; position: relative; z-index: 1">
                    	@foreach($types as $type) 
                    		<a style="color:  white; text-transform: uppercase; padding: 10px 20px; <?php if($currentundertype == $type->type) { ?>font-weight: bold;<?php } ?>" href="/user/games/{{ $activecat }}/{{ $type->type }}" <?php if($currentundertype == $type->type) { ?>class="active"<?php } ?>>{{ $type->type }}</a>
                    	@endforeach
                    </div>
                <p class="profile_games_description">
                    In the gaming hall, you have access to slot machines, with the highest return percentage and incredibly gambling gameplay!
                </p>
            </div>
            <div class="title-behind no-mobile">{{ $activecat }} {{ $currentundertype }}</div>
            <?php if(isset($_ENV['SGLGAMES']) && $_ENV['SGLGAMES'] == 1) { ?>
            <div class="slots_wrapper" style="position: relative; z-index: 2; text-align: center;">
                <div class="profile_games_grid" >
                	@forelse($games as $keygame => $game)
                    <div class="profile_games_grid_item <?php if($keygame > 5) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s">
                        			<div class="game-card">
                                   
                                        <div class="game-card__thumb  {{ $game->uuid  }}">
                                            <img src="{{ $game->image }}" alt="image" style="width: 100%;" loading="lazy">
                                        </div>
                                        <div class="game-card__content">
                                        	<h4 class="game-name">{{ $game->name }}</h4>
                                        	@if ($game->has_lobby)
                                        		<a onclick="
                                            	    $.get( '/user/getGameLobby/{{ $game->uuid }}', function( data ) {
                                            		   jQuery('#exampleModalLobby #fullscreen').html(data);
                                          			});
                                                    $('#exampleModalLobby #exampleModalLabel').text('{{ $game->name }}');" class="profile_games_grid_item_button" data-toggle="modal" data-target="#exampleModalLobby" style="cursor: pointer;">@lang('Play Now')</a>
                                        	@else
                                        		<a onclick="
                                        		    $.get( '/user/hasFreespins/{{ $game->uuid }}', function( data ) {
                                        		    	console.log(data);
                                            		    if(data > 0) {
                                            		    	$('.button_freespin_{{ $game->uuid }}').trigger('click');
                                            		    	$('#exampleModalFreespin #fullscreen .remain_freespins').html(data);
                                            		    } else {
                                            		    	$('.button_no_freespin_{{ $game->uuid }}').trigger('click');
                                            		    } 
                                          			});
                                                	
                                     			   " class="profile_games_grid_item_button" style="cursor: pointer;">@lang('Play Now')</a>
                                        	
                                        		
                                            		<a style="display: none" onclick="
                                                		
                                     	                $('#exampleModalFreespin #fullscreen .profile_games_grid_item_button_no_freespins').attr('data-uuid', '{{ $game->uuid }}');
                                      	                $('#exampleModalFreespin #fullscreen .profile_games_grid_item_button_with_freespins').attr('data-uuid', '{{ $game->uuid }}');
                                     	                $('#exampleModalFreespin #exampleModalLabel').text('<?php echo str_replace("'", '`', $game->name)?>');
                                     	                $('#exampleModal #exampleModalLabel').text('<?php echo str_replace("'", '`', $game->name)?>');" class="profile_games_grid_item_button button_freespin_{{ $game->uuid }}" data-toggle="modal" data-target="#exampleModalFreespin" style="cursor: pointer;"></a>
                                           	
                                               		<a style="display: none" onclick="
                                                	    $.get( '/user/getGameUrl/{{ $game->uuid }}', function( data ) {
                                                		   jQuery('#geme-iframe-modal').attr('src', data);
                                              			});
                                                        $('#exampleModal #exampleModalLabel').text('<?php echo str_replace("'", '`',  $game->name)?>');
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
                                                        } " class="profile_games_grid_item_button button_no_freespin_{{ $game->uuid }}" data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;"></a>
     
                                            @endif
                                        </div>
                                    </div>
                    </div>
                    @empty
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-center">@lang('No Games Found')</h5>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
    				@if($games->lastPage() > 1)
    				<div class="col-xl-3 col-lg-4 col-sm-6 mb-30 wow fadeInUp more-games-button more-games-button-bottom" data-wow-duration="0.5s" data-wow-delay="0.3s" onclick="slggamepage()">
                    	MORE GAMES
               		</div>
                   	@endif
            	</div>
           	<?php } ?>
        </div>
    </section>

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

<div class="modal fade" id="exampleModalLobby" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 99%; max-width: 500px; margin-top: 0; margin-bottom: 0;">
        <div class="modal-content section--bg" style="background-color: #000;">
            <div class="modal-header">
                <h6 class="modal-title method-name" id="exampleModalLabel"></h6>
                <a href="javascript:void(0)" class="close button-for-reload-balance" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
            <div id="fullscreen">
                
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalFreespin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 99%; max-width: 500px; margin-top: 0; margin-bottom: 0;">
        <div class="modal-content section--bg" style="background-color: #000;">
            <div class="modal-header">
                <h6 class="modal-title method-name" id="exampleModalLabel"></h6>
                <a href="javascript:void(0)" class="close button-for-reload-balance" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
            <div id="fullscreen">
                <p>You have <span class="remain_freespins"></span> freespins!</p>
                <a onclick="
                	     jQuery('#exampleModalFreespin .close').trigger('click');
                	     console.log('/user/setFreespins/'+$(this).attr('data-uuid'));
                		 $.get( '/user/setFreespins/'+$(this).attr('data-uuid'), function( data ) {
                		 		
                		 		console.log(data);
                		 
                    		   jQuery('#geme-iframe-modal').attr('src', data.url);
              			});
                      
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
                        } " class="profile_games_grid_item_button_with_freespins" data-uuid=""  data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;">@lang('START')</a>
                <a onclick="
             	        jQuery('#exampleModalFreespin .close').trigger('click');
                	    $.get( '/user/getGameUrl/'+$(this).data('uuid'), function( data ) {
                		   jQuery('#geme-iframe-modal').attr('src', data);
              			});
                        
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
                        } " class="profile_games_grid_item_button_no_freespins" data-uuid=""  data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;">@lang('Save for later')</a>
            </div>

        </div>
    </div>
</div>

<input type="hidden" value="{{ $games->lastPage() }}" id="lastpage" />
<input type="hidden" value="2" id="currentpage" />
<input type="hidden" value="0" id="currentprovider" />
<input type="hidden" value="" id="currentsearch" />
<input type="hidden" value="{{ $currentundertype }}" id="currenttype" />
<input type="hidden" value="{{ $currentparenttype }}" id="parenttype" />

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


    function slgsearchprovider() {
  		$url = '/getzinoslgsearchprovider?page='+$('#currentpage').val();
  		if($('#parenttype').val() != '') {
			$url += '&parenttype='+ $('#parenttype').val();
		}
		if($('#currentprovider').val() != '') {
			$url += '&provider='+ $('#currentprovider').val();
		}
		if($('#currentsearch').val() != '') {
			$url += '&search='+ $('#currentsearch').val();
		}
		if($('#currenttype').val() != '') {
			$url += '&type='+ $('#currenttype').val();
		}
		$.get( $url+'&lastpage=1', function( data ) {
	        $('#lastpage').val(data);
		});
		$.get( $url, function( data ) {
	        $('.slots_wrapper').html(data);
		});
  	}
    function slggamepage() {
		$url = '/getzinoslgslotspage?page='+$('#currentpage').val();
		if($('#parenttype').val() != '') {
			$url += '&parenttype='+ $('#parenttype').val();
		}
		if($('#currentprovider').val() != '') {
			$url += '&provider='+ $('#currentprovider').val();
		}
		if($('#currentsearch').val() != '') {
			$url += '&search='+ $('#currentsearch').val();
		}
		if($('#currenttype').val() != '') {
			$url += '&type='+ $('#currenttype').val();
		}
  		
		$.get( $url, function( data ) {
	        $('.profile_games_grid').append(data);
	        $nextpage = parseInt($('#currentpage').val())+1;
	        if($nextpage > $('#lastpage').val()) {
	        	$('.more-games-button-bottom').hide();
	        } else {
	        	$('#currentpage').val($nextpage);
	        }
		});
    }
</script>
<style>
#exampleModalFreespin #fullscreen {
	text-align: center;
}
#exampleModalFreespin #fullscreen p {
	padding: 20px 0 20px 0;
	text-align: center;
}
#exampleModalFreespin #fullscreen a {
	float: none;
	width: auto;
	margin: 0 auto 20px auto;
}
#exampleModalFreespin #fullscreen a.profile_games_grid_item_button_with_freespins {
	background-color: #e51421 !important;
    color: white !important;
    width: 100%;
    max-width: 100px;
    border-radius: 5px;
    padding: 5px 10px;
    display: inline-block;
    height: 31px;
    text-transform: uppercase;
    font-size: .875rem;
    line-height: 1.5;
}
#exampleModalFreespin #fullscreen a.profile_games_grid_item_button_no_freespins {
	width: 100%;
	display: block;
	text-align: center;
	text-decoration: underline;
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
.title-behind {
	 height: 1px;
    font-size: 80px;
    text-transform: uppercase;
    opacity: 0.2;
    line-height: 125px;
}
@media (min-width: 800px) {
    .mobile {
        display: none !important;
    }
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
@endpush
