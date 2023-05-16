<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ $general->sitename(__($pageTitle)) }}</title>
    @include('partials.seo')
    
     <link rel="shortcut icon" href="{{ getImage(imagePath()['logoIcon']['path'] .'/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="/assets/global/css/all.min.css">
    <link rel="stylesheet" href="/assets/global/css/countrySelect.css">
    <link rel="stylesheet" href="/assets/global/css/line-awesome.min.css">

    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="/assets/global/css/bootstrap.min.css?111">
    <!-- image and videos view on page plugin -->
    <link rel="stylesheet" href="/{{$activeTemplateTrue}}css/lightcase.css">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/vendor/animate.min.css') }}">
    <!-- custom select css -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/vendor/nice-select.css') }}">
    <!-- slick slider css -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/vendor/slick.css') }}">
    <!-- dashdoard main css -->

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap-fileinput.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/custom.css')}}">

    <link rel="stylesheet"
          href="{{asset($activeTemplateTrue.'css/color.php')}}">
	<link rel="stylesheet" href="/assets/global/css/maindash.css?<?php echo time()?>">
    <link rel="stylesheet" href="/assets/global/css/choices.min.css">
    <link rel="stylesheet" href="/assets/global/css/stylepages.css?<?php echo time()?>">

    @stack('style-lib')

    @stack('style')
    <style>
               <style>
            .game-card__thumb {
            	height: 122px;
            }
            @media (max-width: 768px) {
                .game-card__thumb {
                	height: 100%;
                }
            }
            
            .game-card__thumb img {
            	width: 100%;
                height: 100%;
                object-fit: cover;
                -o-object-fit: cover;
                object-position: center;
                -o-object-position: center;
                -webkit-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }
            .mobile-landscape {
                position: absolute;
                width: 80%;
                top: 100px;
                background: #808080bd;
                height: 40px;
                line-height: 40px;
                text-align: center;
                border-radius: 40px;
                margin-left: 10%;
            }

            .importantRule { height: 96% !important; }
            .importantRule2 { height: 100% !important; border-width: 0 !important; }
            
        .container-full {
            margin: 0 auto;
            width: 100%;
            min-height:100%;
            background: url('http://www.desktopwallpaperhd.net/wallpapers/7/6/background-homepage-web-wood-opera-media-images-79414.jpg');
            color:#eee;
            overflow:hidden;
        }
        /* Preloader with Bootstrap Progress Bar
        -----------------------------------------------*/
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
            background: #181818;
        }
        .loader-container {
            width: 600px;
            height: 200px;
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;

            margin: auto;
            text-align: center;
        }
        .progress-bar {
            background-color: #ff0000;
            height: 10px;
        }
        .progress {
            height: 4px;
            font-size: 0;
        }
        @media (max-width: 768px) {
            .loader-container {
                width: 75%;
            }
        }
    </style>
        <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XQZ0WCR146"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-XQZ0WCR146');
	</script>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TTCNM4F');</script>
    <!-- End Google Tag Manager -->
</head>
<body >
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTCNM4F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

{{--
<div class="preloader">
    <div class="preloader__inner">
        <div class="preloader__thumb">
            <img src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="imge" class="mt-3 loaderLogo">
            <img src="{{ asset($activeTemplateTrue.'/images/preloader-dice.png') }}" alt="image" class="loadercircle">
        </div>
    </div>
</div>
--}}

<div class='loader'>
    <div class='loader-container'>
        <img style="margin-bottom: 35px" src="/assets/images/logoIcon/logo.png" alt=""/>
        <div class='progress progress-striped active'>
            <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
        </div>
    </div>
</div>

<div class="page-wrapper" id="main-scrollbar" data-scrollbar>
    <!-- header-section start  -->
{{--    <header class="new_header header" >
        <div class="new_header_container">
        	<a class="site-logo site-title" href="{{ route('home') }}"><img
                            src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="site-logo" class="new_logo"></a>
            <nav class="new_nav_menu new_nav_menu_desctop">
                <ul class="new_nav_menu_list">
                    <!-- <li class="new_nav_menu_list_item"><a href="{{route('home')}}">{{__('Home')}}</a></li> -->
                	<li class="new_nav_menu_list_item"><a href="{{route('sport')}}">{{__('Sport')}}</a></li>
                	<li class="new_nav_menu_list_item"><a href="/games">{{__('Casino')}}</a></li>
                	<li class="new_nav_menu_list_item"><a href="{{route('tournament')}}">{{__('Tournaments')}}</a></li>
                	<li class="new_nav_menu_list_item"><a href="{{route('lottery')}}">{{__('Lottery')}}</a></li>
                	<li class="new_nav_menu_list_item"><a href="/blog">News</a></li>
                	<!-- <li class="new_nav_menu_list_item"><a href="{{ route('contact') }}">@lang('Contact')</a></li> -->
                </ul>
            </nav>
            <div class="header_btn_container">
             	@auth
             		<?php
             		$adminNotifications = App\Models\Notification::where('user_id', auth()->user()->id)->where('viewed', 0)->count();
             		$userNotify = App\Models\UserNotification::where('user_id', auth()->user()->id)->where('viewed', 0)->count();
                    $broadcastNotify = App\Models\UserNotification::whereNull('user_id')->count();
					$total   = $adminNotifications + $userNotify + $broadcastNotify; ?>
                    	<div class="dropdown">
                            <button type="button" class="primary--layer" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" style="background-color: transparent;">
                              <i class="las la-bell text--primary" style="color: #e51421; font-size: 28px;"></i>
                              @if($total > 0)
                                <span class="pulse--primary"></span>
                              @endif
                            </button>
                            <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
                              <div class="dropdown-menu__header">
                                <span class="caption">@lang('Notification')</span>
                                @if($total > 0)
                                    <p>@lang('You have') {{ $total }} @lang(' notification')</p>
                                @else
                                    <p>@lang('No notification found')</p>
                                @endif
                              </div>
--}}{{--                              <div class="dropdown-menu__body">--}}{{--
--}}{{--                                @foreach($adminNotifications as $notification)--}}{{--
--}}{{--                                <a href="{{ route('admin.notification.read',$notification->id) }}" class="dropdown-menu__item">--}}{{--
--}}{{--                                  <div class="navbar-notifi">--}}{{--
--}}{{--                                    <div class="navbar-notifi__left bg--green b-radius--rounded"><img src="{{ getImage(imagePath()['profile']['user']['path'].'/'.@$notification->user->image,imagePath()['profile']['user']['size'])}}" alt="@lang('Profile Image')"></div>--}}{{--
--}}{{--                                    <div class="navbar-notifi__right">--}}{{--
--}}{{--                                      <h6 class="notifi__title">{{ __($notification->title) }}</h6>--}}{{--
--}}{{--                                      <span class="time"><i class="far fa-clock"></i> {{ $notification->created_at->diffForHumans() }}</span>--}}{{--
--}}{{--                                    </div>--}}{{--
--}}{{--                                  </div><!-- navbar-notifi end -->--}}{{--
--}}{{--                                </a>--}}{{--
--}}{{--                                @endforeach--}}{{--
--}}{{--                              </div>--}}{{--
                              <div class="dropdown-menu__footer">
                                <a href="{{ route('user.notifications') }}" class="view-all-message">@lang('View all notification')</a>
                              </div>
                            </div>
                        </div>

                	<a href="{{ route('user.home') }}" class="header_btn_profile header_btn_profile_desctop">{{ Str::limit(auth()->user()->username, 6)}}</a>
                    <a href="{{ route('user.logout') }}" class="header_btn_logout header_btn_logout_desctop"></a>
                     <div class="header_btn_balance_container">
                    <a href="{{ route('user.home') }}" class="header_btn_balance zinocoin"><img src="{{ asset('/assets/images/header_images/Zinocoin.png') }}" alt=""><span class="jsBalance">{{ getAmount(auth()->user()->bonus_zino) }}</span></a>
                    <a href="{{ route('user.home') }}" class="header_btn_balance"><span>$</span> <span class="jsBalance">{{ getAmount(auth()->user()->getBalance(1)) }}</span></a>
                    </div>
                    @else
                    <a href="{{ route('user.login') }}" class="header_btn_login">@lang('Login')</a>
                    <a href="{{ route('user.register') }}" class="header_btn_login">@lang('Registration')</a>
                @endauth
                <div class="header_support_btn_container desctop">
                    <a href="{{ route('user.deposit') }}" class="header_support_btn">Deposit</a>
                    <a href="{{ route('user.withdraw') }}" class="header_support_btn">Withdraw</a>
                </div>
                <div class="new_header_burger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <nav class="new_nav_menu new_nav_menu_mobile">
                <ul class="new_nav_menu_list">
                	<!-- <li class="new_nav_menu_list_item"><a href="{{route('home')}}">{{__('Home')}}</a></li> -->
                	<li class="new_nav_menu_list_item"><a href="{{route('sport')}}">{{__('Sport')}}</a></li>
                	<li class="new_nav_menu_list_item"><a href="/games">{{__('Casino')}}</a></li>
                	<li class="new_nav_menu_list_item"><a href="{{route('tournament')}}">{{__('Tournaments')}}</a></li>
                	<li class="new_nav_menu_list_item"><a href="{{route('lottery')}}">{{__('Lottery')}}</a></li>
                	<li class="new_nav_menu_list_item"><a href="/blog">News</a></li>
                	<!-- <li class="new_nav_menu_list_item"><a href="{{ route('contact') }}">@lang('Contact')</a></li> -->
                </ul>
                <div class="header_btn_container_mobile">
                    @auth
                    	<a href="{{ route('user.home') }}" class="header_btn_profile header_btn_profile_mobile">{{ Str::limit(auth()->user()->username, 6)}}</a>
                        <a href="{{ route('user.logout') }}" class="header_btn_logout header_btn_logout_mobile">@lang('Logout')</a>
                        <a href="{{ route('user.deposit') }}" class="header_support_btn">Deposit</a>
                        <a href="{{ route('user.withdraw') }}" class="header_support_btn">Withdraw</a>
                    @else
                        <ul class="new_nav_menu_list">
                    		<li class="new_nav_menu_list_item">
                        		<a href="{{ route('user.login') }}">@lang('Login')</a>
                        	</li>
                        	<li class="new_nav_menu_list_item">
                        		<a href="{{ route('user.register') }}">@lang('Registration')</a>
                        	</li>
                        </ul>
                    @endauth
                </div>
            </nav>
        </div>
        <div class="profile-header-bottom_wrapper">
        <div class="profile-header-bottom container">
    		<div class="row">
    			<div class="col-lg-6 col-md-6 col-sm-12" style="text-align: left;">

    				<p style="padding-right: 15px;">@lang('Balance:') <span><span class="jsBalance">{{ getAmount(auth()->user()->getBalance(1)) }}</span> {{ $general->cur_text }}</span></p>
    				<p style="padding-right: 15px;">@lang('Money:') <span><span class="jsMoney">{{ getAmount(auth()->user()->getMoney(1)) }}</span> {{ $general->cur_text }}</span></p>
    				<p style="padding-right: 15px;">@lang('Bonus:') <span ><span class="jsBonus">{{ getAmount(auth()->user()->getBonus(1)) }}</span> {{ $general->cur_text }}</span></p>
                    <p style="padding-right: 15px;">Bonus Level:<span ><span class="jsBonus"></span> {{ auth()->user()->getBonusLevelName() }}</span></p>
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-12 no-mobile" style="justify-content: flex-end;">
                <p style="padding-right: 15px;">@lang('Total Deposit') <span><span class="jsTotalDeposit">{{ getAmount(auth()->user()->deposits->where('status',1)->sum('amount')) }}</span> {{ $general->cur_text }}</span></p>
        		<p style="padding-right: 15px;">@lang('Total Withdraw') <span><span class="jsTotalWithdraw">{{ getAmount(auth()->user()->withdrawals->where('status',1)->sum('amount')) }}</span> {{ $general->cur_text }}</span></p>
        		<p style="padding-right: 15px;">@lang('Total Bonus') <span><span class="jsTotalBonus">{{ getAmount(auth()->user()->transactions->where('remark', 'bonus')->sum('amount')) }}</span> {{ $general->cur_text }}</span></p>
        		<p style="padding-right: 15px;">@lang('Zino coins') <span><span class="jsTotalBonus">{{ getAmount(auth()->user()->bonus_zino) }}</span></span></p>
    			</div>
    		</div>
        </div>
        </div>
        <div class="profile-header-bottom_wrapper">
        <div class="profile-header-bottom container">
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
        <style>
            .header .profile-header-bottom {
            	display: none;
            }
            .menu-fixed .profile-header-bottom {
            	display: block;
            }
            .profile-header-bottom {
            	padding-top: 10px;
            	width: 100%;
            	max-width: 1170px;
            }
            .profile-header-bottom .row div {
                display: flex;
                flex-wrap: wrap;
            	text-align: center;
            	font-size: 14px !important;
            	font-family: 'Jost', sans-serif !important;
                margin: 0 !important;
                line-height: 1.3 !important;
            	color: #ffffff !important;
            }
            .profile-header-bottom .row span {
            	font-size: 16px !important;
            	font-weight: 600 !important;
            }
            .profile-header-bottom_wrapper{
                background-color: #101010;
            }
            @media(max-width: 800px) {
            	.no-mobile {
            		 display: none !important;
                }
                .profile-header-bottom .row div {
            	   text-align: center !important;
                   justify-content: center;
                }
            }
        </style>
    </header>--}}

    <header class="new_header header" >
        <div class="new_header_container">
            <div class="new_header_burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <a class="site-logo site-title" href="{{ route('home') }}"><img
                        src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="site-logo" class="new_logo"></a>
            <nav class="new_nav_menu new_nav_menu_desctop">
                <ul class="new_nav_menu_list">
                    <!-- <li class="new_nav_menu_list_item"><a href="{{route('home')}}">{{__('Home')}}</a></li> -->
                    <li class="new_nav_menu_list_item"><a href="{{route('sport')}}">{{__('Sport')}}</a></li>
                    @auth
                    <li class="new_nav_menu_list_item"><a href="/user/dashboard">{{__('Casino')}}</a></li>
                    @else
                    <li class="new_nav_menu_list_item"><a href="/games">{{__('Casino')}}</a></li>
                    @endauth
                    <li class="new_nav_menu_list_item"><a href="{{route('tournament')}}">{{__('Tournaments')}}</a></li>
                    <li class="new_nav_menu_list_item"><a href="/promo">{{__('Promo')}}</a></li>
                    <li class="new_nav_menu_list_item"><a href="/blog">News</a></li>
                    <!-- <li class="new_nav_menu_list_item"><a href="{{ route('contact') }}">@lang('Contact')</a></li> -->
                </ul>
            </nav>
            <div class="header_btn_container">
                <div class="header_support_btn_container desctop">
                    <a href="{{ route('user.deposit') }}" class="header_support_btn">Deposit</a>
                    <a href="{{ route('user.withdraw') }}" class="header_support_btn">Withdraw</a>
                </div>
                @auth
                    <?php
                    $adminNotifications = App\Models\Notification::where('user_id', auth()->user()->id)->where('viewed', 0)->count();
                    $userNotify = App\Models\UserNotification::where('user_id', auth()->user()->id)->where('viewed', 0)->count();
                    $broadcastNotify = App\Models\UserNotification::whereNull('user_id')->count();
                    $total   = $adminNotifications + $userNotify + $broadcastNotify; ?>
                    <div class="dropdown">
                        <button type="button" class="primary--layer" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" style="background-color: transparent;">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="19" viewBox="0 0 16 19">
                                <image id="notification-svgrepo-com" width="16" height="19" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAATCAYAAACZZ43PAAABPUlEQVQ4jaXSrUttQRQF8J9fIH6AH+UFo6BRRJ5BtAgmq09sChbF9hDE9CyvXAw2m+I/YNFoUQQRsya7Fp+IoO3JcPeV4zn3XBQXDDN7Zu01a8+epoc9ZZjCfpwt4rQer5HAJe5i/QM/Cwy0Fnaq6EI3WiLuiL3nPLE5F7dhC/cYxmiM4djbCk7dEtpxhOmCn484wSxe8w62M8k3+IV+VHIC08H9UMIQVmJ9hXH04RCrBQ9V7lBWYCGVE+tl/MZutLKzkF7lppz3LozEfItrnBdSihjJOuiJ+T9mSm7No0edNg5GJz6NvMCXURMo+5GN0ForIfV5ogGxDCmnkn7iv8wjfhWPycHFN57gItUxjyX0Zg42cRYjYTLG3wwnOd9LAk/YySkPYA7HEY/hAH/yFspefw0v2Ig4Ja8XWHgDU2Uxudl7VxQAAAAASUVORK5CYII="/>
                            </svg>
                            @if($total > 0)
                                {{--<span class="pulse--primary"></span>--}}
                                <span class="notification-count">{{ $total }}</span>
                            @endif
                        </button>
                        <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
                            <div class="backdrop"></div>
                            <div class="dropdown-menu__header">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="19" viewBox="0 0 16 19">
                                    <image id="notification-svgrepo-com" width="16" height="19" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAATCAYAAACZZ43PAAABPUlEQVQ4jaXSrUttQRQF8J9fIH6AH+UFo6BRRJ5BtAgmq09sChbF9hDE9CyvXAw2m+I/YNFoUQQRsya7Fp+IoO3JcPeV4zn3XBQXDDN7Zu01a8+epoc9ZZjCfpwt4rQer5HAJe5i/QM/Cwy0Fnaq6EI3WiLuiL3nPLE5F7dhC/cYxmiM4djbCk7dEtpxhOmCn484wSxe8w62M8k3+IV+VHIC08H9UMIQVmJ9hXH04RCrBQ9V7lBWYCGVE+tl/MZutLKzkF7lppz3LozEfItrnBdSihjJOuiJ+T9mSm7No0edNg5GJz6NvMCXURMo+5GN0ForIfV5ogGxDCmnkn7iv8wjfhWPycHFN57gItUxjyX0Zg42cRYjYTLG3wwnOd9LAk/YySkPYA7HEY/hAH/yFspefw0v2Ig4Ja8XWHgDU2Uxudl7VxQAAAAASUVORK5CYII="/>
                                </svg>
                                <span class="caption">- {{ $total }} Notifications</span>
                                @if($total > 0)

                                @else
                                    <p>@lang('No notification found')</p>
                                @endif
                            </div>
                            {{--                              <div class="dropdown-menu__body">--}}
                            {{--                                @foreach($adminNotifications as $notification)--}}
                            {{--                                <a href="{{ route('admin.notification.read',$notification->id) }}" class="dropdown-menu__item">--}}
                            {{--                                  <div class="navbar-notifi">--}}
                            {{--                                    <div class="navbar-notifi__left bg--green b-radius--rounded"><img src="{{ getImage(imagePath()['profile']['user']['path'].'/'.@$notification->user->image,imagePath()['profile']['user']['size'])}}" alt="@lang('Profile Image')"></div>--}}
                            {{--                                    <div class="navbar-notifi__right">--}}
                            {{--                                      <h6 class="notifi__title">{{ __($notification->title) }}</h6>--}}
                            {{--                                      <span class="time"><i class="far fa-clock"></i> {{ $notification->created_at->diffForHumans() }}</span>--}}
                            {{--                                    </div>--}}
                            {{--                                  </div><!-- navbar-notifi end -->--}}
                            {{--                                </a>--}}
                            {{--                                @endforeach--}}
                            {{--                              </div>--}}
                            <p class="notification-text">
                            	<a href="{{ route('user.notifications') }}" class="view-all-message">@lang('View all notification')</a>
							</p>
                        </div>
                    </div>

                    <div class="header_btn_profile header_btn_profile_desctop"><span class="nickname_pro">{{ Str::limit(auth()->user()->username, 10)}}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                            <image id="setting-tool-svgrepo-com" width="16" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABJ0lEQVQ4jaXTPyuHURQH8M8Po7KalIH3gCwmJTEwSMkoCi9ASVnJn/wZFFmVkii78hbESDKZ7HRzHq7rMci3njr3nHO/zznnfk/j5dBvaMNKxJbwWpfX8sPzhWksxOkOu2E38FZlNWUXBvCINfRiLovNh28LT5H7wRYtNCLQ/qOOejygI68glXRSm1qPz9y8hZLgDIMYwnkR+0bQilkcZAmnGMUVLjGCiyx+HANuS6+wmk27wn5xfgvfUJy7sIHOJv9EIljGIu4zqpmCtlH4buOZl3Il9uG6GOIemuPycBZLmrhRKHGs+OtIfHWYqAjyGYz/YRopN7X1jWAKz9hGf+i/QrJ7sB4qnKz2odzGfFGSNnbCTkPerCul3MbPLQuxdId9VNsI3gGrGjkm2SSObQAAAABJRU5ErkJggg=="/>
                        </svg>
                            <div class="menu-drop">
                            <div class="backdrop"></div>
                            <ul>
                                <li>
                                    <a href="{{ route('user.home') }}">Dashboard</a>
                                    <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <span class="total-dep-span">Total deposit:</span>
                                            <span class="total-dep-bold">{{ getAmount(auth()->user()->deposits->where('status',1)->sum('amount')) }} {{ $general->cur_text }}</span>
                                        </div>
                                         <div class="dash-in">
                                            <span class="total-dep-span">Total withdraw:</span>
                                            <span class="total-dep-bold">{{ getAmount(auth()->user()->withdrawals->where('status',1)->sum('amount')) }} {{ $general->cur_text }}</span>
                                        </div>
                                         <div class="dash-in">
                                            <span class="total-dep-span">Total bonus:</span>
                                            <span class="total-dep-bold">{{ getAmount(auth()->user()->transactions->where('remark', 'bonus')->sum('amount')) }} {{ $general->cur_text }}</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{ route('user.deposit') }}">Deposit</a>
                                <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('user.deposit') }}" class="total-dep-span">Deposit money</a>
                                        </div>
                                       <div class="dash-in">
                                            <a href="{{ route('user.deposit.history') }}" class="total-dep-span">History</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{ route('user.withdraw') }}">Withdraw</a>
                                <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('user.withdraw') }}" class="total-dep-span">Withdraw</a>
                                        </div>
                                       <div class="dash-in">
                                            <a href="{{ route('user.withdraw.history') }}" class="total-dep-span">Withdraw History</a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('user.referrals') }}">Referrals</a></li>
                                 <li><a href="#">Reports</a>
                                    <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('user.gameLog') }}" class="total-dep-span">Game Log</a>
                                        </div>
                                       <div class="dash-in">
                                            <a href="{{ route('user.commissionLog') }}" class="total-dep-span">Commission Log</a>
                                        </div>
                                         <div class="dash-in">
                                            <a href="{{ route('user.transactions') }}" class="total-dep-span">Transactions</a>
                                        </div>
                                    </div>
                                 </li>
                                <li>
                                    <a href="#">Support</a>
                                      <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('ticket.open') }}" class="total-dep-span">Create New</a>
                                        </div>
                                       <div class="dash-in">
                                            <a href="{{ route('ticket') }}" class="total-dep-span">My Tickets</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Account</a>
                                  <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('user.change.password') }}" class="total-dep-span">Change Password</a>
                                        </div>
                                       <div class="dash-in">
                                            <a href="{{ route('user.profile.setting') }}" class="total-dep-span">Profile Setting</a>
                                        </div>
                                         <div class="dash-in">
                                            <a href="{{ route('user.twofactor') }}" class="total-dep-span">2FA Security</a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('user.logout') }}">Log out</a></li>
                            </ul>
                        </div>
                             <div class="menu-drop-mob">
                                  <div class="close_menu_hide"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
                        <defs>
                            <style>
                                .cls-1 {
                                    opacity: 1;
                                }
                            </style>
                        </defs>
                        <image id="close-svgrepo-com" class="cls-1" width="32" height="32" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABJklEQVRYhb2X2w2DMAxFbyPWYIX+dQp+GJWfTsEYHYTKUiJZJg/bJLkSgkSIc5IQI17XdQUAO4AfgBNz8gGwAjiWCH/HAxMkCL6lRogjT9niDVPgxA5xxN8JEhJOzDPExmiJLJwuAuscJVGES4ERElV4TqCnRBNeEughoYLXBJ5IqOEtAY+ECa4RsEiY4VoBjYQLTlluPeWkB27iDC+cQl/DW2cjcrQ8JjhFuwQ8cjlSzHCvQNd4BEpLUNod1VgFcm97bXc0Y9kFOThfc7k7VO+DdgZacPe3QyOgLTIuiZaAtcKZJWoC3vJqkigJuGu7VSIn8BRukpACveBqCS7QG66SSAKj4E2JZQKcS0BWTJoB+ksdDecSfCZWmoEjNmb9nifGCuD4A3O8c4oGJ3cKAAAAAElFTkSuQmCC"/>
                    </svg>
                            </div>

                            <div class="backdrop"></div>
                              <div class="header_support_btn_container desctop">
                    <a href="{{ route('user.deposit') }}" class="header_support_btn">Deposit</a>
                    <a href="{{ route('user.withdraw') }}" class="header_support_btn">Withdraw</a>
                                </div>
                                <style>
                                    .dashboard-p span.arrow{
                                        font-size: 20px;
                                        padding-left: 10px;
                                    }
                                </style>
                                 <div class="dashboard-p dashboard-p_first">
                                     <a href="/user/dashboard">DASHBOARD</a> <span class="arrow">+</span>
                                 <div class="info-menu">
                                     <div class="dash-in">
                                         <span class="total-dep-bold">{{ Str::limit(auth()->user()->username, 10)}}</span>
                                     </div>
                                     <div class="dash-in">
                                         <span class="total-dep-span">Total deposit:</span>
                                         <span class="total-dep-bold">{{ getAmount(auth()->user()->deposits->where('status',1)->sum('amount')) }} {{ $general->cur_text }}</span>
                                     </div>
                                     <div class="dash-in">
                                         <span class="total-dep-span">Total withdraw:</span>
                                         <span class="total-dep-bold">{{ getAmount(auth()->user()->withdrawals->where('status',1)->sum('amount')) }} {{ $general->cur_text }}</span>
                                     </div>
                                     <div class="dash-in">
                                         <span class="total-dep-span">Total bonus:</span>
                                         <span class="total-dep-bold">{{ getAmount(auth()->user()->transactions->where('remark', 'bonus')->sum('amount')) }} {{ $general->cur_text }}</span>
                                     </div>
                                 </div>
                                 </div>
                            <ul>
                                <li>
                                    <a>Deposit</a>
                                <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('user.deposit') }}" class="total-dep-span">Deposit money</a>
                                        </div>
                                       <div class="dash-in">
                                            <a href="{{ route('user.deposit.history') }}" class="total-dep-span">History</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a>Withdraw</a>
                                <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('user.withdraw') }}" class="total-dep-span">Withdraw</a>
                                        </div>
                                       <div class="dash-in">
                                            <a href="{{ route('user.withdraw.history') }}" class="total-dep-span">Withdraw History</a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('user.referrals') }}">Referrals</a></li>
                                 <li><a>Reports</a>
                                    <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('user.gameLog') }}" class="total-dep-span">Game Log</a>
                                        </div>
                                       <div class="dash-in">
                                            <a href="{{ route('user.commissionLog') }}" class="total-dep-span">Commission Log</a>
                                        </div>
                                         <div class="dash-in">
                                            <a href="{{ route('user.transactions') }}" class="total-dep-span">Transactions</a>
                                        </div>
                                    </div>
                                 </li>
                                <li>
                                    <a>Support</a>
                                      <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('ticket.open') }}" class="total-dep-span">Create New</a>
                                        </div>
                                       <div class="dash-in">
                                            <a href="{{ route('ticket') }}" class="total-dep-span">My Tickets</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a>Account</a>
                                  <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('user.change.password') }}" class="total-dep-span">Change Password</a>
                                        </div>
                                       <div class="dash-in">
                                            <a href="{{ route('user.profile.setting') }}" class="total-dep-span">Profile Setting</a>
                                        </div>
                                         <div class="dash-in">
                                            <a href="{{ route('user.twofactor') }}" class="total-dep-span">2FA Security</a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('user.logout') }}">Log out</a></li>
                            </ul>
                                      <svg class="setting-big" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="201" height="193" viewBox="0 0 201 193">
  <defs>
    <style>
      .cls-1 {
          opacity: 1;
      }
    </style>
  </defs>
  <image id="setting-tool-svgrepo-com_копия" data-name="setting-tool-svgrepo-com копия" class="cls-1" y="-100" width="293" height="293" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAASUAAAElCAYAAACiZ/R3AAASBklEQVR4nO3dCXPbOBKGYVCHj2T+/y9N4ksUtxg3N7RIyZREAH28T5VrdjyZWVskPjSaINl0XZcQVpNS2in75Y8ppXbyXYSh7YREWf3xf1L2mfeh9HvyXYSx4VCH9qDwl98wWcZGKMW1VXz895PvIAxCKS6NVdJgx7kZFwc+Jo0N7lNUS0ERSjFZGPB7CU8EQyjFpHnpNrBQzSEDQimenaEKxEJ4YmWEUjyWBvpGrhIiEEIpFouDnGopGEIpFosDnO0BwXCw47DcOGZ7QCCEUhyWGtyn2B4QCKEUh+XeDNsDAiGUYtB8n9tSNLyDIJRi8DCg2R4QBKHkn6elD9VSAISSf54GsuVmPRYilPzzdjmdask5Qsk3j5UFe5acI5R881hVNASTb4SSX56vVrGEc4xQ8svzwGV7gGOEkk8RdkBTLTlFKPkU4V4xtgc4RSj5FKURTLXkEKHkj4f73JbiKpxDhJI/kaoHtgc4RCj5EvERH4SSM95DqQkWvBF7LNtA2wP6CefJe4Pf86zaH7hnOWHblNJHSumQUuomf9KPqFXDXo6xR41MNuMrqv1E++L1XG66zufvNQqksU7Cqf86Tv4t2/Yyi0b1y9kg3ckxPVc4tF6DyWMonQukU96qpx/Bdzm/p5TeJt+1ZWjc7xe2HVwGk7dQWhpIYx6qp/4E/jn5biydVEsWbUdhdC13weQplG4JpFPtKKAseeIq1F+vho7dcKX0YYWLMa6CyUsorRFIY5aqp0aqJG65+Bycfybf1WUzqorWPGZugslDKK0dSKe0V0/9TPs4+W5cf5ReiRuqopx9PxfBZD2UcgfSmNbq6SebYL/4kGWcBnOX83MzH0yWQ6lkIJ3SUj3t5DPAV7W3B3x3OT8308FkNZRqBtJY7erpmTfHznqTLQIlXXs5PzezwWQxlLQE0qlWBsJh8k/yYBvAeSW3B9xzOT83k8FkLZS0BtJYqerpkecJXfSScYJY83J+buaCyVIoWQikU4fRrvE1sQ3gezm2B+S6nJ+bqWCyEkoWA2lsreqpdgPVmuPoc7/nRC9xOT83M8FkIZSsB9Kpa6snq7OzNtd+7jUu5+dmIpi0h5K3QBr7rnryMDtrNHzu72cGp/dqVH0waQ4lz4F0apjFWxkQD1RFRYzDSdPl/NxUB5PWUIoUSEANaoNJ46xAIAH5bWWcqavItYUSgQSUozKYNIUSgQSUpy6YtIQSgQTUoyqYNIQSgQTUpyaYaocSgQTooSKYaoYSgQToUz2YaobSI4EEqLSNGkqlnjsE4DrtmVufiqgdSp5foQ1YVfUxz7Ub3dberwZ410UPpdLPUQZwWfVCoXYodfSWAFXCh1KiWgLUqNrgHmh5FYz2V2MDEajo8Wq5942GN1BX9Qb3gFACkDSNQS2hpCalgaAIpRmEElCHqr6uplBq5QtAWaqugGt7HC7VElCWur2C2kKJ++GAstQVAtpCiYY3UBahtAChBJShcuOyxlA60vAGilB5i5fWVxRzPxyQl9qb4bWGEg1vIC+1bRKtoZToLQFZEUo3YAkH5HHQ/GQOzaHEA+CAPFSvQjSHUmIJB6xO/WSvPZRUl5mAQeoneu2hlKiWgFURSisglIB1mFh5WAgl7ocD1mFiHFkIpUQoAXczczXbSijxxhPgPmYmdiuhlNhMCdyFUMqA++GA25jaWmMplGh4A7cxNW4shVIilICrmbtdy1oo8QA44DrmJnJroZRoeKvSyUQx/uro/alibrzsJt/Rb2h4NwZ/dmu6UXV6HP390uBpZOLbyP/ejv4e+Zm8OGQxlJKUpA+T7+Jex9FLQdfYG9adecnoEFZbOQe3k38TazDZg226zmSl3Z/U/02+i1sc5eStedl4qKL2hidKbfqB/cviD271BBiuKHAC32bYXvGhZP/KcDwPElA7CSgqqNuZ7b1aHtQfhNLVjnKyai7rx4G5kWX6fvKn8B2z22esLt8GP2maLtJKGFl9vHAj4UQfcZn+OL9Y+EHnWA+l/iR9nHwXg74yenP0rPNGjjeV02Uvlo+59eUPGynndRJG3nbA97/Xq1R9T/ScZpl/4Yb1UGLGnDrIwPW8gbGvAP/I8X9kz9oXjXyZPf6W+zENofRFJ2X7S6Ad1X0l+JtXcU2YHheWQ4mm5z9t4ME5hPHb5J/EZXpsWA4lqqRP77KUiX6/GZ/DP6ZXEVZDaUcf4S8qhK+GipELIIRScdGrpE6qAnopU3w2n7ZWx7fFH7oJvpN7GHRUA5e98FBAm5O3xVCKXCUdZXnCm12WeQ3+/C1CqZCooXSkkXuTt8DBZHJVYS2UzK6T79QF23+0No+725cyN4lbuvdtL/svooXS0ENiyXa/56D9yG70dAj1A157KDWjR1dE3QJg+uZKZRoJpsj3zB0koNReKNEaSlsJo+jPS4rcD8mlkUfeRN/ndhw9zkZVCGgLpahLtDmmn4mjXD/p/Yj+IQhtTyFVEUobCaPIS7RTnVz6p7GdzyP3T06oeBhgzVBiiXYemyPL+MEzmWZVbYzXCCWWaJe9cz9bMRvpL+G84o3xUqHEEm0ZNkiWxyOVlynWGM8dSizRrsPl/zp4AcVy2RvjOUJp2NrOEu06XG2rZyf7l3CdLI3xNUOJJdp9uNG2rqi7vdewamN8jVBiiXa/D7mjHfWwd2kddzfGbw0SlmjrYtd2fS2vgl/FTr5uboxfewBYoq3vwLJNjXdCaTUbeTff1Y3xpQeAJVo+VEl6tPLFhsr1jF+5vqgxfqmnxBItv1b2JUEPrsTld7ExPlf5sEQrJ/ozpDUaeiCc+/k0smH1ca4xPg6lnQTRXFBhfebf+e7YBzfrFjNpjO9k/fzEEq04dc+xwf8dCKXihsb460b+hkAqjypJr5YrovUQRnWwdNOP41MJoVQHz0rSj1CqhFCqgxNev5aeXx2EUh1USjZwnCoglMrraKKaQShVQCiVx4luB8eqAkKpPKokOzhWFRBK5TH72tHR7C6PUCqP2dcWJpHCCKXyCCVbqJQKI5TK4gS3h0mkMEKpLE5we5hICiOUyuIEt4djVhihBFxGKBVGKJXFCW4Px6wwQgmAKoRSWcy6wDcIpbJ4GD3wDUIJgCqEUllUSvZwzAojlIDLCKXCCKWyOMHt4ZgVRiiVxedtD6FUGIOkLE5wexgjhfGBl8dnbgsTSWEMkPL4zG3ZRv8ASmOAlMdJbkdDpVQeoVQen7kdHKsK+NDLo1Kyg2NVAaFUXsPnbgahVAGDow5Odhs4ThUQSnXsIv7SxmxpctdBKNXBDKwfE0clhFIdDSe9ehyfSgilejjp9doyNqroX0F27AfGIaX0mlJ64EAUtZOKiUfk6sOEUVafQR/y178ffiff+JAZ4oGDUsSwhPsI8Ltas4/+ARQwzp0vL2k9DZ82pfQiA2YvAcUViHz2hJI6O875rPoAepeqaHaVcK4i6uRffJc/88AVoyy28tU6/N2seoj+AWRykDz59lxvum42rOZsZGbfM5Os6iDVKerrJ4gfHIfVnF2iXXKuUprT/0ffTqonGuP328nnuPigIRuqpHUMS7SbWhPXVEpzaIyv40OugKIeqqT7LV6iXXJvKA1ojN/vN9VSVc9MrjcZlmjv5xrX11orlMZojN+G3lI9OwklLNeO+kWryjEzHOSLxvh1dvJ1sPRDO/EY/QO4whBE2a4Y56iUJv8fNMYX65dvf9jlXdQDofSt1Zdol5QIpTEa4997l6ucyK+fJH/yOZ+VbYl2SelQGtAYv+wPGyqL+EHvc1b2JdoltUJpjMb4VCdX41jG5fPIvqQvutHeoqrnnYZQGtAY/4qrcfmwJ+mfdnQvmgqaQmlAY/yfYQc91tNIHyn6xDc0rtXtjdMYSmM0xj+rJbYJrKOR/UhRWwVqlmiXaA+lQeTGeCeNb3Z73y/qrm11S7RLrITSIGovgGC631PQh7eZu6/SWs+mDTowh2VH9D7IrR4DP03S3EMELTaSoz6pcSNVIsF0nciX/o8W97sRSrYMO5CjX5Vc6in4XiSTY8Xiyd0FvxrVsBN5kWdeAGBznFidcaM/bH8IJu4hnOKz+WS2/2o1lM6+CSGYZ+5w/2Iry1uqSMObbi33Jtjp/OmBBvhffA7/mG5xWA6l6Eu4saFCiLhkaagYJ0xP2JZDqSOYvhgGZ6T9TPvAYXyO+XFh/dIyS7ipnQxUz1eehj1bTyzX/LE+w7BfZ14z2qPz5mgLRRN8d/YSw1M2zFZL1kOJh3RdtpHlnKkbMmc0cqw53ss8EEp1bLj0u9hWwumuN5dWsJEBRmV0nWFsmHyksrWnBIzxONPb3fSO90KG5ceeSecuZp9carlSYva83Xg5dJRwOlQMqEYCaM+VtNXs5HM1V3VYrZT20sjFuoa7ytvMtyk0oyXGjoooG5OPU7Y6K1El5bEZvcAhySx7HAVUN/rrktmsGf03h2pow1XTYvaEUhk0uMsZguTc5z0XTs3JX1HPxuKr4C2GElWSHg2bF9XbWwsli2U0oQQst7M2zq2FEi+qBK5naiK3GEoAHI8bS6FEgxu4TWMpmCyFElUScDtCKQNCCbjd1sp4txJKNLiB+5m4V9RSKAG4z87C5G4hlGhwA+sw0fC2EEpUScB6CKUVEErAetSvPLSHEg1uYH2qG94WQgnAulQ3vDWHEg1uIB+1E77mUKJKAvJRu4QjlICYGq3PU9MaSjS4gfxUTvyaQwlAXiofAKcxlGhwA+WoKwA0hhJVElAOofQNUw+jAhxQN+a0hZKJu5gBZwilC6iSgPIuvduvOE2hRIMbqEdNQaAplKiSgHrU7A3UEko0uIH6VIxBLaFEgxuoj1AaoUoC6lPR19UQSjS4AT2qPz1AQyiZeO0LEET1VkrtUFL7+AQgsKqFQu1QosEN6FO1x1s7lGhwA/pUXcHUDCUa3IBeIUOpSym1k+8CqK0fl2+1fobaofRCMAGqtDIuu1o/VO2eEsEE6FE9kJKSfUoEE1CfikBKim4zIZiAetQEUlL26BKCCShPVSAlhU+eJJiActQFUlL6NhOCCaWpGpSFqAykXtN1ao9Hv6v0OcgGy2NK6SOldJBNaw/cfpNdJ5/5h3z+O7nDIMK9mGoDKSkPpRQgmPoQej9TFe7li13v6zqOwmju5N+MPnuPE4PqQEoGQik5DKZhhn5feGJ4HySlHEbV6FLeqif1gZSMhFJyEkytBNE1g+LUbvRFQH3vu6poKQ8Tg4lASoZCKRkNptO+xVoi9dtu1X/evzP8d4een6XP3kwgJWOhlAwNxna0VMj1Afez9tPkuxi8SWWai5XqyVQgJYOhlJQH01AVzTWuc/iPZdxZvwoORK3Vk7lASkZDKSkLprX6Frd45Bnns/pj8Tr3DzLTVD2ZDKRkOJSSgmC6dDm/lEaqJXz1R8Hm25rVk9lASsZDKVUIpmsv55fwzMsXvmgllLQoXT2ZDqTkIJRSoWBa43J+Lv3v/UPhz1XLq0wcGuWunswHUnISSilTMOW6nJ/DD7YH/NVJg1u7HNWTi0BKjkIprRhMJS7nr43tAZ/eaz5b+kZr3E7kJpCSs1BKdwZT6cv5a2N7wOdmSe1V7Tm3Vk+uAik5DKV0ZTDVvJy/tujbAw4yOD1YWj25C6TkNJTSgmDScDl/bdG3B7wovRBxj0vVk8tASo5DKc0Ek8bL+WuLuj0g131umoyrJ7eBlJyHUpJgepQZ1NssOifq9oDc97lpspEwcjtwvc+qXaXbDWpppWrQ+JjjnLTuS8rBaiN/sWgnbwRRKoaBh4sUGCGU/Ik2SCNVSSEQSj5FGahH3nrjD6HkU5RQirZUDYFQ8ukY4GpjF+SKajiEkl/eqwga3E4RSn61zi8f0+B2ilDyzWu1dIiwXycqQsk3r0scqiTHCCX/vA3gCE380Agl/7yFElWSc4SSf94qC0LJOUIpBi8Nb7YBBEAoxeBlewBVUgCEUhzWqyXucwuCUIrD0ttZ5nCfWxCEUhyd4eUP97kFQijFYjWUaHAHQijFYnV7AA3uQAileKz1ZrzfWIwThFI81gY5De5gCKWYrAx0GtwBEUoxWdkeQJUUEKEUk5XtATS4AyKU4tI+4NkGEBShFJf27QFUSUERSrFpHfjc5xYYoRSb1mdd0+AOrOk6lu3BbRVOTtZvHsatUkr/AyIyxeqlVIyvAAAAAElFTkSuQmCC"/>
</svg>
                        </div>
                    </div>
                @else
                    <a href="{{ route('user.login') }}" class="header_btn_login">@lang('Login')</a>
                    <a href="{{ route('user.register') }}" class="header_btn_login">@lang('Registration')</a>
                @endauth
            </div>
            <nav class="new_nav_menu new_nav_menu_mobile">
                <div class="backdrop"></div>
                <div class="close_menu"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
                        <defs>
                            <style>
                                .cls-1 {
                                    opacity: 1;
                                }
                            </style>
                        </defs>
                        <image id="close-svgrepo-com" class="cls-1" width="32" height="32" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAABJklEQVRYhb2X2w2DMAxFbyPWYIX+dQp+GJWfTsEYHYTKUiJZJg/bJLkSgkSIc5IQI17XdQUAO4AfgBNz8gGwAjiWCH/HAxMkCL6lRogjT9niDVPgxA5xxN8JEhJOzDPExmiJLJwuAuscJVGES4ERElV4TqCnRBNeEughoYLXBJ5IqOEtAY+ECa4RsEiY4VoBjYQLTlluPeWkB27iDC+cQl/DW2cjcrQ8JjhFuwQ8cjlSzHCvQNd4BEpLUNod1VgFcm97bXc0Y9kFOThfc7k7VO+DdgZacPe3QyOgLTIuiZaAtcKZJWoC3vJqkigJuGu7VSIn8BRukpACveBqCS7QG66SSAKj4E2JZQKcS0BWTJoB+ksdDecSfCZWmoEjNmb9nifGCuD4A3O8c4oGJ3cKAAAAAElFTkSuQmCC"/>
                    </svg>
                </div>
                @auth
                    <div class="header_btn_container_mobile menu_mob_but">
                        <a href="{{ route('user.deposit') }}" class="header_support_btn">Deposit</a>
                        <a href="{{ route('user.withdraw') }}" class="header_support_btn">Withdraw</a>
                    </div>
                @endauth
                <ul class="new_nav_menu_list">
                    <!-- <li class="new_nav_menu_list_item"><a href="{{route('home')}}">{{__('Home')}}</a></li> -->
                    <li class="new_nav_menu_list_item"><a href="{{route('sport')}}">{{__('Sport')}}</a></li>
                    @auth
                    <li class="new_nav_menu_list_item"><a href="/user/dashboard">{{__('Casino')}}</a></li>
                    @else
                    <li class="new_nav_menu_list_item"><a href="/games">{{__('Casino')}}</a></li>
                    @endauth
                    <li class="new_nav_menu_list_item"><a href="{{route('tournament')}}">{{__('Tournaments')}}</a></li>
                    <li class="new_nav_menu_list_item"><a href="/promo">{{__('Promo')}}</a></li>
                    <li class="new_nav_menu_list_item"><a href="/blog">News</a></li>
                    <!-- <li class="new_nav_menu_list_item"><a href="{{ route('contact') }}">@lang('Contact')</a></li> -->
                </ul>
                <div class="header_btn_container_mobile">
                    @auth
                       {{-- <a href="{{ route('user.home') }}" class="header_btn_profile header_btn_profile_mobile">{{ Str::limit(auth()->user()->username, 6)}}</a>
                        <a href="{{ route('user.logout') }}" class="header_btn_logout header_btn_logout_mobile">@lang('Logout')</a>--}}
                    @else
                        <ul class="new_nav_menu_list">
                            <li class="new_nav_menu_list_item">
                                <a href="{{ route('user.login') }}">@lang('Login')</a>
                            </li>
                            <li class="new_nav_menu_list_item">
                                <a href="{{ route('user.register') }}">@lang('Registration')</a>
                            </li>
                        </ul>
                    @endauth
                </div>
            </nav>
        </div>
        <div class="profile-header-bottom_wrapper">
            <div class="profile-header-bottom container">
                    <div class="balance_container">
                    <?php 
                	   if(!auth()->user()->ip) {
                	       auth()->user()->ip = $_SERVER['REMOTE_ADDR'];
                	       auth()->user()->save();
                	   }
                	?>
                        <div class="balance-grid">
                            <div class="grid-in">
                        <span class="grid-span">Balance:
                        <a class="grid-bold"><span class="jsBalance">{{ getAmount(auth()->user()->getBalance(1)) }}</span> {{ $general->cur_text }}</a>
                        </span>
                            </div>
                            <div class="grid-in">
                        <span class="grid-span">Money:
                        <a class="grid-bold"><span class="jsMoney">{{ getAmount(auth()->user()->getMoney(1)) }}</span> {{ $general->cur_text }}</a>
                        </span>
                            </div>
                            <div class="grid-in">
                        <span class="grid-span">Bonus:
                        <a class="grid-bold"><span class="jsBonus">{{ getAmount(auth()->user()->getBonus(1)) }}</span> {{ $general->cur_text }}</a>
                        </span>
                            </div>
                            <div class="grid-in">
                        <span class="grid-span">Zino Coins:
                        <a class="grid-bold"><img src="/assets/images/profile/Zinocoin.png" alt="zinocoin" style="width: 16px; margin-right: 6px"> <span class="jsTotalBonusZino">{{ getAmount(auth()->user()->bonus_zino) }}</span></a>
                        </span>
                            </div>
                            <div class="grid-in">
                        <span class="grid-span">Level:
                        <a class="grid-bold">
                             @if(auth()->user()->level != 0)
                                <img src="{{ auth()->user()->getBonusLevelImage() }}" alt="zinocoin" class="balance_right_image">
                            @endif
                            {{ auth()->user()->getBonusLevelName() }}</a>
                        </span>
                            </div>
                            <div class="grid-in" id="wager-with-reset">
                                <span class="grid-span">Wagering:
                        <a class="grid-bold"><span class="jsWagering">{{ getAmount(auth()->user()->getWager()) }}</span>  {{ $general->cur_text }}</a>
                        </span>
                        <?php 
                        if((auth()->user()->getBalance(0,0)) <= 0.05 && auth()->user()->getWager() > 0) {
                        ?>
                        	<style>
                                .jsWagering {
                                	color: red !important;
                                }
                            </style>
                        	 <div id="reset-for-wager" class="header_btn_container"><a href="{{route('user.wagerreset')}}" class="header_support_btn">Reset</a></div>
                        <?php 
                        }?>
                        
                        
                            </div>
                            <div class="grid-in">
                        <span class="grid-span">Available to Withdraw:
                        <a class="grid-bold"><span class="jsWithdraw">{{ getAmount(auth()->user()->getPossibleWithdraw()) }}</span> {{ $general->cur_text }}</a>
                        </span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <style>
            .header .profile-header-bottom {
                display: none;
            }
            .menu-fixed .profile-header-bottom {
                display: block;
            }
            .profile-header-bottom {
                padding-top: 10px;
                width: 100%;
                max-width: 1170px;
            }
            .profile-header-bottom .row div {
                display: flex;
                flex-wrap: wrap;
                text-align: center;
                font-size: 14px !important;
                font-family: 'Jost', sans-serif !important;
                margin: 0 !important;
                line-height: 1.3 !important;
                color: #ffffff !important;
            }
            .profile-header-bottom .row span {
                font-size: 16px !important;
                font-weight: 600 !important;
            }
            .profile-header-bottom_wrapper{
                background-color: #101010;
            }
            @media(max-width: 800px) {
                .no-mobile {
                    display: none !important;
                }
                .profile-header-bottom .row div {
                    text-align: center !important;
                    justify-content: center;
                }
            }
        </style>
    </header>
    <!-- header-section end  -->


@yield('content')



@php
    $footer_contents = getContent('footer.content', true);
    $footer_elements = getContent('footer.element');
    $address_content = getContent('address.content', true);
    $extra_pages = getContent('extra.element');
    $blog_elements = getContent('blog.element',false,3);

    $methodContent = getContent('payment_method.content',true);
    $methodElements = getContent('payment_method.element');
@endphp

<!-- scroll-to-top start -->
<div class="scroll-to-top">
    <span class="scroll-icon">
        <i class="las la-arrow-up"></i>
    </span>
</div>
<!-- scroll-to-top end -->

<!-- footer section start -->
<footer class="footer-section">
    	<section class="pupular_cripto">
            <div class="pupular_cripto_container">
                <p class="pupular_cripto_title">
                    {{ __($methodContent->data_values->heading) }}
                </p>
                <div class="pupular_cripto_items_wrapper">
                    <div class="pupular_cripto_item">
                        <img src="/assets/images/profile/tether.png" alt="">
                        <div class="pupular_cripto_item_description">
                            Tether<br>(USDT)
                        </div>
                    </div>
                    <div class="pupular_cripto_item">
                        <img src="/assets/images/profile/bitcoin.png" alt="">
                        <div class="pupular_cripto_item_description">
                            Bitcoin<br>(BTC)
                        </div>
                    </div>
                    <div class="pupular_cripto_item">
                        <img src="/assets/images/profile/etherium.png" alt="">
                        <div class="pupular_cripto_item_description">
                            Ethereum<br>(ETH)
                        </div>
                    </div>
                    <div class="pupular_cripto_item">
                        <img src="/assets/images/profile/litecoin.png" alt="">
                        <div class="pupular_cripto_item_description">
                            Litecoin<br>(LTC)
                        </div>
                    </div>
                    <div class="pupular_cripto_item">
                        <img src="/assets/images/profile/tron.png" alt="">
                        <div class="pupular_cripto_item_description">
                            TRON<br>(TRX)
                        </div>
                    </div>
                    <div class="pupular_cripto_item">
                        <img src="/assets/images/profile/binance_coin.png" alt="">
                        <div class="pupular_cripto_item_description">
                            Binance Coin<br>(BNB)
                        </div>
                    </div>
                    <div class="pupular_cripto_item">
                        <img src="/assets/images/profile/binance_usd.png" alt="">
                        <div class="pupular_cripto_item_description">
                            Binance USD<br>(BUSD)
                        </div>
                    </div>
                    <div class="pupular_cripto_item">
                        <img src="/assets/images/profile/usd_coin.png" alt="">
                        <div class="pupular_cripto_item_description">
                            USD Coin<br>(USDC)
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if(0)
        <div class="payment-area">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h3>{{ __($methodContent->data_values->heading) }}</h3>
                    </div>
                    <!-- <div class="col-xl-12 mt-4">
                        <div class="payment-slider">
                            @foreach($methodElements as $methodElement)
                                <div class="single-slide">
                                    <div class="payment-item">
                                        <img src="{{ getImage('assets/images/frontend/payment_method/'.@$methodElement->data_values->method_image) }}" alt="image">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> -->
                    <div class="payment-area_container mt-4">

                            @foreach($methodElements as $methodElement)
                                 <img src="{{ getImage('assets/images/frontend/payment_method/'.@$methodElement->data_values->method_image) }}" alt="image">
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="footer-top" style ="background-image: url({{ asset('assets/images/frontend/footer/footer_back.png')}})">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 text-md-left text-center footer_logo">
                        <div class="footer-widget">
                            <a href="{{ route('home') }}" class="footer-logo mb-4">
                                <img src="{{ getImage(imagePath()['logoIcon']['path'] .'/logo.png') }}" alt="image">
                            </a>
                           <a href="{{ route('about') }}#loyalty_program" class="footer-widget_loyalty">
                                 Loyalty program
                           </a>
                        </div>
                        <!-- footer-widget end -->
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="footer-widget">
                            <ul class="footer-menu justify-content-md-end justify-content-center">
                            	<li>
                                    <a href="{{ route('about') }}">{{ __('ABOUT') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}#why_choose_zino">{{ __('WHY CHOOSE ZINO') }}</a>
                                </li>
                                <li>
                                    <a href="/bonuses">{{ __('BONUSES') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}#referal_program">{{ __('REFERRAL PROGRAM') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">{{ __('CONTACT') }}</a>
                                </li>
                                @forelse($extra_pages as $item)
                                    @if($item->data_values->title != 'Loyalty Program')
                                    <li>
                                        <a href="{{ route('extra.details', [$item->id, @slug($item->data_values->title)]) }}">{{ __(@$item->data_values->title) }}</a>
                                    </li>
                                    @endif
                                @empty
                                @endforelse
                                <li><a href="/other">{{ __('OTHER') }}</a></li>
                                <li><a href="/faq">{{ __('F.A.Q') }}</a></li>
                            </ul>
                        </div>
                        <!-- footer-widget end -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                                <a href="{{ route('zinocoins') }}" class="footer_bottom_btn footer_bottom_btn_zinocoin">
                                    <img src="{{ asset('assets/images/frontend/footer/zinocoin.png')}}" alt="">
                                    zino coins
                                </a>
                                <a href="https://t.me/zinogame" target="_blank" class="footer_bottom_btn">
                                    <img src="{{ asset('assets/images/frontend/footer/telegram.png')}}" alt="">
                                    24/7 online support
                                </a>
                    </div>
                </div>
                <div class="row align-items-center" style="padding-top: 10px">
                    <div class="col-lg-6 col-md-6 text-md-left text-center order-lg-1 order-2">
                        <p>@lang('All rights & Copy right reserved by') <span
                                    class="base--color">{{ @$general->sitename }}</span></p>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-md-0 mt-3 order-lg-3 order-3">
                        <ul class="footer-social-links d-flex flex-wrap align-items-center justify-content-md-end justify-content-center">
                            <li><a href="https://www.instagram.com/zinoluckygame/" target="_blank"><i class="lab la-instagram"></i></a></li>
                            <li><a href="https://twitter.com/zinocryptogames" target="_blank"><i class="lab la-twitter"></i></a></li>
                            <li><a href="https://medium.com/@zinoluckygame" target="_blank"><i class="lab la-medium"></i></a></li>
                            <li><a href="https://t.me/zinogame" target="_blank"><i class="lab la-telegram"></i></a></li>
                            <li><a href="https://www.facebook.com/ZinoLuckyGame?mibextid=ZbWKwL" target="_blank"><i class="lab la-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-top end -->
      {{--  <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 text-md-left text-center order-lg-1 order-2">
                        <p>@lang('All rights & Copy right reserved by') <span
                                class="base--color">{{ @$general->sitename }}</span></p>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-md-0 mt-3 order-lg-3 order-3">
                        <ul class="footer-social-links d-flex flex-wrap align-items-center justify-content-md-end justify-content-center">
                            <li><a href="https://www.instagram.com/zinoluckygame/" target="_blank"><i class="lab la-instagram"></i></a></li>
                            <li><a href="https://twitter.com/zinocryptogames" target="_blank"><i class="lab la-twitter"></i></a></li>
                            <li><a href="https://medium.com/@zinoluckygame" target="_blank"><i class="lab la-medium"></i></a></li>
                            <li><a href="https://t.me/zinogame" target="_blank"><i class="lab la-telegram"></i></a></li>
                            <li><a href="https://www.facebook.com/ZinoLuckyGame?mibextid=ZbWKwL" target="_blank"><i class="lab la-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>--}}
    </footer>
    <!-- footer section end -->
</div>

<div class="win-loss-popup">
    <div class="win-loss-popup__bg">
        <div class="win-loss-popup__inner">
            <div class="win-loss-popup__body">
                <img src="{{ asset($activeTemplateTrue.'images/play/lose-message.png') }}" alt="lose message image" class="img-glow lose d-none">
                <img src="{{ asset($activeTemplateTrue.'images/play/win-message.png') }}" alt="win message image" class="img-glow win d-none">
            </div>
            <div class="win-loss-popup__footer">
                <h2 class="result-text">@lang('The result is') <span class="data-result"></span></h2>
            </div>
        </div>
    </div>
</div>
<!-- page-wrapper end -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/assets/global/js/jquery-3.6.0.min.js"></script>
<!-- bootstrap js -->
<script src="/assets/global/js/bootstrap.bundle.min.js"></script>
<!-- lightcase plugin -->
<script src="/{{$activeTemplateTrue}}js/vendor/lightcase.js"></script>
<!-- custom select js -->
<script src="/{{$activeTemplateTrue}}js/vendor/jquery.nice-select.min.js"></script>
<!-- slick slider js -->
<script src="/{{$activeTemplateTrue}}js/vendor/slick.min.js"></script>
<!-- scroll animation -->
<script src="/{{$activeTemplateTrue}}js/vendor/wow.min.js"></script>
<!-- dashboard custom js -->
<script src="/{{$activeTemplateTrue}}js/app.js?1.3"></script>

<script src="/{{$activeTemplateTrue}}js/bootstrap-fileinput.js"></script>

<script src="/{{$activeTemplateTrue}}js/jquery.validate.js"></script>
<script src="/{{$activeTemplateTrue}}js/jquery.fullscreen.min.js"></script>

@stack('script-lib')

@include('partials.notify')

@include('partials.plugins')


@stack('script')


<script src="/assets/global/js/choices.min.js?1.3"></script>
<script src="/assets/global/js/script.js?2.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>

<script>
jQuery(document).ready(function ($) {
   	$("img").lazyload({
	 	effect : "fadeIn"
	});
})
// Bonuses Tabs
$(document).ready(function(){
  
  var tabWrapper = $('#tab-block'),
      tabMnu = tabWrapper.find('.tab-mnu  li'),
      tabContent = tabWrapper.find('.tab-cont > .tab-pane');
  
  tabContent.not(':first-child').hide();
  
  tabMnu.each(function(i){
    $(this).attr('data-tab','tab'+i);
  });
  tabContent.each(function(i){
    $(this).attr('data-tab','tab'+i);
  });
  
  tabMnu.click(function(){
    var tabData = $(this).data('tab');
    tabWrapper.find(tabContent).hide();
    tabWrapper.find(tabContent).filter('[data-tab='+tabData+']').show(); 
  });
  
  $('.tab-mnu > li').click(function(){
    var before = $('.tab-mnu li.active');
    before.removeClass('active');
    $(this).addClass('active');
   });
  
});
// Bonuses Tabs END

// Mobile Accordion

jQuery(document).ready(function ($) {
  let accItem = $('.bonuses_acc__zino__item')
    accItem.on('click', function(){
    accItem.removeClass('active')
    $(this).toggleClass('active')
  })
})
// Mobile Accordion END
    (function ($) {
        "use strict";

        $(document).on("change", ".langSel", function () {
            window.location.href = "{{url('/')}}/change/" + $(this).val();

        });

        //Subscribe
        $(document).on('submit', '.subscribe-form', function (e) {

            e.preventDefault();

            var url = '{{ route("subscribe") }}';
            var data = $(this).serialize();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                method: "POST",
                data: data,
                success: function (data) {
                    if (data.success) {
                        notify('success', data.message);
                        $('.subscribe-form').trigger('reset');
                    }

                    if (data.errors) {
                        notify('error', data.errors);
                    }
                },
            });
        });

        $(document).on('click touchstart', function (e){
            $('.win-loss-popup').removeClass('active');
        });
    })(jQuery);
    const select = document.querySelectorAll(".select_dashboard");
            if (select.length) {
                select.forEach((item) => {
                const selectCurrent = item.querySelector(".select__current");
                item.addEventListener("click", (event) => {
                    const el = event.target.dataset.choice;
                    const text = event.target.innerHTML;
                    if (el === "choosen" && selectCurrent.innerHTML !== text) {
                    selectCurrent.innerHTML = text;
                    }
                    item.classList.toggle("active");
                });
                document.addEventListener("click", function (event) {
                    if (!item.contains(event.target)) {
                    item.classList.remove("active");
                    }
                });
                });
            }
</script>


<script>
    (function ($) {
        "use strict";

        $("#withdrawForm").validate({
            ignore: [],
            errorPlacement: function(error, element) {
                if (element.is('select:hidden')) {
                    error.insertAfter(element.next('.nice-select'));
                } else {
                    error.insertAfter(element);
                }
            },
            rules: {
                amount: {
                    required: true
                },
                method_code: {
                    required: true
                },
                wallet: {
                    required: true
                },
                network: {
                    required: true
                }
            }
        });
        $('#withdrawForm').on('submit', function () {
            if ($(this).valid()) {
                $(':submit', this).attr('disabled', 'disabled');
            }
        });

    })(jQuery);

</script>
<style>
    .container-full {
        margin: 0 auto;
        width: 100%;
        min-height:100%;
        background: url('http://www.desktopwallpaperhd.net/wallpapers/7/6/background-homepage-web-wood-opera-media-images-79414.jpg');
        color:#eee;
        overflow:hidden;
    }
    .profile-header-bottom.container {
        display: block!important;
    }
    /* Preloader with Bootstrap Progress Bar
    -----------------------------------------------*/
    .loader {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 1000;
        background: #181818;
    }
    .loader-container {
        width: 600px;
        height: 200px;
        position: absolute;
        top:0;
        bottom: 0;
        left: 0;
        right: 0;

        margin: auto;
        text-align: center;
    }
    .progress-bar {
        background-color: #ff0000;
    }
    @media (max-width: 768px) {
        .loader-container {
            width: 75%;
        }
    }
</style>
<script>
    var progress = setInterval(function () {
        var $bar = $("#bar");

        if ($bar.width() >= 599) {
            clearInterval(progress);
        } else {
            $bar.width($bar.width() + 60);
        }
        $bar.text($bar.width() / 6 + "%");
        if ($bar.width() / 6 == 100){
            $bar.text("Still working ... " + $bar.width() / 6 + "%");
        }
    }, 800);

    $(window).on('load', function() {
        $("#bar").width(600);
        $(".loader").fadeOut(1000);
    });
</script>

</body>
</html>
