@extends($activeTemplate.'layouts.master')
@section('content')

<div class="modal fade" id="withdrawError" tabindex="-1" role="dialog" aria-labelledby="withdrawErrorLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static"> 
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    @lang('Please Verify Your Email to Get Access')
                </h5>
            </div>
            <div style="color: #ffffff; border: none; padding-top: 7px;" class="modal-body">
                <form action="{{route('user.verify.email')}}" method="POST" class="login-form">
                            @csrf

                            <p style="font-size: 14px;">@lang('Please check your Email') - <strong>{{auth()->user()->email}}</strong></p>


                            @if(0)
                            <label style="color: white;">@lang('ENTER VERIFICATION CODE'):</label>
                            <input type="text" name="email_verified_code" class="form-control" maxlength="7" id="code" style="border: 1px solid #595959;">
                            

							<p class="ok-but">
                            	<button  type="submit" class="btn btn-secondary">@lang('VERIFY')</button>
                        	</p>
                            @endif
                            
                            <p style="font-size: 14px;">@lang('Please check including your Junk/Spam Folder. if not found, you can') <a
                                    href="{{route('user.send.verify.code')}}?type=email"
                                    class="forget-pass" style="color: #eea002; text-decoration: underline;"> @lang('Resend code')</a></p>
                            @if ($errors->has('resend'))
                                <br/>
                                <small class="text-danger">{{ $errors->first('resend') }}</small>
                            @endif


                        </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() { // Аналог $(document).ready(function(){
        let myModal = new bootstrap.Modal(document.getElementById('withdrawError'));
        myModal.toggle();
    });
</script>
@push('script')
    <script>
        (function ($) {
            "use strict";
            $('#code').on('input change', function () {
                var xx = document.getElementById('code').value;
                
                $(this).val(function (index, value) {
                    value = value.substr(0, 7);
                    return value.replace(/\W/gi, '').replace(/(.{3})/g, '$1 ');
                });

            });
        })(jQuery)
    </script>
@endpush
<style>
.modal{
    pointer-events: none;
}
.modal-dialog{
    pointer-events: all;
 }
 #withdrawError .modal-title {
 	border-bottom: 3px solid #eea002 !important;
 	width: auto !important;
 }
 .modal-content form {
 	background-color: transparent !important; 
 	padding: 0 !important; 
 }
 .login-form .form-group {
 	text-align: left;
 }
</style>
<div class="page-wrapper" id="main-scrollbar" data-scrollbar="">

    
<section class="balance_profile">
        <div class="balance_profile_top">
            <div class="balance_container">
                <div class="balance_grid">
                    <div class="balance_left">
                        <div class="balance_left_type">
                            <p class="balance_left_name">@lang('Balance')</p>
                            <p class="balance_left_money"><span class="jsBalance">{{ getAmount(auth()->user()->balance+auth()->user()->bonus) }}</span> {{ $general->cur_text }}</p>
                        </div>
                        <div class="balance_left_type">
                            <p class="balance_left_name">@lang('Money')</p>
                            <p class="balance_left_money"><span  style="font-size: 16px;"><span class="jsMoney">{{ getAmount(auth()->user()->balance) }}</span> {{ $general->cur_text }}</p>
                        </div>
                        <div class="balance_left_type" style="margin-bottom: 0;">
                            <p class="balance_left_name">@lang('Bonus')</p>
                            <p class="balance_left_money"><span class="jsBonus">{{ getAmount(auth()->user()->bonus) }}</span> {{ $general->cur_text }}</p>
                        </div>
                    </div>
                    <div class="balance_right">
                    <div class="balance_right_wrapper">
                        <div class="balance_right_item">
                            <img src="/assets/images/profile/money_deposit.png" alt="money_deposit"
                                class="balance_right_image">
                            <div class="balance_right_item_description">
                                <p class="balance_right_item_description_name">
                                    @lang('Total Deposit')
                                </p>
                                <p class="balance_right_item_description_money">
                                    <span class="jsTotalDeposit">{{ getAmount(auth()->user()->deposits->where('status',1)->sum('amount')) }}</span> {{ $general->cur_text }}
                                </p>
                            </div>
                        </div>
                        <div class="balance_right_item">
                            <img src="/assets/images/profile/money_withdrow.png" alt="money_withdrow"
                                class="balance_right_image">
                            <div class="balance_right_item_description">
                                <p class="balance_right_item_description_name">
                                    @lang('Total Withdraw')
                                </p>
                                <p class="balance_right_item_description_money">
                                    <span class="jsTotalWithdraw">{{ getAmount(auth()->user()->withdrawals->where('status',1)->sum('amount')) }}</span> {{ $general->cur_text }}
                                </p>
                            </div>
                        </div>
                        <div class="balance_right_item">
                            <img src="/assets/images/profile/money_bonus.png" alt="money_bonus" class="balance_right_image">
                            <div class="balance_right_item_description">
                                <p class="balance_right_item_description_name">
                                    @lang('Total Bonus')
                                </p>
                                <p class="balance_right_item_description_money">
                                    <span class="jsTotalBonus">{{ getAmount($totelbonus) }}</span> {{ $general->cur_text }}
                                </p>
                            </div>
                        </div>
                        <div class="balance_right_item">
                            <img src="/assets/images/profile/Zinocoin.png" alt="zinocoin" class="balance_right_image">
                            <div class="balance_right_item_description">
                                <p class="balance_right_item_description_name">
                                   Zino Coins
                                </p>
                                <p class="balance_right_item_description_money">
                                    <span class="jsTotalBonus">{{ getAmount(auth()->user()->bonus_zino) }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="balance_menu balance_menu_desctop">
                    <div class="balance_menu_item">
                        <a href="{{ route('user.home') }}" class="balance_menu_item_title">
                            Dashboard  
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
            </div>
        </div>
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
                    <div class="profile_games_title" style="font-size: 40px;">
                        Our Awesome Games
                    </div>
                    <select class="profile_games_select" style="display: none;" onchange="jQuery('.groups').hide(); jQuery('.group'+$(this).val()).show();  document.cookie = 'prov='+$(this).val()+';expires=865 440 000';">
                    	<option value="0">Providers</option>
                        @forelse($groups as $group)
                    		<option value="{{ $group['id'] }}"  <?php if($prov == $group['id']) { ?>selected="selected"<?php } ?>>
                                {{ $group['title'] }} ({{ $group['count'] }})</span>
                            </option>
                    	@empty
                    	@endforelse
                    </select>
                </div>
                <p class="profile_games_description">
                    In the gaming hall, you have access to slot machines, with the highest return percentage and incredibly gambling gameplay!
                </p>
            </div>
            <div class="profile_games_grid">
            	@forelse($games as $keygame => $game)
                <div class="profile_games_grid_item group{{ $game->provider->id }} group0 groups <?php if($keygame > 5) { ?> wow fadeInUp <?php } ?>"  data-group="{{ $game->provider->id }}" data-name="<?php echo mb_strtolower($game->title)?>" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    			<div class="game-card">
                               
                                    <div class="game-card__thumb">
                                        <img src="{{ '/'.imagePath()['game']['path'].'/'.$game->image }}" alt="image" style="width: 100%;">
                                    </div>
                                    <div class="game-card__content">
                                    	<h4 class="game-name">{{ $game->title }}</h4>
                                       <a onclick="
                                                jQuery('#geme-iframe-modal').attr('src', jQuery(this).data('gameurl'));
                                                $('#exampleModalLabel').text('{{ $game->title }}');
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
                                                } " data-gameurl="https://int.apiforb2b.com/games/{{ $game->link }}?operator_id={{ env('SLOTS_OPERATOR_ID') }}&user_id={{ auth()->user()->id }}&auth_token={{ auth()->user()->mobile }}&currency=USD&language=en" class="profile_games_grid_item_button" data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;">@lang('Play Now')</a>
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
            
        </div>
    </section>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width: 99%; max-width: 95%; margin-top: 0; margin-bottom: 0;">
        <div class="modal-content section--bg" style="background-color: #000;">
            <div class="modal-header">
                <h6 class="modal-title method-name" id="exampleModalLabel">Payment By Okipays</h6>
                <a href="javascript:void(0)" class="close button-for-reload-balance" data-dismiss="modal" aria-label="Close" onclick="jQuery('#geme-iframe-modal').attr('src',''); ">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
            <div id="fullscreen">
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
    "use strict";
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
		        $('.jsTotalDeposit').text(data.deposit);
		        $('.jsTotalWithdraw').text(data.withdraw);
		        $('.jsTotalBonus').text(data.totalbonus);
			});

		})
    	
    })(jQuery);
</script>
@if($prov > 0) 
<script type="text/javascript">
(function ($) {
	jQuery('.groups').hide(); jQuery('.group{{ $prov }}').show();
})(jQuery);
</script>
@endif
@endpush