<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ $general->sitename(__($pageTitle)) }}</title>
    @include('partials.seo')
    
     <link rel="shortcut icon" href="{{ getImage(imagePath()['logoIcon']['path'] .'/favicon_bongo.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="/assets/global/css/all.min.css">
    <link rel="stylesheet" href="/assets/global/css/countrySelect.css">
    <link rel="stylesheet" href="/assets/global/css/line-awesome.min.css">

    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="/assets/global/css/bootstrap.min.css?111">
    <!-- image and videos view on page plugin -->
    <link rel="stylesheet" href="/{{$activeTemplateTrue}}css/lightcase.css">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/vendor/swiper-bundle.min.css') }}">
    <!-- custom select css -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/vendor/nice-select.css') }}">
    <!-- slick slider css -->
    {{-- Так как на бонго не используеться слик слайдер, пока стили его я отключаю --}}
    {{-- <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/vendor/slick.css') }}"> --}}
    <!-- dashdoard main css -->

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap-fileinput.css')}}">
    <link rel="stylesheet" href="/{{$activeTemplateTrue}}css/style.css?<?php echo time() ?>">

    {{-- <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/custom.css')}}"> --}}

    <link rel="stylesheet"
          href="{{asset($activeTemplateTrue.'css/color.php')}}">
	<link rel="stylesheet" href="/assets/global/css/maindash.css?<?php echo time()?>">
	<link rel="stylesheet" href="/assets/global/css/stylepages.css?<?php echo time()?>">
    <link rel="stylesheet" href="/assets/global/css/choices.min.css">

    @stack('style-lib')
    <link rel="stylesheet" href="/assets/global/css/stylepages.css?<?php echo time() ?>">

    @stack('style')

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
<body class="bongo_body">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTCNM4F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

{{--
<div class="preloader">
    <div class="preloader__inner">
        <div class="preloader__thumb">
            <img  loading="lazy"   src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="imge" class="mt-3 loaderLogo">
            <img  loading="lazy"   src="{{ asset($activeTemplateTrue.'/images/preloader-dice.png') }}" alt="image" class="loadercircle">
        </div>
    </div>
</div>
--}}

<div class='loader'>
    <div class='loader-container'>
        <img  loading="lazy"   style="margin-bottom: 35px" src="/assets/images/logoIcon/preloader_img.png" alt=""/>
        <div class='progress progress-striped active'>
            <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
        </div>
    </div>
</div>

<div class="page-wrapper" id="main-scrollbar" data-scrollbar>
    <!-- Header -->
    @auth
    <header class="header">
        <div class="header__container">
            <div class="header_wrapper">
                <div class="header_left_mobile">
                    <div class="site_bar_burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="site_bar_logo">
                        <img  loading="lazy"   src="/images/logo.png" alt="">
                    </div>
                </div>
                <div class="header_left">
                    <div class="header_left_item header_left_item_user  header_btn_profile_desctop">
                        <p class="header_user">{{ Str::limit(auth()->user()->username, 10)}}</p>
                        <img  loading="lazy"   src="{{ asset('/assets/images/header_images/settings_icone.png') }}">
                        <div class="menu-drop">
                            
                            <ul class="header_list">
                                <li>
                                    <a href="{{ route('user.home') }}">@lang('Dashboard')</a>
                                    <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <span class="total-dep-span">@lang('Total deposit'):</span>
                                            <span class="total-dep-bold">{{ getAmount(auth()->user()->deposits->where('status',1)->sum('amount')) }} {{ $general->cur_text }}</span>
                                        </div>
                                        <div class="dash-in">
                                            <span class="total-dep-span">@lang('Total withdraw'):</span>
                                            <span class="total-dep-bold">{{ getAmount(auth()->user()->withdrawals->where('status',1)->sum('amount')) }} {{ $general->cur_text }}</span>
                                        </div>
                                        <div class="dash-in">
                                            <span class="total-dep-span">@lang('Total bonus'):</span>
                                            <span class="total-dep-bold">{{ getAmount(auth()->user()->transactions->where('remark', 'bonus')->sum('amount')) }} {{ $general->cur_text }}</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{ route('user.deposit') }}">@lang('Deposit')</a>
                                    <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('user.deposit') }}" class="total-dep-span">@lang('Deposit money')</a>
                                        </div>
                                        <div class="dash-in">
                                            <a href="{{ route('user.deposit.history') }}" class="total-dep-span">@lang('History')</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{ route('user.withdraw') }}">@lang('Withdraw')</a>
                                    <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('user.withdraw') }}" class="total-dep-span">@lang('Withdraw')</a>
                                        </div>
                                        <div class="dash-in">
                                            <a href="{{ route('user.withdraw.history') }}" class="total-dep-span">@lang('Withdraw History')</a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('user.referrals') }}">@lang('Referrals')</a></li>
                                <li><a href="#">@lang('reports')</a>
                                    <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('user.gameLog') }}" class="total-dep-span">@lang('Game Log')</a>
                                        </div>
                                        <div class="dash-in">
                                            <a href="{{ route('user.commissionLog') }}" class="total-dep-span">@lang('Commission Log')</a>
                                        </div>
                                        <div class="dash-in">
                                            <a href="{{ route('user.transactions') }}" class="total-dep-span">@lang('Transactions')</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">@lang('Support')</a>
                                    <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('ticket.open') }}" class="total-dep-span">@lang('Create New')</a>
                                        </div>
                                        <div class="dash-in">
                                            <a href="{{ route('ticket') }}" class="total-dep-span">@lang('My Tickets')</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">@lang('Account')</a>
                                    <div class="modal-li dashboard-li">
                                        <div class="dash-in">
                                            <a href="{{ route('user.change.password') }}" class="total-dep-span">@lang('Change Password')</a>
                                        </div>
                                        <div class="dash-in">
                                            <a href="{{ route('user.profile.setting') }}" class="total-dep-span">@lang('Profile Setting')</a>
                                        </div>
                                        <div class="dash-in">
                                            <a href="{{ route('user.twofactor') }}" class="total-dep-span">@lang('2FA Security')</a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('user.logout') }}">@lang('Log out')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header_left_item header_left_user_btn header_left_item_user header_btn_profile_mobile">
                        <img  loading="lazy"   src="https://dev.zino-game.com/assets/images/header_images/settings_icone.png">
                    </div>
                    <?php
                    $adminNotifications = App\Models\Notification::where('user_id', auth()->user()->id)->where('viewed', 0)->count();
                    $userNotify = App\Models\UserNotification::where('user_id', auth()->user()->id)->where('viewed', 0)->count();
                    $broadcastNotify = App\Models\UserNotification::whereNull('user_id')->count();
                    $total   = $adminNotifications + $userNotify + $broadcastNotify; ?>
                    <div class="header_left_item header_left_item_not ">
                        <button type="button" class="primary--layer" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" style="background-color: transparent;">
                            <img  loading="lazy"   src="{{ asset('/assets/images/header_images/notification_icone.png') }}">
                        </button>
                        <span class="caption">- {{ $total }}</span>
                        @if($total > 0)

                        @endif
                        <div class="header_left_icone_not dropdown">
                            <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
                                <div class="dropdown-menu__header">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="19" viewBox="0 0 16 19">
                                        <image id="notification-svgrepo-com" width="16" height="19" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAATCAYAAACZZ43PAAABPUlEQVQ4jaXSrUttQRQF8J9fIH6AH+UFo6BRRJ5BtAgmq09sChbF9hDE9CyvXAw2m+I/YNFoUQQRsya7Fp+IoO3JcPeV4zn3XBQXDDN7Zu01a8+epoc9ZZjCfpwt4rQer5HAJe5i/QM/Cwy0Fnaq6EI3WiLuiL3nPLE5F7dhC/cYxmiM4djbCk7dEtpxhOmCn484wSxe8w62M8k3+IV+VHIC08H9UMIQVmJ9hXH04RCrBQ9V7lBWYCGVE+tl/MZutLKzkF7lppz3LozEfItrnBdSihjJOuiJ+T9mSm7No0edNg5GJz6NvMCXURMo+5GN0ForIfV5ogGxDCmnkn7iv8wjfhWPycHFN57gItUxjyX0Zg42cRYjYTLG3wwnOd9LAk/YySkPYA7HEY/hAH/yFspefw0v2Ig4Ja8XWHgDU2Uxudl7VxQAAAAASUVORK5CYII=" />
                                    </svg>
                                    <span class="caption">- {{ $total }} @lang('Notifications')</span>
                                    @if($total > 0)

                                    @else
                                    <p>@lang('No notification found')</p>
                                    @endif
                                </div>
                            <p class="notification-text"><a href="{{ route('user.notifications') }}" class="view-all-message">@lang('View all notification')</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_right">
                <div class="header_right_item">
                    @lang('Balance'):
                    <span><span class="jsBalance">{{ getAmount(auth()->user()->getBalance(1)) }}</span> {{ $general->cur_text }}</span>
                </div>
                <div class="header_right_item">
                    @lang('Money'):
                    <span><span class="jsMoney">{{ getAmount(auth()->user()->getMoney(1)) }}</span> {{ $general->cur_text }}</span>
                </div>
                <div class="header_right_item">
                    @lang('Bonus'):
                    <span><span class="jsBonus">{{ getAmount(auth()->user()->getBonus(1)) }}</span> {{ $general->cur_text }}</span>
                </div>
                <div class="header_right_item">
                    @lang('Level'):
                    <span>
                        @if(auth()->user()->level != 0)
                        <img  loading="lazy"   src="{{ auth()->user()->getBonusLevelImage() }}" alt="zinocoin" class="balance_right_image">
                        @endif
                        {{ auth()->user()->getBonusLevelName() }}</span>
                </div>
                <div class="header_right_item">
                    <div class="grid-in" id="wager-with-reset">
                        @lang('Wagering'):
                        <span class="jsWagering">{{ getAmount(auth()->user()->getWager()) }} {{ $general->cur_text }}</span>

                        <?php
                        if ((auth()->user()->getBalance(0,0)) <= 0.05 && auth()->user()->getWager() > 0) {
                        ?>
                            <style>
                                .jsWagering {
                                    color: red !important;
                                }
                            </style>
                            <div id="reset-for-wager" class="header_btn_container"><a href="{{route('user.wagerreset')}}" class="header_support_btn">Reset</a></div>
                        <?php
                        } ?>
                    </div>
                </div>
                <div class="header_right_item">
                    @lang('Available to Withdraw'):
                    <span class="jsWithdraw">{{ getAmount(auth()->user()->getPossibleWithdraw()) }}</span> {{ $general->cur_text }}
                </div>
            </div>
            <div class="header_mobile_menu">
                <div class="header_mobile_menu_wrapper">
                    @auth
                    <a href="{{ route('user.deposit') }}" class="header_mobile_btn main_btn_green">@lang('Deposit')</a>
                    @else 
                    <a href="{{ route('user.register') }}" class="header_mobile_btn main_btn_green">@lang('SING UP')</a>
                    @endauth
                    <ul class="site_bar_nav">
                        <li class="site_bar_nav_item 
                        <?php if( (request()->is('user/dashboard')) ||  (request()->is('user/games/slots')) ||  (request()->is('user/games/live')) ||  (request()->is('user/games/lottery'))){
                            echo 'active';
                        }?>
                        " title="Casino"><a href="/games">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="20px" height="20px" version="1.1" viewBox="0 0 31.985 31.969" xml:space="preserve">
                                <g id="ace">
                                    <path d="M11.939,6c0,0-5.275,2.729-6.636,6.834c-0.693,2.455-0.064,3.951,0.563,4.76c0.75,0.971,1.979,1.549,3.288,1.549   c0.635,0,1.243-0.195,1.779-0.498l-0.314,2.777c-0.021,0.131,0.02,0.293,0.109,0.393c0.087,0.1,0.217,0.186,0.352,0.186h1.95   c0.135,0,0.264-0.086,0.352-0.186c0.089-0.1,0.129-0.247,0.109-0.378l-0.299-2.681c0.518,0.244,1.088,0.391,1.647,0.391   c1.308,0,2.538-0.581,3.289-1.552c0.626-0.807,1.255-2.306,0.562-4.761C17.333,8.729,11.939,6,11.939,6z"/>
                                    <path d="M30.559,4.104L24,2.14V2c0-1.104-0.896-2-2-2H2C0.896,0,0,0.896,0,2v25c0,1.104,0.896,2,2,2h10.611l9.627,2.884   c1.058,0.317,2.173-0.284,2.489-1.342l7.174-23.948C32.218,5.536,31.616,4.421,30.559,4.104z M2,2h20v25H2V2z"/>
                                </g>
                                </svg>
                            <span> {{__('Casino')}}</span>
                            <span class="arrow"></span></a>
                            <ul class="site_bar_children"> 
                                <li class="site_bar_nav_item {{ (request()->is('user/dashboard')) ? 'active' : '' }}" title="Extra bonuses"><a href="/user/dashboard">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="18px" height="18px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                        <path fill="none" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265  C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642  c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854  c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72  c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"/>
                                        </svg>
                                    <span>@lang('Extra bonuses')</span>
                                  </a></li>
                                <li class="site_bar_nav_item {{ (request()->is('user/games/slots')) ? 'active' : '' }}"  title="Games"><a href="/user/games/slots">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"  width="20px" height="20px" viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true"><path d="m 12.324082,8.1685 -0.05633,0.1972 -0.211224,0.063 -0.213551,0.066 0.211224,0.061 0.211225,0.063 0.06098,0.2113 0.06098,0.2088 0.06575,-0.2112 0.06343,-0.2135 0.19947,-0.054 c 0.108,-0.03 0.190163,-0.063 0.178408,-0.073 -0.0094,-0.01 -0.08914,-0.035 -0.173633,-0.059 -0.08682,-0.021 -0.168979,-0.047 -0.183061,-0.056 -0.01408,-0.01 -0.04922,-0.096 -0.07739,-0.1925 -0.02816,-0.094 -0.05633,-0.1831 -0.06576,-0.1925 -0.0095,-0.01 -0.04004,0.07 -0.07053,0.1808 z M 1.483429,7.2203 C 1.413019,7.462 1.415349,7.455 1.382531,7.4668 c -0.01641,0 -0.110327,0.033 -0.206572,0.061 L 1,7.5818 1.197143,7.6428 c 0.110326,0.035 0.206571,0.078 0.218326,0.096 0.0094,0.019 0.04224,0.1126 0.07041,0.2089 l 0.05167,0.1761 0.05865,-0.1925 c 0.03282,-0.1057 0.07041,-0.2018 0.07984,-0.2112 0.01176,-0.01 0.105673,-0.045 0.211224,-0.078 L 2.079753,7.5811 1.892039,7.5271 C 1.788814,7.4961 1.694896,7.4641 1.680814,7.4521 1.669054,7.4401 1.629144,7.3418 1.596324,7.2362 L 1.535094,7.0437 1.483424,7.2197 Z M 5.623551,5.9365 C 5.316082,6.0398 4.952286,6.3379 4.839633,6.582 l -0.05633,0.122 -0.335633,0 -0.335632,0 L 3.75767,6.9834 C 2.929181,7.6359 2.497303,8.0935 2.236854,8.6004 2.023303,9.0182 1.955221,9.4241 2.030283,9.849 l 0.02584,0.1526 1.037388,0.01 1.037388,0 0.02584,-0.1338 C 4.245879,9.4248 4.457106,8.9484 4.757596,8.5188 4.921922,8.2841 4.940657,8.2466 4.978249,8.0636 5.104984,7.4557 5.464126,6.7586 5.949882,6.1743 6.083718,6.0147 6.118861,5.9607 6.095351,5.9467 6.029591,5.9087 5.7198,5.9047 5.623555,5.9347 Z M 12.432082,4.918 c -0.06808,0.075 -0.347388,0.2089 -0.521021,0.2511 -0.201796,0.049 -0.699428,0.052 -0.941143,0 L 10.798612,5.1361 10.582735,5.3614 C 10.324612,5.629 10.148531,5.8285 9.967796,6.0655 l -0.133714,0.1737 0.206571,0.066 c 0.227633,0.075 0.504612,0.1337 0.661837,0.1431 l 0.103224,0.01 L 10.432612,6.74 C 9.730857,7.2681 9.12302,7.8148 8.939959,8.0801 c -0.08216,0.1197 -0.180735,0.596 -0.201796,0.988 -0.01641,0.2722 0.0023,0.8449 0.02816,0.9153 0.0094,0.026 0.255795,0.03 1.377673,0.03 1.288531,0 1.363592,0 1.347184,-0.042 C 11.41612,9.7812 11.333955,9.4926 11.301016,9.3095 11.249346,9.0044 11.265746,8.3543 11.336286,8.0586 11.531102,7.2207 11.993469,6.4509 12.753878,5.6975 L 13,5.4536 12.739429,5.1625 C 12.596286,5.0053 12.478857,4.8739 12.476531,4.8739 c -0.0023,0 -0.02339,0.021 -0.04445,0.045 z m -11.162204,0.8355 0,0.9739 0.455265,0 c 0.431877,0 0.457714,0 0.471796,-0.044 0.02351,-0.075 0.345061,-0.3615 0.485877,-0.4319 0.07273,-0.038 0.187715,-0.073 0.262898,-0.08 l 0.131388,-0.014 0,-0.6806 0,-0.6806 -0.194816,0.012 c -0.131388,0.01 -0.241715,0.033 -0.347388,0.075 -0.08449,0.033 -0.176082,0.061 -0.204122,0.061 -0.06098,0 -0.122082,-0.059 -0.122082,-0.1197 0,-0.042 -0.02106,-0.045 -0.469347,-0.045 l -0.469469,0 0,0.9741 z m 2.065346,-0.6806 0,1.3729 0.640776,0 0.638327,0 0.0469,-0.082 C 4.719877,6.2535 5.015595,5.9742 5.194003,5.8592 5.597717,5.5965 5.900411,5.5893 6.635105,5.8242 7.095146,5.9697 7.346289,6.026 7.616166,6.0448 l 0.229959,0.014 -0.396734,0.2981 c -0.852,0.6336 -1.488,1.1687 -1.891592,1.5889 -0.849551,0.8848 -1.227429,1.7062 -1.182857,2.5699 0.0094,0.1572 0.03049,0.3474 0.0469,0.4248 l 0.03049,0.1408 2.189755,0.01 c 1.750898,0 2.187306,0 2.178,-0.023 C 8.587801,10.5378 8.477474,9.9887 8.475148,9.3667 8.472848,7.8506 9.174576,6.3932 10.566332,5.0155 L 10.934781,4.6517 10.573311,4.248 C 10.373842,4.025 10.204862,3.8443 10.19776,3.8443 c -0.0071,0 -0.05865,0.038 -0.110326,0.084 C 9.95127,4.0456 9.653229,4.1841 9.402087,4.2475 9.219025,4.2945 9.132209,4.3015 8.744903,4.2995 8.155801,4.2995 7.975066,4.2645 6.949434,3.9662 5.989556,3.6845 5.569434,3.6634 5.060168,3.8653 4.961598,3.9053 4.855923,3.9383 4.82776,3.9383 4.75735,3.9383 4.672862,3.8443 4.672862,3.767 l 0,-0.063 -0.668939,0 -0.668938,0 0,1.3731 z M 5.801837,4.1834 c 0.05633,0.068 -0.0047,0.1127 -0.183061,0.1409 -0.08914,0.012 -0.227633,0.049 -0.30747,0.077 -0.154898,0.059 -0.215877,0.045 -0.215877,-0.044 0,-0.061 0.04922,-0.092 0.239387,-0.1549 0.204245,-0.066 0.420123,-0.075 0.467021,-0.019 z m 0.267551,6.4049 0,0.07 -0.612612,0.01 c -0.657184,0.01 -0.69,0 -0.654858,-0.1127 0.01408,-0.047 0.02584,-0.047 0.640653,-0.042 l 0.626694,0.01 0,0.07 z M 8.827061,3.0826 c -0.02816,0.1009 -0.06331,0.1948 -0.07984,0.2089 -0.01408,0.014 -0.09392,0.045 -0.178408,0.068 -0.234734,0.063 -0.237061,0.07 -0.01408,0.1314 l 0.204122,0.056 0.06343,0.2112 0.06588,0.2089 0.054,-0.1854 c 0.03049,-0.1032 0.06331,-0.1994 0.07506,-0.2112 0.01176,-0.014 0.110327,-0.052 0.215878,-0.084 L 9.425593,3.4254 9.249511,3.3734 C 9.153271,3.3454 9.059348,3.3144 9.040613,3.3054 9.021883,3.2954 8.981963,3.2045 8.953793,3.1012 8.923303,3.0003 8.895143,2.9134 8.890363,2.9087 c -0.0045,0 -0.03269,0.075 -0.06331,0.1737 z"/></svg>
                                    <span>@lang('Games')
                                      </span> </a></li>
                                <li class="site_bar_nav_item {{ (request()->is('user/games/live')) ? 'active' : '' }}" title="Live casino"><a href="/user/games/live">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"width="20px" height="20px" version="1.1" id="Icons" viewBox="0 0 32 32" xml:space="preserve">
                                        <path d="M26.6,5.4C26.6,5.4,26.6,5.4,26.6,5.4C26.6,5.4,26.6,5.4,26.6,5.4C23.9,2.7,20.1,1,16,1S8.1,2.7,5.4,5.4c0,0,0,0,0,0  s0,0,0,0C2.7,8.1,1,11.9,1,16s1.7,7.9,4.4,10.6c0,0,0,0,0,0s0,0,0,0C8.1,29.3,11.9,31,16,31s7.9-1.7,10.6-4.4c0,0,0,0,0,0s0,0,0,0  C29.3,23.9,31,20.1,31,16S29.3,8.1,26.6,5.4z M25.9,7.6c1.7,2,2.9,4.6,3.1,7.4h-2c-0.2-2.3-1.1-4.4-2.5-6L25.9,7.6z M15,3.1v2  c-2.3,0.2-4.4,1.1-6,2.5L7.6,6.1C9.6,4.4,12.2,3.3,15,3.1z M6.1,24.4c-1.7-2-2.9-4.6-3.1-7.4h2c0.2,2.3,1.1,4.4,2.5,6L6.1,24.4z   M5.1,15h-2c0.2-2.8,1.3-5.4,3.1-7.4L7.6,9C6.2,10.6,5.3,12.7,5.1,15z M15,28.9c-2.8-0.2-5.4-1.3-7.4-3.1L9,24.4  c1.7,1.4,3.8,2.3,6,2.5V28.9z M16,22c-0.3,0-0.6-0.1-0.8-0.4l-4-5c-0.3-0.4-0.3-0.9,0-1.2l4-5c0.4-0.5,1.2-0.5,1.6,0l4,5  c0.3,0.4,0.3,0.9,0,1.2l-4,5C16.6,21.9,16.3,22,16,22z M17,28.9v-2c2.3-0.2,4.4-1.1,6-2.5l1.4,1.4C22.4,27.6,19.8,28.7,17,28.9z   M23,7.6c-1.7-1.4-3.8-2.3-6-2.5v-2c2.8,0.2,5.4,1.3,7.4,3.1L23,7.6z M25.9,24.4L24.4,23c1.4-1.7,2.3-3.8,2.5-6h2  C28.7,19.8,27.6,22.4,25.9,24.4z"/>
                                        </svg>
                                    <span>@lang('Live Casino')
                                    </span> </a></li>
                                <li class="site_bar_nav_item {{ (request()->is('user/games/lottery')) ? 'active' : '' }}" title="Lottery"><a href="/user/games/lottery">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                                        <path d="M16.6487 3.85938H9.90865V6.87938C9.90865 7.26938 9.58865 7.57938 9.20865 7.57938C8.82865 7.57938 8.50865 7.26938 8.50865 6.87938V3.85938H7.34865C3.39865 3.85938 2.09865 5.03937 2.00865 8.72937C1.99865 8.90937 2.07865 9.09937 2.20865 9.22937C2.33865 9.36937 2.50865 9.43937 2.70865 9.43937C4.10865 9.43937 5.25865 10.5994 5.25865 11.9994C5.25865 13.3994 4.10865 14.5594 2.70865 14.5594C2.51865 14.5594 2.33865 14.6294 2.20865 14.7694C2.07865 14.8994 1.99865 15.0894 2.00865 15.2694C2.09865 18.9594 3.39865 20.1394 7.34865 20.1394H8.50865V17.1194C8.50865 16.7294 8.82865 16.4194 9.20865 16.4194C9.58865 16.4194 9.90865 16.7294 9.90865 17.1194V20.1394H16.6487C20.7487 20.1394 21.9987 18.8894 21.9987 14.7894V9.20938C21.9987 5.10938 20.7487 3.85938 16.6487 3.85938ZM18.4687 11.8994L17.5387 12.7994C17.4987 12.8294 17.4887 12.8894 17.4987 12.9394L17.7187 14.2094C17.7587 14.4394 17.6687 14.6794 17.4687 14.8194C17.2787 14.9594 17.0287 14.9794 16.8187 14.8694L15.6687 14.2694C15.6287 14.2494 15.5687 14.2494 15.5287 14.2694L14.3787 14.8694C14.2887 14.9194 14.1887 14.9394 14.0887 14.9394C13.9587 14.9394 13.8387 14.8994 13.7287 14.8194C13.5387 14.6794 13.4387 14.4494 13.4787 14.2094L13.6987 12.9394C13.7087 12.8894 13.6887 12.8394 13.6587 12.7994L12.7287 11.8994C12.5587 11.7394 12.4987 11.4894 12.5687 11.2694C12.6387 11.0394 12.8287 10.8794 13.0687 10.8494L14.3487 10.6594C14.3987 10.6494 14.4387 10.6194 14.4687 10.5794L15.0387 9.41938C15.1487 9.20938 15.3587 9.07938 15.5987 9.07938C15.8387 9.07938 16.0487 9.20938 16.1487 9.41938L16.7187 10.5794C16.7387 10.6294 16.7787 10.6594 16.8287 10.6594L18.1087 10.8494C18.3487 10.8794 18.5387 11.0494 18.6087 11.2694C18.6987 11.4894 18.6387 11.7294 18.4687 11.8994Z" fill="#292D32"/>
                                        </svg>
                                    <span>@lang('Lottery')</span> </a></li>
                            </ul>
                        </li>
                        <li class="site_bar_nav_item {{ request()->is('sport') ? 'active':'' }}" title="Sport"><a href="{{route('sport')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20px" height="20px" viewBox="0 0 512 512">
                                <g id="Sport">
                                <path d="M256,46.5544c-115.98,0-210,94.0209-210,210,11.0614,278.5613,408.9813,278.4822,420-.0011C466,140.5753,371.98,46.5544,256,46.5544Zm13.1314,64.0816,43.3441-28.8626a184.32,184.32,0,0,1,92.236,67.287L390.73,198.9456,322.2637,220.89l-53.1323-39.0514ZM199.5266,81.7734l43.3548,28.8679v71.192L189.7405,220.89l-68.47-21.9487-13.98-49.8832A184.2945,184.2945,0,0,1,199.5266,81.7734Zm-91.7,282.996a182.38,182.38,0,0,1-35.564-108.4681l40.9409-32.3831L181.6186,245.85,202.03,309.3984,159.6816,366.89Zm205.2255,66.3535c-35.6088,12.1391-78.5,12.137-114.1089-.0011l-18.0682-48.7359,42.4084-57.5736h65.437l42.4,57.5757Zm91.1188-66.3524-51.8549,2.1213L309.974,309.3994l20.4138-63.5507,68.4107-21.9263,40.9387,32.381A182.3643,182.3643,0,0,1,404.1711,364.7705Z"/>
                                </g>
                                </svg>
                            <span>{{__('Sport')}}</span></a></li>
                        <li class="site_bar_nav_item {{ request()->is('tournament') ? 'active':'' }}" title="tournament"><a href="{{route('tournament')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20px" width="20px" version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
                                <g>
                                    <path class="st0" d="M493.379,55.416c-11.458-11.479-27.441-18.63-44.952-18.62h-29.049h-14.736H107.358H92.632H63.573   c-17.502-0.01-33.494,7.142-44.952,18.62C7.142,66.874-0.01,82.866,0,100.368v33.297c0,40.979,24.949,77.828,62.994,93.045   l0.569,0.225l66.065,20.24c3.286,4.258,6.75,8.427,10.615,12.41c24.537,25.233,48.386,42.177,64.82,55.931   c8.221,6.848,14.481,12.881,18.15,18.013c1.854,2.561,3.08,4.846,3.856,6.956c0.766,2.119,1.128,4.061,1.128,6.327   c0,31.983,0,13.5,0,45.483c0,6.612-0.932,12.292-2.482,16.982c-2.364,7.054-5.954,11.831-10.37,15.089   c-4.455,3.218-10.007,5.141-17.424,5.17c-26.449,0-26.704,0-26.724,0h-14.736v45.669h199.078v-45.669h-14.736c0,0-0.265,0-26.715,0   c-4.945,0-9.075-0.893-12.577-2.403c-5.23-2.306-9.282-5.916-12.47-11.528c-3.139-5.602-5.238-13.372-5.238-23.31   c0-31.983,0-13.5,0-45.483c0.009-2.266,0.373-4.208,1.128-6.327c1.324-3.66,4.179-8.016,9.046-13.107   c7.23-7.653,18.65-16.541,32.267-27.382c13.616-10.88,29.402-23.84,45.511-40.41c3.866-3.983,7.338-8.152,10.616-12.41   l66.074-20.24l0.56-0.225C487.061,211.494,512,174.644,512,133.665v-33.297C512.01,82.866,504.867,66.874,493.379,55.416z    M73.55,199.191c-26.646-10.841-44.089-36.732-44.089-65.526v-33.297c0.01-9.458,3.797-17.904,9.987-24.115   c6.23-6.201,14.657-9.987,24.125-9.997h29.01c-0.03,6.858-0.07,13.725-0.07,20.554c0.02,31.59,0.736,62.749,6.956,92.22   c2.237,10.556,5.229,20.887,9.154,30.903L73.55,199.191z M181.733,225.101c0,0-42.696-40.185-42.696-80.369s0-77.858,0-77.858   h42.696V225.101z M482.548,133.665c0,28.794-17.453,54.685-44.099,65.526l-35.093,10.742c6.672-16.992,10.596-34.916,12.882-53.301   c2.815-22.682,3.237-46.13,3.247-69.823c0-6.828-0.04-13.696-0.069-20.554h29.01c9.468,0.01,17.904,3.796,24.124,9.997   c6.191,6.21,9.988,14.647,9.998,24.115V133.665z"/>
                                </g>
                                </svg>                            
                            <span>{{__('Tournaments')}}</span></a></li>
                        <li class="site_bar_nav_item {{ request()->is('promo') ? 'active':'' }}" title="Promo"><a href="/promo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 1024 1024"><path fill="none" d="M640 832H64V640a128 128 0 1 0 0-256V192h576v160h64V192h256v192a128 128 0 1 0 0 256v192H704V672h-64v160zm0-416v192h64V416h-64z"/></svg>
                            <span>{{__('Promo')}}</span> </a></li>
                        <li class="site_bar_nav_item  {{ request()->is('blog') ? 'active':'' }}" title="News"><a href="/blog">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 481 370" fill="none">
                                <path d="M467.4 0.200195H89C81.8 0.200195 75.4 6.6002 75.4 13.8002V295.4C75.4 306.6 65 315.4 53.8 313.8C44.2 312.2 37.8 303.4 37.8 294.6V93.0002C37.8 87.4002 33.8 83.4002 28.2 83.4002H14.6C7.40001 83.4002 1 89.8002 1 97.0002V332.2C1 352.2 17.8 369 37.8 369H74.6H444.2C464.2 369 481 352.2 481 332.2V14.6002C481 6.6002 474.6 0.200195 467.4 0.200195ZM259.4 268.2C259.4 273.8 255.4 277.8 249.8 277.8H139.4C133.8 277.8 129.8 273.8 129.8 268.2V249.8C129.8 244.2 133.8 240.2 139.4 240.2H249.8C255.4 240.2 259.4 244.2 259.4 249.8V268.2ZM259.4 194.6C259.4 200.2 255.4 204.2 249.8 204.2H139.4C133.8 204.2 129.8 200.2 129.8 194.6V176.2C129.8 170.6 133.8 166.6 139.4 166.6H249.8C255.4 166.6 259.4 170.6 259.4 176.2V194.6ZM425.8 268.2C425.8 273.8 421.8 277.8 416.2 277.8H305.8C300.2 277.8 296.2 273.8 296.2 268.2V249.8C296.2 244.2 300.2 240.2 305.8 240.2H416.2C421.8 240.2 425.8 244.2 425.8 249.8V268.2ZM425.8 194.6C425.8 200.2 421.8 204.2 416.2 204.2H305.8C300.2 204.2 296.2 200.2 296.2 194.6V176.2C296.2 170.6 300.2 166.6 305.8 166.6H416.2C421.8 166.6 425.8 170.6 425.8 176.2V194.6ZM425.8 120.2C425.8 125.8 421.8 129.8 416.2 129.8H139.4C133.8 129.8 129.8 125.8 129.8 120.2V65.0002C129.8 59.4002 133.8 55.4002 139.4 55.4002H416.2C421.8 55.4002 425.8 59.4002 425.8 65.0002V120.2Z" fill="black"/>
                                </svg>
                            <span>@lang('News')</span> </a></li>
                        <li class="site_bar_nav_item {{ request()->is('blog') ? 'active':'' }}" title="Suport 24/7"><a href="https://t.me/+-yvMy2qDtJk1NDAy" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" fill="none" version="1.1" id="Layer_1" viewBox="0 0 24 24" xml:space="preserve">
                            <path d="M19.2,4.4L2.9,10.7c-1.1,0.4-1.1,1.1-0.2,1.3l4.1,1.3l1.6,4.8c0.2,0.5,0.1,0.7,0.6,0.7c0.4,0,0.6-0.2,0.8-0.4  c0.1-0.1,1-1,2-2l4.2,3.1c0.8,0.4,1.3,0.2,1.5-0.7l2.8-13.1C20.6,4.6,19.9,4,19.2,4.4z M17.1,7.4l-7.8,7.1L9,17.8L7.4,13l9.2-5.8  C17,6.9,17.4,7.1,17.1,7.4z"/>
                            <rect y="0" class="st0" width="24" height="24" fill="none"/>
                            </svg><span>@lang('Suport 24/7')</span> </a></li>
                    </ul>
                    @auth
                    <a href="{{ route('user.withdraw') }}" class="header_mobile_btn main_btn">@lang('Withdraw')</a>
                    @else 
                    <a href="{{ route('user.login') }}" class="header_mobile_btn main_btn">@lang('SIGN IN')</a>
                    @endauth
                </div>

            </div>
            <div class="header_user_menu">
                <div class="header_user_menu_wrapper">
                    <div class="header_right">
                        <div class="header_right__menu">
                            <div class="header_right_item">
                                @lang('Balance'):
                                <span><span class="jsBalance">{{ getAmount(auth()->user()->getBalance(1)) }}</span> {{ $general->cur_text }}</span>
                            </div>
                            <div class="header_right_item">
                                @lang('Money'):
                                <span><span class="jsMoney">{{ getAmount(auth()->user()->getMoney(1)) }}</span> {{ $general->cur_text }}</span>
                            </div>
                            <div class="header_right_item">
                                @lang('Bonus'):
                                <span><span class="jsBonus">{{ getAmount(auth()->user()->getBonus(1)) }}</span> {{ $general->cur_text }}</span>
                            </div>
                            <div class="header_right_item">
                                @lang('Level'):
                                <span>
                                    @if(auth()->user()->level != 0)
                                    <img  loading="lazy"   src="{{ auth()->user()->getBonusLevelImage() }}" alt="zinocoin" class="balance_right_image">
                                    @endif
                                    {{ auth()->user()->getBonusLevelName() }}</span>
                            </div>
                            <div class="header_right_item">
                                <div class="grid-in" id="wager-with-reset">
                                    @lang('Wagering'):
                                    <span class="jsWagering">{{ getAmount(auth()->user()->getWager()) }} {{ $general->cur_text }}</span>
            
                                    <?php
                                    if ((auth()->user()->getBalance(0,0)) <= 0.05 && auth()->user()->getWager() > 0) {
                                    ?>
                                        <style>
                                            .jsWagering {
                                                color: red !important;
                                            }
                                        </style>
                                        <div id="reset-for-wager" class="header_btn_container"><a href="{{route('user.wagerreset')}}" class="header_support_btn">@lang('Reset')</a></div>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                            <div class="header_right_item">
                                @lang('Available to Withdraw'):
                                <span class="jsWithdraw">{{ getAmount(auth()->user()->getPossibleWithdraw()) }}</span> {{ $general->cur_text }}
                            </div>
                        </div>

                    </div>
                    <div class="header_balance__menu">+</div>
                    <a href="{{ route('user.home') }}" class="header_mobile_btn main_btn_green">@lang('Dashboard')</a>
                    <a href="{{ route('user.deposit') }}" class="header_mobile_btn main_btn_green">@lang('Deposit')</a>
                    <a href="{{ route('user.withdraw') }}" class="header_mobile_btn main_btn">@lang('windraw')</a>
                    
                    <ul class="header_user_menu_list">
                        <li class="header_user_menu_list_item"><a href="{{ route('user.referrals') }}">@lang('Referrals')</a></li>
                        <li class="header_user_menu_list_item"><a href="#">@lang('reports')</a></li>
                        <li class="header_user_menu_list_item"><a href="#">@lang('Support')</a></li>
                        <li class="header_user_menu_list_item"><a href="#">@lang('Account')</a></li>
                        <li class="header_user_menu_list_item"><a href="{{ route('user.logout') }}">@lang('logout')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </header>
    @endauth

<!-- Header END-->
@guest
<!-- Header NOT AUTH-->
<header class="header not_auth">
    <div class="header__container">
      <div class="header_wrapper">
        <div class="header_left_mobile">
          <div class="site_bar_burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="site_bar_logo">
            <img src="{{ asset('assets/images/logoIcon/bongo_logo.png') }}" alt="Bongo">
          </div>
        </div>
        <div class="header_right">
            <a href="{{ route('user.register') }}" class="not_auth_btn main_btn_green">@lang('Register')</a>
        </div>
        
        <div class="header_mobile_menu">
            <div class="header_mobile_menu_wrapper">
                @auth
                <a href="{{ route('user.deposit') }}" class="header_mobile_btn main_btn_green">@lang('Deposit')</a>
                @else 
                <a href="{{ route('user.register') }}" class="header_mobile_btn main_btn_green">@lang('SING UP')</a>
                @endauth
                <ul class="site_bar_nav">
                    <li class="site_bar_nav_item 
                    <?php if( (request()->is('user/dashboard')) ||  (request()->is('user/games/slots')) ||  (request()->is('user/games/live')) ||  (request()->is('user/games/lottery'))){
                        echo 'active';
                    }?>
                    " title="Casino"><a href="/games">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="20px" height="20px" version="1.1" viewBox="0 0 31.985 31.969" xml:space="preserve">
                            <g id="ace">
                                <path d="M11.939,6c0,0-5.275,2.729-6.636,6.834c-0.693,2.455-0.064,3.951,0.563,4.76c0.75,0.971,1.979,1.549,3.288,1.549   c0.635,0,1.243-0.195,1.779-0.498l-0.314,2.777c-0.021,0.131,0.02,0.293,0.109,0.393c0.087,0.1,0.217,0.186,0.352,0.186h1.95   c0.135,0,0.264-0.086,0.352-0.186c0.089-0.1,0.129-0.247,0.109-0.378l-0.299-2.681c0.518,0.244,1.088,0.391,1.647,0.391   c1.308,0,2.538-0.581,3.289-1.552c0.626-0.807,1.255-2.306,0.562-4.761C17.333,8.729,11.939,6,11.939,6z"/>
                                <path d="M30.559,4.104L24,2.14V2c0-1.104-0.896-2-2-2H2C0.896,0,0,0.896,0,2v25c0,1.104,0.896,2,2,2h10.611l9.627,2.884   c1.058,0.317,2.173-0.284,2.489-1.342l7.174-23.948C32.218,5.536,31.616,4.421,30.559,4.104z M2,2h20v25H2V2z"/>
                            </g>
                            </svg>
                        <span> {{__('Casino')}}</span>
                        <span class="arrow"></span></a>
                        <ul class="site_bar_children"> 
                            <li class="site_bar_nav_item {{ (request()->is('user/dashboard')) ? 'active' : '' }}" title="Extra bonuses"><a href="/user/dashboard">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="18px" height="18px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                    <path fill="none" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265  C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642  c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854  c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72  c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"/>
                                    </svg>
                                <span>@lang('Extra bonuses')</span>
                              </a></li>
                            <li class="site_bar_nav_item {{ (request()->is('user/games/slots')) ? 'active' : '' }}"  title="Games"><a href="/user/games/slots">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"  width="20px" height="20px" viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true"><path d="m 12.324082,8.1685 -0.05633,0.1972 -0.211224,0.063 -0.213551,0.066 0.211224,0.061 0.211225,0.063 0.06098,0.2113 0.06098,0.2088 0.06575,-0.2112 0.06343,-0.2135 0.19947,-0.054 c 0.108,-0.03 0.190163,-0.063 0.178408,-0.073 -0.0094,-0.01 -0.08914,-0.035 -0.173633,-0.059 -0.08682,-0.021 -0.168979,-0.047 -0.183061,-0.056 -0.01408,-0.01 -0.04922,-0.096 -0.07739,-0.1925 -0.02816,-0.094 -0.05633,-0.1831 -0.06576,-0.1925 -0.0095,-0.01 -0.04004,0.07 -0.07053,0.1808 z M 1.483429,7.2203 C 1.413019,7.462 1.415349,7.455 1.382531,7.4668 c -0.01641,0 -0.110327,0.033 -0.206572,0.061 L 1,7.5818 1.197143,7.6428 c 0.110326,0.035 0.206571,0.078 0.218326,0.096 0.0094,0.019 0.04224,0.1126 0.07041,0.2089 l 0.05167,0.1761 0.05865,-0.1925 c 0.03282,-0.1057 0.07041,-0.2018 0.07984,-0.2112 0.01176,-0.01 0.105673,-0.045 0.211224,-0.078 L 2.079753,7.5811 1.892039,7.5271 C 1.788814,7.4961 1.694896,7.4641 1.680814,7.4521 1.669054,7.4401 1.629144,7.3418 1.596324,7.2362 L 1.535094,7.0437 1.483424,7.2197 Z M 5.623551,5.9365 C 5.316082,6.0398 4.952286,6.3379 4.839633,6.582 l -0.05633,0.122 -0.335633,0 -0.335632,0 L 3.75767,6.9834 C 2.929181,7.6359 2.497303,8.0935 2.236854,8.6004 2.023303,9.0182 1.955221,9.4241 2.030283,9.849 l 0.02584,0.1526 1.037388,0.01 1.037388,0 0.02584,-0.1338 C 4.245879,9.4248 4.457106,8.9484 4.757596,8.5188 4.921922,8.2841 4.940657,8.2466 4.978249,8.0636 5.104984,7.4557 5.464126,6.7586 5.949882,6.1743 6.083718,6.0147 6.118861,5.9607 6.095351,5.9467 6.029591,5.9087 5.7198,5.9047 5.623555,5.9347 Z M 12.432082,4.918 c -0.06808,0.075 -0.347388,0.2089 -0.521021,0.2511 -0.201796,0.049 -0.699428,0.052 -0.941143,0 L 10.798612,5.1361 10.582735,5.3614 C 10.324612,5.629 10.148531,5.8285 9.967796,6.0655 l -0.133714,0.1737 0.206571,0.066 c 0.227633,0.075 0.504612,0.1337 0.661837,0.1431 l 0.103224,0.01 L 10.432612,6.74 C 9.730857,7.2681 9.12302,7.8148 8.939959,8.0801 c -0.08216,0.1197 -0.180735,0.596 -0.201796,0.988 -0.01641,0.2722 0.0023,0.8449 0.02816,0.9153 0.0094,0.026 0.255795,0.03 1.377673,0.03 1.288531,0 1.363592,0 1.347184,-0.042 C 11.41612,9.7812 11.333955,9.4926 11.301016,9.3095 11.249346,9.0044 11.265746,8.3543 11.336286,8.0586 11.531102,7.2207 11.993469,6.4509 12.753878,5.6975 L 13,5.4536 12.739429,5.1625 C 12.596286,5.0053 12.478857,4.8739 12.476531,4.8739 c -0.0023,0 -0.02339,0.021 -0.04445,0.045 z m -11.162204,0.8355 0,0.9739 0.455265,0 c 0.431877,0 0.457714,0 0.471796,-0.044 0.02351,-0.075 0.345061,-0.3615 0.485877,-0.4319 0.07273,-0.038 0.187715,-0.073 0.262898,-0.08 l 0.131388,-0.014 0,-0.6806 0,-0.6806 -0.194816,0.012 c -0.131388,0.01 -0.241715,0.033 -0.347388,0.075 -0.08449,0.033 -0.176082,0.061 -0.204122,0.061 -0.06098,0 -0.122082,-0.059 -0.122082,-0.1197 0,-0.042 -0.02106,-0.045 -0.469347,-0.045 l -0.469469,0 0,0.9741 z m 2.065346,-0.6806 0,1.3729 0.640776,0 0.638327,0 0.0469,-0.082 C 4.719877,6.2535 5.015595,5.9742 5.194003,5.8592 5.597717,5.5965 5.900411,5.5893 6.635105,5.8242 7.095146,5.9697 7.346289,6.026 7.616166,6.0448 l 0.229959,0.014 -0.396734,0.2981 c -0.852,0.6336 -1.488,1.1687 -1.891592,1.5889 -0.849551,0.8848 -1.227429,1.7062 -1.182857,2.5699 0.0094,0.1572 0.03049,0.3474 0.0469,0.4248 l 0.03049,0.1408 2.189755,0.01 c 1.750898,0 2.187306,0 2.178,-0.023 C 8.587801,10.5378 8.477474,9.9887 8.475148,9.3667 8.472848,7.8506 9.174576,6.3932 10.566332,5.0155 L 10.934781,4.6517 10.573311,4.248 C 10.373842,4.025 10.204862,3.8443 10.19776,3.8443 c -0.0071,0 -0.05865,0.038 -0.110326,0.084 C 9.95127,4.0456 9.653229,4.1841 9.402087,4.2475 9.219025,4.2945 9.132209,4.3015 8.744903,4.2995 8.155801,4.2995 7.975066,4.2645 6.949434,3.9662 5.989556,3.6845 5.569434,3.6634 5.060168,3.8653 4.961598,3.9053 4.855923,3.9383 4.82776,3.9383 4.75735,3.9383 4.672862,3.8443 4.672862,3.767 l 0,-0.063 -0.668939,0 -0.668938,0 0,1.3731 z M 5.801837,4.1834 c 0.05633,0.068 -0.0047,0.1127 -0.183061,0.1409 -0.08914,0.012 -0.227633,0.049 -0.30747,0.077 -0.154898,0.059 -0.215877,0.045 -0.215877,-0.044 0,-0.061 0.04922,-0.092 0.239387,-0.1549 0.204245,-0.066 0.420123,-0.075 0.467021,-0.019 z m 0.267551,6.4049 0,0.07 -0.612612,0.01 c -0.657184,0.01 -0.69,0 -0.654858,-0.1127 0.01408,-0.047 0.02584,-0.047 0.640653,-0.042 l 0.626694,0.01 0,0.07 z M 8.827061,3.0826 c -0.02816,0.1009 -0.06331,0.1948 -0.07984,0.2089 -0.01408,0.014 -0.09392,0.045 -0.178408,0.068 -0.234734,0.063 -0.237061,0.07 -0.01408,0.1314 l 0.204122,0.056 0.06343,0.2112 0.06588,0.2089 0.054,-0.1854 c 0.03049,-0.1032 0.06331,-0.1994 0.07506,-0.2112 0.01176,-0.014 0.110327,-0.052 0.215878,-0.084 L 9.425593,3.4254 9.249511,3.3734 C 9.153271,3.3454 9.059348,3.3144 9.040613,3.3054 9.021883,3.2954 8.981963,3.2045 8.953793,3.1012 8.923303,3.0003 8.895143,2.9134 8.890363,2.9087 c -0.0045,0 -0.03269,0.075 -0.06331,0.1737 z"/></svg>
                                <span>@lang('Games')
                                  </span> </a></li>
                            <li class="site_bar_nav_item {{ (request()->is('user/games/live')) ? 'active' : '' }}" title="Live casino"><a href="/user/games/live">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"width="20px" height="20px" version="1.1" id="Icons" viewBox="0 0 32 32" xml:space="preserve">
                                    <path d="M26.6,5.4C26.6,5.4,26.6,5.4,26.6,5.4C26.6,5.4,26.6,5.4,26.6,5.4C23.9,2.7,20.1,1,16,1S8.1,2.7,5.4,5.4c0,0,0,0,0,0  s0,0,0,0C2.7,8.1,1,11.9,1,16s1.7,7.9,4.4,10.6c0,0,0,0,0,0s0,0,0,0C8.1,29.3,11.9,31,16,31s7.9-1.7,10.6-4.4c0,0,0,0,0,0s0,0,0,0  C29.3,23.9,31,20.1,31,16S29.3,8.1,26.6,5.4z M25.9,7.6c1.7,2,2.9,4.6,3.1,7.4h-2c-0.2-2.3-1.1-4.4-2.5-6L25.9,7.6z M15,3.1v2  c-2.3,0.2-4.4,1.1-6,2.5L7.6,6.1C9.6,4.4,12.2,3.3,15,3.1z M6.1,24.4c-1.7-2-2.9-4.6-3.1-7.4h2c0.2,2.3,1.1,4.4,2.5,6L6.1,24.4z   M5.1,15h-2c0.2-2.8,1.3-5.4,3.1-7.4L7.6,9C6.2,10.6,5.3,12.7,5.1,15z M15,28.9c-2.8-0.2-5.4-1.3-7.4-3.1L9,24.4  c1.7,1.4,3.8,2.3,6,2.5V28.9z M16,22c-0.3,0-0.6-0.1-0.8-0.4l-4-5c-0.3-0.4-0.3-0.9,0-1.2l4-5c0.4-0.5,1.2-0.5,1.6,0l4,5  c0.3,0.4,0.3,0.9,0,1.2l-4,5C16.6,21.9,16.3,22,16,22z M17,28.9v-2c2.3-0.2,4.4-1.1,6-2.5l1.4,1.4C22.4,27.6,19.8,28.7,17,28.9z   M23,7.6c-1.7-1.4-3.8-2.3-6-2.5v-2c2.8,0.2,5.4,1.3,7.4,3.1L23,7.6z M25.9,24.4L24.4,23c1.4-1.7,2.3-3.8,2.5-6h2  C28.7,19.8,27.6,22.4,25.9,24.4z"/>
                                    </svg>
                                <span>@lang('Live Casino')
                                </span> </a></li>
                            <li class="site_bar_nav_item {{ (request()->is('user/games/lottery')) ? 'active' : '' }}" title="Lottery"><a href="/user/games/lottery">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                                    <path d="M16.6487 3.85938H9.90865V6.87938C9.90865 7.26938 9.58865 7.57938 9.20865 7.57938C8.82865 7.57938 8.50865 7.26938 8.50865 6.87938V3.85938H7.34865C3.39865 3.85938 2.09865 5.03937 2.00865 8.72937C1.99865 8.90937 2.07865 9.09937 2.20865 9.22937C2.33865 9.36937 2.50865 9.43937 2.70865 9.43937C4.10865 9.43937 5.25865 10.5994 5.25865 11.9994C5.25865 13.3994 4.10865 14.5594 2.70865 14.5594C2.51865 14.5594 2.33865 14.6294 2.20865 14.7694C2.07865 14.8994 1.99865 15.0894 2.00865 15.2694C2.09865 18.9594 3.39865 20.1394 7.34865 20.1394H8.50865V17.1194C8.50865 16.7294 8.82865 16.4194 9.20865 16.4194C9.58865 16.4194 9.90865 16.7294 9.90865 17.1194V20.1394H16.6487C20.7487 20.1394 21.9987 18.8894 21.9987 14.7894V9.20938C21.9987 5.10938 20.7487 3.85938 16.6487 3.85938ZM18.4687 11.8994L17.5387 12.7994C17.4987 12.8294 17.4887 12.8894 17.4987 12.9394L17.7187 14.2094C17.7587 14.4394 17.6687 14.6794 17.4687 14.8194C17.2787 14.9594 17.0287 14.9794 16.8187 14.8694L15.6687 14.2694C15.6287 14.2494 15.5687 14.2494 15.5287 14.2694L14.3787 14.8694C14.2887 14.9194 14.1887 14.9394 14.0887 14.9394C13.9587 14.9394 13.8387 14.8994 13.7287 14.8194C13.5387 14.6794 13.4387 14.4494 13.4787 14.2094L13.6987 12.9394C13.7087 12.8894 13.6887 12.8394 13.6587 12.7994L12.7287 11.8994C12.5587 11.7394 12.4987 11.4894 12.5687 11.2694C12.6387 11.0394 12.8287 10.8794 13.0687 10.8494L14.3487 10.6594C14.3987 10.6494 14.4387 10.6194 14.4687 10.5794L15.0387 9.41938C15.1487 9.20938 15.3587 9.07938 15.5987 9.07938C15.8387 9.07938 16.0487 9.20938 16.1487 9.41938L16.7187 10.5794C16.7387 10.6294 16.7787 10.6594 16.8287 10.6594L18.1087 10.8494C18.3487 10.8794 18.5387 11.0494 18.6087 11.2694C18.6987 11.4894 18.6387 11.7294 18.4687 11.8994Z" fill="#292D32"/>
                                    </svg>
                                <span>@lang('Lottery')</span> </a></li>
                        </ul>
                    </li>
                    <li class="site_bar_nav_item {{ request()->is('sport') ? 'active':'' }}" title="Sport"><a href="{{route('sport')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20px" height="20px" viewBox="0 0 512 512">
                            <g id="Sport">
                            <path d="M256,46.5544c-115.98,0-210,94.0209-210,210,11.0614,278.5613,408.9813,278.4822,420-.0011C466,140.5753,371.98,46.5544,256,46.5544Zm13.1314,64.0816,43.3441-28.8626a184.32,184.32,0,0,1,92.236,67.287L390.73,198.9456,322.2637,220.89l-53.1323-39.0514ZM199.5266,81.7734l43.3548,28.8679v71.192L189.7405,220.89l-68.47-21.9487-13.98-49.8832A184.2945,184.2945,0,0,1,199.5266,81.7734Zm-91.7,282.996a182.38,182.38,0,0,1-35.564-108.4681l40.9409-32.3831L181.6186,245.85,202.03,309.3984,159.6816,366.89Zm205.2255,66.3535c-35.6088,12.1391-78.5,12.137-114.1089-.0011l-18.0682-48.7359,42.4084-57.5736h65.437l42.4,57.5757Zm91.1188-66.3524-51.8549,2.1213L309.974,309.3994l20.4138-63.5507,68.4107-21.9263,40.9387,32.381A182.3643,182.3643,0,0,1,404.1711,364.7705Z"/>
                            </g>
                            </svg>
                        <span>{{__('Sport')}}</span></a></li>
                    <li class="site_bar_nav_item {{ request()->is('tournament') ? 'active':'' }}" title="Tournaments"><a href="{{route('tournament')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20px" width="20px" version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
                            <style type="text/css">
                            </style>
                            <g>
                                <path class="st0" d="M493.379,55.416c-11.458-11.479-27.441-18.63-44.952-18.62h-29.049h-14.736H107.358H92.632H63.573   c-17.502-0.01-33.494,7.142-44.952,18.62C7.142,66.874-0.01,82.866,0,100.368v33.297c0,40.979,24.949,77.828,62.994,93.045   l0.569,0.225l66.065,20.24c3.286,4.258,6.75,8.427,10.615,12.41c24.537,25.233,48.386,42.177,64.82,55.931   c8.221,6.848,14.481,12.881,18.15,18.013c1.854,2.561,3.08,4.846,3.856,6.956c0.766,2.119,1.128,4.061,1.128,6.327   c0,31.983,0,13.5,0,45.483c0,6.612-0.932,12.292-2.482,16.982c-2.364,7.054-5.954,11.831-10.37,15.089   c-4.455,3.218-10.007,5.141-17.424,5.17c-26.449,0-26.704,0-26.724,0h-14.736v45.669h199.078v-45.669h-14.736c0,0-0.265,0-26.715,0   c-4.945,0-9.075-0.893-12.577-2.403c-5.23-2.306-9.282-5.916-12.47-11.528c-3.139-5.602-5.238-13.372-5.238-23.31   c0-31.983,0-13.5,0-45.483c0.009-2.266,0.373-4.208,1.128-6.327c1.324-3.66,4.179-8.016,9.046-13.107   c7.23-7.653,18.65-16.541,32.267-27.382c13.616-10.88,29.402-23.84,45.511-40.41c3.866-3.983,7.338-8.152,10.616-12.41   l66.074-20.24l0.56-0.225C487.061,211.494,512,174.644,512,133.665v-33.297C512.01,82.866,504.867,66.874,493.379,55.416z    M73.55,199.191c-26.646-10.841-44.089-36.732-44.089-65.526v-33.297c0.01-9.458,3.797-17.904,9.987-24.115   c6.23-6.201,14.657-9.987,24.125-9.997h29.01c-0.03,6.858-0.07,13.725-0.07,20.554c0.02,31.59,0.736,62.749,6.956,92.22   c2.237,10.556,5.229,20.887,9.154,30.903L73.55,199.191z M181.733,225.101c0,0-42.696-40.185-42.696-80.369s0-77.858,0-77.858   h42.696V225.101z M482.548,133.665c0,28.794-17.453,54.685-44.099,65.526l-35.093,10.742c6.672-16.992,10.596-34.916,12.882-53.301   c2.815-22.682,3.237-46.13,3.247-69.823c0-6.828-0.04-13.696-0.069-20.554h29.01c9.468,0.01,17.904,3.796,24.124,9.997   c6.191,6.21,9.988,14.647,9.998,24.115V133.665z"/>
                            </g>
                            </svg>                            
                        <span>{{__('Tournaments')}}</span></a></li>
                    <li class="site_bar_nav_item {{ request()->is('promo') ? 'active':'' }}" title="Promo"><a href="/promo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 1024 1024"><path fill="none" d="M640 832H64V640a128 128 0 1 0 0-256V192h576v160h64V192h256v192a128 128 0 1 0 0 256v192H704V672h-64v160zm0-416v192h64V416h-64z"/></svg>
                        <span>{{__('Promo')}}</span> </a></li>
                    <li class="site_bar_nav_item  {{ request()->is('blog') ? 'active':'' }}" title="News"><a href="/blog">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 481 370" fill="none">
                            <path d="M467.4 0.200195H89C81.8 0.200195 75.4 6.6002 75.4 13.8002V295.4C75.4 306.6 65 315.4 53.8 313.8C44.2 312.2 37.8 303.4 37.8 294.6V93.0002C37.8 87.4002 33.8 83.4002 28.2 83.4002H14.6C7.40001 83.4002 1 89.8002 1 97.0002V332.2C1 352.2 17.8 369 37.8 369H74.6H444.2C464.2 369 481 352.2 481 332.2V14.6002C481 6.6002 474.6 0.200195 467.4 0.200195ZM259.4 268.2C259.4 273.8 255.4 277.8 249.8 277.8H139.4C133.8 277.8 129.8 273.8 129.8 268.2V249.8C129.8 244.2 133.8 240.2 139.4 240.2H249.8C255.4 240.2 259.4 244.2 259.4 249.8V268.2ZM259.4 194.6C259.4 200.2 255.4 204.2 249.8 204.2H139.4C133.8 204.2 129.8 200.2 129.8 194.6V176.2C129.8 170.6 133.8 166.6 139.4 166.6H249.8C255.4 166.6 259.4 170.6 259.4 176.2V194.6ZM425.8 268.2C425.8 273.8 421.8 277.8 416.2 277.8H305.8C300.2 277.8 296.2 273.8 296.2 268.2V249.8C296.2 244.2 300.2 240.2 305.8 240.2H416.2C421.8 240.2 425.8 244.2 425.8 249.8V268.2ZM425.8 194.6C425.8 200.2 421.8 204.2 416.2 204.2H305.8C300.2 204.2 296.2 200.2 296.2 194.6V176.2C296.2 170.6 300.2 166.6 305.8 166.6H416.2C421.8 166.6 425.8 170.6 425.8 176.2V194.6ZM425.8 120.2C425.8 125.8 421.8 129.8 416.2 129.8H139.4C133.8 129.8 129.8 125.8 129.8 120.2V65.0002C129.8 59.4002 133.8 55.4002 139.4 55.4002H416.2C421.8 55.4002 425.8 59.4002 425.8 65.0002V120.2Z" fill="black"/>
                            </svg>
                        <span>@lang('News')</span> </a></li>
                    <li class="site_bar_nav_item {{ request()->is('blog') ? 'active':'' }}" title="Suport 24/7"><a href="https://t.me/+-yvMy2qDtJk1NDAy" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" fill="none" version="1.1" id="Layer_1" viewBox="0 0 24 24" xml:space="preserve">
                        <path d="M19.2,4.4L2.9,10.7c-1.1,0.4-1.1,1.1-0.2,1.3l4.1,1.3l1.6,4.8c0.2,0.5,0.1,0.7,0.6,0.7c0.4,0,0.6-0.2,0.8-0.4  c0.1-0.1,1-1,2-2l4.2,3.1c0.8,0.4,1.3,0.2,1.5-0.7l2.8-13.1C20.6,4.6,19.9,4,19.2,4.4z M17.1,7.4l-7.8,7.1L9,17.8L7.4,13l9.2-5.8  C17,6.9,17.4,7.1,17.1,7.4z"/>
                        <rect y="0" class="st0" width="24" height="24" fill="none"/>
                        </svg><span>@lang('Suport 24/7')</span> </a></li>
                </ul>
                @auth
                <a href="{{ route('user.withdraw') }}" class="header_mobile_btn main_btn">@lang('Withdraw')</a>
                @else 
                <a href="{{ route('user.login') }}" class="header_mobile_btn main_btn">@lang('SIGN IN')</a>
                @endauth
            </div>

        </div>

      </div>
    </div>
  </header>
  <!-- Header NOT AUTH END-->
@endguest

             <!-- Site Bar -->
             <div class="site_bar">
                <div class="site_bar_container">
                    <div class="site_bar_top">
                        <div class="site_bar_logo">
                            <a href="{{ route('home') }}"><img  loading="lazy"   src="{{ asset('assets/images/logoIcon/bongo_logo.png') }}" alt="Bongo" ></a>
                        </div> 
                        <div class="site_bar_top_wrapper">
                            <div class="site_bar_burger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        @auth
                        <a href="{{ route('user.deposit') }}" class="site_bar_btn main_btn_green">+</a>
                        @else 
                        <a href="{{ route('user.register') }}" class="site_bar_btn main_btn_green">+</a>
                        @endauth 
                    </div>
                   
                    <div class="site_bar_bottom">
                        @auth
                        <a href="{{ route('user.deposit') }}" class="site_bar_btn main_btn_green">@lang('Deposit')</a>
                        <a href="{{ route('user.withdraw') }}" class="site_bar_btn main_btn">@lang('Withdraw')</a>
                        @else 
                        <a href="{{ route('user.register') }}" class="site_bar_btn main_btn_green">@lang('SING UP')</a>
                        <a href="{{ route('user.login') }}" class="site_bar_btn main_btn">@lang('SIGN IN')</a>
                        @endauth
                    </div>
                    {{-- Site Bar Navigation --}}
                    <ul class="site_bar_nav">
                        <li class="site_bar_nav_item 
                        <?php if( (request()->is('user/dashboard')) ||  (request()->is('user/games/slots')) ||  (request()->is('user/games/live')) ||  (request()->is('user/games/lottery'))){
                            echo 'active';
                        }?>
                        " title="Casino"><a href="/games">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="20px" height="20px" version="1.1" viewBox="0 0 31.985 31.969" xml:space="preserve">
                                <g id="ace">
                                    <path d="M11.939,6c0,0-5.275,2.729-6.636,6.834c-0.693,2.455-0.064,3.951,0.563,4.76c0.75,0.971,1.979,1.549,3.288,1.549   c0.635,0,1.243-0.195,1.779-0.498l-0.314,2.777c-0.021,0.131,0.02,0.293,0.109,0.393c0.087,0.1,0.217,0.186,0.352,0.186h1.95   c0.135,0,0.264-0.086,0.352-0.186c0.089-0.1,0.129-0.247,0.109-0.378l-0.299-2.681c0.518,0.244,1.088,0.391,1.647,0.391   c1.308,0,2.538-0.581,3.289-1.552c0.626-0.807,1.255-2.306,0.562-4.761C17.333,8.729,11.939,6,11.939,6z"/>
                                    <path d="M30.559,4.104L24,2.14V2c0-1.104-0.896-2-2-2H2C0.896,0,0,0.896,0,2v25c0,1.104,0.896,2,2,2h10.611l9.627,2.884   c1.058,0.317,2.173-0.284,2.489-1.342l7.174-23.948C32.218,5.536,31.616,4.421,30.559,4.104z M2,2h20v25H2V2z"/>
                                </g>
                                </svg>
                            <span> {{__('Casino')}}</span>
                            <span class="arrow"></span></a>
                            <ul class="site_bar_children"> 
                                <li class="site_bar_nav_item {{ (request()->is('user/dashboard')) ? 'active' : '' }}" title="Extra bonuses"><a href="/user/dashboard">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="18px" height="18px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                        <path fill="none" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265  C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642  c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854  c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72  c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"/>
                                        </svg>
                                    <span>@lang('Extra bonuses')</span>
                                  </a></li>
                                <li class="site_bar_nav_item {{ (request()->is('user/games/slots')) ? 'active' : '' }}"  title="Games"><a href="/user/games/slots">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"  width="20px" height="20px" viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true"><path d="m 12.324082,8.1685 -0.05633,0.1972 -0.211224,0.063 -0.213551,0.066 0.211224,0.061 0.211225,0.063 0.06098,0.2113 0.06098,0.2088 0.06575,-0.2112 0.06343,-0.2135 0.19947,-0.054 c 0.108,-0.03 0.190163,-0.063 0.178408,-0.073 -0.0094,-0.01 -0.08914,-0.035 -0.173633,-0.059 -0.08682,-0.021 -0.168979,-0.047 -0.183061,-0.056 -0.01408,-0.01 -0.04922,-0.096 -0.07739,-0.1925 -0.02816,-0.094 -0.05633,-0.1831 -0.06576,-0.1925 -0.0095,-0.01 -0.04004,0.07 -0.07053,0.1808 z M 1.483429,7.2203 C 1.413019,7.462 1.415349,7.455 1.382531,7.4668 c -0.01641,0 -0.110327,0.033 -0.206572,0.061 L 1,7.5818 1.197143,7.6428 c 0.110326,0.035 0.206571,0.078 0.218326,0.096 0.0094,0.019 0.04224,0.1126 0.07041,0.2089 l 0.05167,0.1761 0.05865,-0.1925 c 0.03282,-0.1057 0.07041,-0.2018 0.07984,-0.2112 0.01176,-0.01 0.105673,-0.045 0.211224,-0.078 L 2.079753,7.5811 1.892039,7.5271 C 1.788814,7.4961 1.694896,7.4641 1.680814,7.4521 1.669054,7.4401 1.629144,7.3418 1.596324,7.2362 L 1.535094,7.0437 1.483424,7.2197 Z M 5.623551,5.9365 C 5.316082,6.0398 4.952286,6.3379 4.839633,6.582 l -0.05633,0.122 -0.335633,0 -0.335632,0 L 3.75767,6.9834 C 2.929181,7.6359 2.497303,8.0935 2.236854,8.6004 2.023303,9.0182 1.955221,9.4241 2.030283,9.849 l 0.02584,0.1526 1.037388,0.01 1.037388,0 0.02584,-0.1338 C 4.245879,9.4248 4.457106,8.9484 4.757596,8.5188 4.921922,8.2841 4.940657,8.2466 4.978249,8.0636 5.104984,7.4557 5.464126,6.7586 5.949882,6.1743 6.083718,6.0147 6.118861,5.9607 6.095351,5.9467 6.029591,5.9087 5.7198,5.9047 5.623555,5.9347 Z M 12.432082,4.918 c -0.06808,0.075 -0.347388,0.2089 -0.521021,0.2511 -0.201796,0.049 -0.699428,0.052 -0.941143,0 L 10.798612,5.1361 10.582735,5.3614 C 10.324612,5.629 10.148531,5.8285 9.967796,6.0655 l -0.133714,0.1737 0.206571,0.066 c 0.227633,0.075 0.504612,0.1337 0.661837,0.1431 l 0.103224,0.01 L 10.432612,6.74 C 9.730857,7.2681 9.12302,7.8148 8.939959,8.0801 c -0.08216,0.1197 -0.180735,0.596 -0.201796,0.988 -0.01641,0.2722 0.0023,0.8449 0.02816,0.9153 0.0094,0.026 0.255795,0.03 1.377673,0.03 1.288531,0 1.363592,0 1.347184,-0.042 C 11.41612,9.7812 11.333955,9.4926 11.301016,9.3095 11.249346,9.0044 11.265746,8.3543 11.336286,8.0586 11.531102,7.2207 11.993469,6.4509 12.753878,5.6975 L 13,5.4536 12.739429,5.1625 C 12.596286,5.0053 12.478857,4.8739 12.476531,4.8739 c -0.0023,0 -0.02339,0.021 -0.04445,0.045 z m -11.162204,0.8355 0,0.9739 0.455265,0 c 0.431877,0 0.457714,0 0.471796,-0.044 0.02351,-0.075 0.345061,-0.3615 0.485877,-0.4319 0.07273,-0.038 0.187715,-0.073 0.262898,-0.08 l 0.131388,-0.014 0,-0.6806 0,-0.6806 -0.194816,0.012 c -0.131388,0.01 -0.241715,0.033 -0.347388,0.075 -0.08449,0.033 -0.176082,0.061 -0.204122,0.061 -0.06098,0 -0.122082,-0.059 -0.122082,-0.1197 0,-0.042 -0.02106,-0.045 -0.469347,-0.045 l -0.469469,0 0,0.9741 z m 2.065346,-0.6806 0,1.3729 0.640776,0 0.638327,0 0.0469,-0.082 C 4.719877,6.2535 5.015595,5.9742 5.194003,5.8592 5.597717,5.5965 5.900411,5.5893 6.635105,5.8242 7.095146,5.9697 7.346289,6.026 7.616166,6.0448 l 0.229959,0.014 -0.396734,0.2981 c -0.852,0.6336 -1.488,1.1687 -1.891592,1.5889 -0.849551,0.8848 -1.227429,1.7062 -1.182857,2.5699 0.0094,0.1572 0.03049,0.3474 0.0469,0.4248 l 0.03049,0.1408 2.189755,0.01 c 1.750898,0 2.187306,0 2.178,-0.023 C 8.587801,10.5378 8.477474,9.9887 8.475148,9.3667 8.472848,7.8506 9.174576,6.3932 10.566332,5.0155 L 10.934781,4.6517 10.573311,4.248 C 10.373842,4.025 10.204862,3.8443 10.19776,3.8443 c -0.0071,0 -0.05865,0.038 -0.110326,0.084 C 9.95127,4.0456 9.653229,4.1841 9.402087,4.2475 9.219025,4.2945 9.132209,4.3015 8.744903,4.2995 8.155801,4.2995 7.975066,4.2645 6.949434,3.9662 5.989556,3.6845 5.569434,3.6634 5.060168,3.8653 4.961598,3.9053 4.855923,3.9383 4.82776,3.9383 4.75735,3.9383 4.672862,3.8443 4.672862,3.767 l 0,-0.063 -0.668939,0 -0.668938,0 0,1.3731 z M 5.801837,4.1834 c 0.05633,0.068 -0.0047,0.1127 -0.183061,0.1409 -0.08914,0.012 -0.227633,0.049 -0.30747,0.077 -0.154898,0.059 -0.215877,0.045 -0.215877,-0.044 0,-0.061 0.04922,-0.092 0.239387,-0.1549 0.204245,-0.066 0.420123,-0.075 0.467021,-0.019 z m 0.267551,6.4049 0,0.07 -0.612612,0.01 c -0.657184,0.01 -0.69,0 -0.654858,-0.1127 0.01408,-0.047 0.02584,-0.047 0.640653,-0.042 l 0.626694,0.01 0,0.07 z M 8.827061,3.0826 c -0.02816,0.1009 -0.06331,0.1948 -0.07984,0.2089 -0.01408,0.014 -0.09392,0.045 -0.178408,0.068 -0.234734,0.063 -0.237061,0.07 -0.01408,0.1314 l 0.204122,0.056 0.06343,0.2112 0.06588,0.2089 0.054,-0.1854 c 0.03049,-0.1032 0.06331,-0.1994 0.07506,-0.2112 0.01176,-0.014 0.110327,-0.052 0.215878,-0.084 L 9.425593,3.4254 9.249511,3.3734 C 9.153271,3.3454 9.059348,3.3144 9.040613,3.3054 9.021883,3.2954 8.981963,3.2045 8.953793,3.1012 8.923303,3.0003 8.895143,2.9134 8.890363,2.9087 c -0.0045,0 -0.03269,0.075 -0.06331,0.1737 z"/></svg>
                                    <span>@lang('Games')
                                      </span> </a></li>
                                <li class="site_bar_nav_item {{ (request()->is('user/games/live')) ? 'active' : '' }}" title="Live casino"><a href="/user/games/live">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"width="20px" height="20px" version="1.1" id="Icons" viewBox="0 0 32 32" xml:space="preserve">
                                        <path d="M26.6,5.4C26.6,5.4,26.6,5.4,26.6,5.4C26.6,5.4,26.6,5.4,26.6,5.4C23.9,2.7,20.1,1,16,1S8.1,2.7,5.4,5.4c0,0,0,0,0,0  s0,0,0,0C2.7,8.1,1,11.9,1,16s1.7,7.9,4.4,10.6c0,0,0,0,0,0s0,0,0,0C8.1,29.3,11.9,31,16,31s7.9-1.7,10.6-4.4c0,0,0,0,0,0s0,0,0,0  C29.3,23.9,31,20.1,31,16S29.3,8.1,26.6,5.4z M25.9,7.6c1.7,2,2.9,4.6,3.1,7.4h-2c-0.2-2.3-1.1-4.4-2.5-6L25.9,7.6z M15,3.1v2  c-2.3,0.2-4.4,1.1-6,2.5L7.6,6.1C9.6,4.4,12.2,3.3,15,3.1z M6.1,24.4c-1.7-2-2.9-4.6-3.1-7.4h2c0.2,2.3,1.1,4.4,2.5,6L6.1,24.4z   M5.1,15h-2c0.2-2.8,1.3-5.4,3.1-7.4L7.6,9C6.2,10.6,5.3,12.7,5.1,15z M15,28.9c-2.8-0.2-5.4-1.3-7.4-3.1L9,24.4  c1.7,1.4,3.8,2.3,6,2.5V28.9z M16,22c-0.3,0-0.6-0.1-0.8-0.4l-4-5c-0.3-0.4-0.3-0.9,0-1.2l4-5c0.4-0.5,1.2-0.5,1.6,0l4,5  c0.3,0.4,0.3,0.9,0,1.2l-4,5C16.6,21.9,16.3,22,16,22z M17,28.9v-2c2.3-0.2,4.4-1.1,6-2.5l1.4,1.4C22.4,27.6,19.8,28.7,17,28.9z   M23,7.6c-1.7-1.4-3.8-2.3-6-2.5v-2c2.8,0.2,5.4,1.3,7.4,3.1L23,7.6z M25.9,24.4L24.4,23c1.4-1.7,2.3-3.8,2.5-6h2  C28.7,19.8,27.6,22.4,25.9,24.4z"/>
                                        </svg>
                                    <span>@lang('Live Casino')</span> </a></li>
                                <li class="site_bar_nav_item {{ (request()->is('user/games/lottery')) ? 'active' : '' }}" title="Lottery"><a href="/user/games/lottery">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                                        <path d="M16.6487 3.85938H9.90865V6.87938C9.90865 7.26938 9.58865 7.57938 9.20865 7.57938C8.82865 7.57938 8.50865 7.26938 8.50865 6.87938V3.85938H7.34865C3.39865 3.85938 2.09865 5.03937 2.00865 8.72937C1.99865 8.90937 2.07865 9.09937 2.20865 9.22937C2.33865 9.36937 2.50865 9.43937 2.70865 9.43937C4.10865 9.43937 5.25865 10.5994 5.25865 11.9994C5.25865 13.3994 4.10865 14.5594 2.70865 14.5594C2.51865 14.5594 2.33865 14.6294 2.20865 14.7694C2.07865 14.8994 1.99865 15.0894 2.00865 15.2694C2.09865 18.9594 3.39865 20.1394 7.34865 20.1394H8.50865V17.1194C8.50865 16.7294 8.82865 16.4194 9.20865 16.4194C9.58865 16.4194 9.90865 16.7294 9.90865 17.1194V20.1394H16.6487C20.7487 20.1394 21.9987 18.8894 21.9987 14.7894V9.20938C21.9987 5.10938 20.7487 3.85938 16.6487 3.85938ZM18.4687 11.8994L17.5387 12.7994C17.4987 12.8294 17.4887 12.8894 17.4987 12.9394L17.7187 14.2094C17.7587 14.4394 17.6687 14.6794 17.4687 14.8194C17.2787 14.9594 17.0287 14.9794 16.8187 14.8694L15.6687 14.2694C15.6287 14.2494 15.5687 14.2494 15.5287 14.2694L14.3787 14.8694C14.2887 14.9194 14.1887 14.9394 14.0887 14.9394C13.9587 14.9394 13.8387 14.8994 13.7287 14.8194C13.5387 14.6794 13.4387 14.4494 13.4787 14.2094L13.6987 12.9394C13.7087 12.8894 13.6887 12.8394 13.6587 12.7994L12.7287 11.8994C12.5587 11.7394 12.4987 11.4894 12.5687 11.2694C12.6387 11.0394 12.8287 10.8794 13.0687 10.8494L14.3487 10.6594C14.3987 10.6494 14.4387 10.6194 14.4687 10.5794L15.0387 9.41938C15.1487 9.20938 15.3587 9.07938 15.5987 9.07938C15.8387 9.07938 16.0487 9.20938 16.1487 9.41938L16.7187 10.5794C16.7387 10.6294 16.7787 10.6594 16.8287 10.6594L18.1087 10.8494C18.3487 10.8794 18.5387 11.0494 18.6087 11.2694C18.6987 11.4894 18.6387 11.7294 18.4687 11.8994Z" fill="#292D32"/>
                                        </svg>
                                    <span>@lang('Lottery')</span> </a></li>
                            </ul>
                        </li>
                        <li class="site_bar_nav_item {{ request()->is('sport') ? 'active':'' }}" title="Sport"><a href="{{route('sport')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20px" height="20px" viewBox="0 0 512 512">
                                <g id="Sport">
                                <path d="M256,46.5544c-115.98,0-210,94.0209-210,210,11.0614,278.5613,408.9813,278.4822,420-.0011C466,140.5753,371.98,46.5544,256,46.5544Zm13.1314,64.0816,43.3441-28.8626a184.32,184.32,0,0,1,92.236,67.287L390.73,198.9456,322.2637,220.89l-53.1323-39.0514ZM199.5266,81.7734l43.3548,28.8679v71.192L189.7405,220.89l-68.47-21.9487-13.98-49.8832A184.2945,184.2945,0,0,1,199.5266,81.7734Zm-91.7,282.996a182.38,182.38,0,0,1-35.564-108.4681l40.9409-32.3831L181.6186,245.85,202.03,309.3984,159.6816,366.89Zm205.2255,66.3535c-35.6088,12.1391-78.5,12.137-114.1089-.0011l-18.0682-48.7359,42.4084-57.5736h65.437l42.4,57.5757Zm91.1188-66.3524-51.8549,2.1213L309.974,309.3994l20.4138-63.5507,68.4107-21.9263,40.9387,32.381A182.3643,182.3643,0,0,1,404.1711,364.7705Z"/>
                                </g>
                                </svg>
                            <span>{{__('Sport')}}</span></a></li>
                        <li class="site_bar_nav_item {{ request()->is('tournament') ? 'active':'' }}" title="Tournaments"><a href="{{route('tournament')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20px" width="20px" version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
                                <style type="text/css">
                                </style>
                                <g>
                                    <path class="st0" d="M493.379,55.416c-11.458-11.479-27.441-18.63-44.952-18.62h-29.049h-14.736H107.358H92.632H63.573   c-17.502-0.01-33.494,7.142-44.952,18.62C7.142,66.874-0.01,82.866,0,100.368v33.297c0,40.979,24.949,77.828,62.994,93.045   l0.569,0.225l66.065,20.24c3.286,4.258,6.75,8.427,10.615,12.41c24.537,25.233,48.386,42.177,64.82,55.931   c8.221,6.848,14.481,12.881,18.15,18.013c1.854,2.561,3.08,4.846,3.856,6.956c0.766,2.119,1.128,4.061,1.128,6.327   c0,31.983,0,13.5,0,45.483c0,6.612-0.932,12.292-2.482,16.982c-2.364,7.054-5.954,11.831-10.37,15.089   c-4.455,3.218-10.007,5.141-17.424,5.17c-26.449,0-26.704,0-26.724,0h-14.736v45.669h199.078v-45.669h-14.736c0,0-0.265,0-26.715,0   c-4.945,0-9.075-0.893-12.577-2.403c-5.23-2.306-9.282-5.916-12.47-11.528c-3.139-5.602-5.238-13.372-5.238-23.31   c0-31.983,0-13.5,0-45.483c0.009-2.266,0.373-4.208,1.128-6.327c1.324-3.66,4.179-8.016,9.046-13.107   c7.23-7.653,18.65-16.541,32.267-27.382c13.616-10.88,29.402-23.84,45.511-40.41c3.866-3.983,7.338-8.152,10.616-12.41   l66.074-20.24l0.56-0.225C487.061,211.494,512,174.644,512,133.665v-33.297C512.01,82.866,504.867,66.874,493.379,55.416z    M73.55,199.191c-26.646-10.841-44.089-36.732-44.089-65.526v-33.297c0.01-9.458,3.797-17.904,9.987-24.115   c6.23-6.201,14.657-9.987,24.125-9.997h29.01c-0.03,6.858-0.07,13.725-0.07,20.554c0.02,31.59,0.736,62.749,6.956,92.22   c2.237,10.556,5.229,20.887,9.154,30.903L73.55,199.191z M181.733,225.101c0,0-42.696-40.185-42.696-80.369s0-77.858,0-77.858   h42.696V225.101z M482.548,133.665c0,28.794-17.453,54.685-44.099,65.526l-35.093,10.742c6.672-16.992,10.596-34.916,12.882-53.301   c2.815-22.682,3.237-46.13,3.247-69.823c0-6.828-0.04-13.696-0.069-20.554h29.01c9.468,0.01,17.904,3.796,24.124,9.997   c6.191,6.21,9.988,14.647,9.998,24.115V133.665z"/>
                                </g>
                                </svg>                            
                            <span>{{__('Tournaments')}}</span></a></li>
                        <li class="site_bar_nav_item {{ request()->is('promo') ? 'active':'' }}" title="Promo"><a href="/promo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 1024 1024"><path fill="none" d="M640 832H64V640a128 128 0 1 0 0-256V192h576v160h64V192h256v192a128 128 0 1 0 0 256v192H704V672h-64v160zm0-416v192h64V416h-64z"/></svg>
                            <span>{{__('Promo')}}</span> </a></li>
                        <li class="site_bar_nav_item  {{ request()->is('blog') ? 'active':'' }}" title="News"><a href="/blog">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 481 370" fill="none">
                                <path d="M467.4 0.200195H89C81.8 0.200195 75.4 6.6002 75.4 13.8002V295.4C75.4 306.6 65 315.4 53.8 313.8C44.2 312.2 37.8 303.4 37.8 294.6V93.0002C37.8 87.4002 33.8 83.4002 28.2 83.4002H14.6C7.40001 83.4002 1 89.8002 1 97.0002V332.2C1 352.2 17.8 369 37.8 369H74.6H444.2C464.2 369 481 352.2 481 332.2V14.6002C481 6.6002 474.6 0.200195 467.4 0.200195ZM259.4 268.2C259.4 273.8 255.4 277.8 249.8 277.8H139.4C133.8 277.8 129.8 273.8 129.8 268.2V249.8C129.8 244.2 133.8 240.2 139.4 240.2H249.8C255.4 240.2 259.4 244.2 259.4 249.8V268.2ZM259.4 194.6C259.4 200.2 255.4 204.2 249.8 204.2H139.4C133.8 204.2 129.8 200.2 129.8 194.6V176.2C129.8 170.6 133.8 166.6 139.4 166.6H249.8C255.4 166.6 259.4 170.6 259.4 176.2V194.6ZM425.8 268.2C425.8 273.8 421.8 277.8 416.2 277.8H305.8C300.2 277.8 296.2 273.8 296.2 268.2V249.8C296.2 244.2 300.2 240.2 305.8 240.2H416.2C421.8 240.2 425.8 244.2 425.8 249.8V268.2ZM425.8 194.6C425.8 200.2 421.8 204.2 416.2 204.2H305.8C300.2 204.2 296.2 200.2 296.2 194.6V176.2C296.2 170.6 300.2 166.6 305.8 166.6H416.2C421.8 166.6 425.8 170.6 425.8 176.2V194.6ZM425.8 120.2C425.8 125.8 421.8 129.8 416.2 129.8H139.4C133.8 129.8 129.8 125.8 129.8 120.2V65.0002C129.8 59.4002 133.8 55.4002 139.4 55.4002H416.2C421.8 55.4002 425.8 59.4002 425.8 65.0002V120.2Z" fill="black"/>
                                </svg>
                            <span>@lang('News')</span> </a></li>
                        <li class="site_bar_nav_item {{ request()->is('blog') ? 'active':'' }}" title="Suport 24/7"><a href="https://t.me/+-yvMy2qDtJk1NDAy" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" fill="none" version="1.1" id="Layer_1" viewBox="0 0 24 24" xml:space="preserve">
                            <path d="M19.2,4.4L2.9,10.7c-1.1,0.4-1.1,1.1-0.2,1.3l4.1,1.3l1.6,4.8c0.2,0.5,0.1,0.7,0.6,0.7c0.4,0,0.6-0.2,0.8-0.4  c0.1-0.1,1-1,2-2l4.2,3.1c0.8,0.4,1.3,0.2,1.5-0.7l2.8-13.1C20.6,4.6,19.9,4,19.2,4.4z M17.1,7.4l-7.8,7.1L9,17.8L7.4,13l9.2-5.8  C17,6.9,17.4,7.1,17.1,7.4z"/>
                            <rect y="0" class="st0" width="24" height="24" fill="none"/>
                            </svg><span>@lang('Suport 24/7')</span> </a></li>
                    </ul>
                    {{-- Site Bar Navigation END --}}
                </div>
            </div>
            <div class="site_bar site_bar_hidden">
                <div class="site_bar_container">
                  <div class="site_bar_top">
                    <div class="site_bar_top_wrapper">
                      <div class="site_bar_burger">
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                      <div class="site_bar_logo">
                        <a href="{{ route('home') }}"><img  loading="lazy"   src="{{ asset('assets/images/logoIcon/bongo_logo.png') }}" alt="Bongo" ></a>
                      </div>
                    </div>
                    @auth
                    <a href="{{ route('user.deposit') }}" class="site_bar_btn main_btn_green">+</a>
                    @else 
                    <a href="{{ route('user.register') }}" class="site_bar_btn main_btn_green">+</a>
                    @endauth 
                  </div>
                  <div class="site_bar_bottom">
                    @auth
                    <a href="{{ route('user.deposit') }}" class="site_bar_btn main_btn_green">@lang('Deposit')</a>
                    <a href="{{ route('user.withdraw') }}" class="site_bar_btn main_btn">@lang('Withdraw')</a>
                    @else 
                    <a href="{{ route('user.register') }}" class="site_bar_btn main_btn_green">@lang('SING UP')</a>
                    <a href="{{ route('user.login') }}" class="site_bar_btn main_btn">@lang('SIGN IN')</a>
                    @endauth
                    </div>
                 {{-- Site Bar Navigation --}}
                 <ul class="site_bar_nav">
                    <li class="site_bar_nav_item 
                    <?php if( (request()->is('user/dashboard')) ||  (request()->is('user/games/slots')) ||  (request()->is('user/games/live')) ||  (request()->is('user/games/lottery'))){
                        echo 'active';
                    }?>
                    " title="Casino"><a href="/games">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="20px" height="20px" version="1.1" viewBox="0 0 31.985 31.969" xml:space="preserve">
                            <g id="ace">
                                <path d="M11.939,6c0,0-5.275,2.729-6.636,6.834c-0.693,2.455-0.064,3.951,0.563,4.76c0.75,0.971,1.979,1.549,3.288,1.549   c0.635,0,1.243-0.195,1.779-0.498l-0.314,2.777c-0.021,0.131,0.02,0.293,0.109,0.393c0.087,0.1,0.217,0.186,0.352,0.186h1.95   c0.135,0,0.264-0.086,0.352-0.186c0.089-0.1,0.129-0.247,0.109-0.378l-0.299-2.681c0.518,0.244,1.088,0.391,1.647,0.391   c1.308,0,2.538-0.581,3.289-1.552c0.626-0.807,1.255-2.306,0.562-4.761C17.333,8.729,11.939,6,11.939,6z"/>
                                <path d="M30.559,4.104L24,2.14V2c0-1.104-0.896-2-2-2H2C0.896,0,0,0.896,0,2v25c0,1.104,0.896,2,2,2h10.611l9.627,2.884   c1.058,0.317,2.173-0.284,2.489-1.342l7.174-23.948C32.218,5.536,31.616,4.421,30.559,4.104z M2,2h20v25H2V2z"/>
                            </g>
                            </svg>
                        <span> {{__('Casino')}}</span>
                        <span class="arrow"></span></a>
                        <ul class="site_bar_children"> 
                            <li class="site_bar_nav_item {{ (request()->is('user/dashboard')) ? 'active' : '' }}" title="Extra bonuses"><a href="/user/dashboard">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="18px" height="18px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                    <path fill="none" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265  C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642  c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854  c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72  c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"/>
                                    </svg>
                                <span>@lang('Extra bonuses')</span>
                              </a></li>
                            <li class="site_bar_nav_item {{ (request()->is('user/games/slots')) ? 'active' : '' }}"  title="Games"><a href="/user/games/slots">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"  width="20px" height="20px" viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true"><path d="m 12.324082,8.1685 -0.05633,0.1972 -0.211224,0.063 -0.213551,0.066 0.211224,0.061 0.211225,0.063 0.06098,0.2113 0.06098,0.2088 0.06575,-0.2112 0.06343,-0.2135 0.19947,-0.054 c 0.108,-0.03 0.190163,-0.063 0.178408,-0.073 -0.0094,-0.01 -0.08914,-0.035 -0.173633,-0.059 -0.08682,-0.021 -0.168979,-0.047 -0.183061,-0.056 -0.01408,-0.01 -0.04922,-0.096 -0.07739,-0.1925 -0.02816,-0.094 -0.05633,-0.1831 -0.06576,-0.1925 -0.0095,-0.01 -0.04004,0.07 -0.07053,0.1808 z M 1.483429,7.2203 C 1.413019,7.462 1.415349,7.455 1.382531,7.4668 c -0.01641,0 -0.110327,0.033 -0.206572,0.061 L 1,7.5818 1.197143,7.6428 c 0.110326,0.035 0.206571,0.078 0.218326,0.096 0.0094,0.019 0.04224,0.1126 0.07041,0.2089 l 0.05167,0.1761 0.05865,-0.1925 c 0.03282,-0.1057 0.07041,-0.2018 0.07984,-0.2112 0.01176,-0.01 0.105673,-0.045 0.211224,-0.078 L 2.079753,7.5811 1.892039,7.5271 C 1.788814,7.4961 1.694896,7.4641 1.680814,7.4521 1.669054,7.4401 1.629144,7.3418 1.596324,7.2362 L 1.535094,7.0437 1.483424,7.2197 Z M 5.623551,5.9365 C 5.316082,6.0398 4.952286,6.3379 4.839633,6.582 l -0.05633,0.122 -0.335633,0 -0.335632,0 L 3.75767,6.9834 C 2.929181,7.6359 2.497303,8.0935 2.236854,8.6004 2.023303,9.0182 1.955221,9.4241 2.030283,9.849 l 0.02584,0.1526 1.037388,0.01 1.037388,0 0.02584,-0.1338 C 4.245879,9.4248 4.457106,8.9484 4.757596,8.5188 4.921922,8.2841 4.940657,8.2466 4.978249,8.0636 5.104984,7.4557 5.464126,6.7586 5.949882,6.1743 6.083718,6.0147 6.118861,5.9607 6.095351,5.9467 6.029591,5.9087 5.7198,5.9047 5.623555,5.9347 Z M 12.432082,4.918 c -0.06808,0.075 -0.347388,0.2089 -0.521021,0.2511 -0.201796,0.049 -0.699428,0.052 -0.941143,0 L 10.798612,5.1361 10.582735,5.3614 C 10.324612,5.629 10.148531,5.8285 9.967796,6.0655 l -0.133714,0.1737 0.206571,0.066 c 0.227633,0.075 0.504612,0.1337 0.661837,0.1431 l 0.103224,0.01 L 10.432612,6.74 C 9.730857,7.2681 9.12302,7.8148 8.939959,8.0801 c -0.08216,0.1197 -0.180735,0.596 -0.201796,0.988 -0.01641,0.2722 0.0023,0.8449 0.02816,0.9153 0.0094,0.026 0.255795,0.03 1.377673,0.03 1.288531,0 1.363592,0 1.347184,-0.042 C 11.41612,9.7812 11.333955,9.4926 11.301016,9.3095 11.249346,9.0044 11.265746,8.3543 11.336286,8.0586 11.531102,7.2207 11.993469,6.4509 12.753878,5.6975 L 13,5.4536 12.739429,5.1625 C 12.596286,5.0053 12.478857,4.8739 12.476531,4.8739 c -0.0023,0 -0.02339,0.021 -0.04445,0.045 z m -11.162204,0.8355 0,0.9739 0.455265,0 c 0.431877,0 0.457714,0 0.471796,-0.044 0.02351,-0.075 0.345061,-0.3615 0.485877,-0.4319 0.07273,-0.038 0.187715,-0.073 0.262898,-0.08 l 0.131388,-0.014 0,-0.6806 0,-0.6806 -0.194816,0.012 c -0.131388,0.01 -0.241715,0.033 -0.347388,0.075 -0.08449,0.033 -0.176082,0.061 -0.204122,0.061 -0.06098,0 -0.122082,-0.059 -0.122082,-0.1197 0,-0.042 -0.02106,-0.045 -0.469347,-0.045 l -0.469469,0 0,0.9741 z m 2.065346,-0.6806 0,1.3729 0.640776,0 0.638327,0 0.0469,-0.082 C 4.719877,6.2535 5.015595,5.9742 5.194003,5.8592 5.597717,5.5965 5.900411,5.5893 6.635105,5.8242 7.095146,5.9697 7.346289,6.026 7.616166,6.0448 l 0.229959,0.014 -0.396734,0.2981 c -0.852,0.6336 -1.488,1.1687 -1.891592,1.5889 -0.849551,0.8848 -1.227429,1.7062 -1.182857,2.5699 0.0094,0.1572 0.03049,0.3474 0.0469,0.4248 l 0.03049,0.1408 2.189755,0.01 c 1.750898,0 2.187306,0 2.178,-0.023 C 8.587801,10.5378 8.477474,9.9887 8.475148,9.3667 8.472848,7.8506 9.174576,6.3932 10.566332,5.0155 L 10.934781,4.6517 10.573311,4.248 C 10.373842,4.025 10.204862,3.8443 10.19776,3.8443 c -0.0071,0 -0.05865,0.038 -0.110326,0.084 C 9.95127,4.0456 9.653229,4.1841 9.402087,4.2475 9.219025,4.2945 9.132209,4.3015 8.744903,4.2995 8.155801,4.2995 7.975066,4.2645 6.949434,3.9662 5.989556,3.6845 5.569434,3.6634 5.060168,3.8653 4.961598,3.9053 4.855923,3.9383 4.82776,3.9383 4.75735,3.9383 4.672862,3.8443 4.672862,3.767 l 0,-0.063 -0.668939,0 -0.668938,0 0,1.3731 z M 5.801837,4.1834 c 0.05633,0.068 -0.0047,0.1127 -0.183061,0.1409 -0.08914,0.012 -0.227633,0.049 -0.30747,0.077 -0.154898,0.059 -0.215877,0.045 -0.215877,-0.044 0,-0.061 0.04922,-0.092 0.239387,-0.1549 0.204245,-0.066 0.420123,-0.075 0.467021,-0.019 z m 0.267551,6.4049 0,0.07 -0.612612,0.01 c -0.657184,0.01 -0.69,0 -0.654858,-0.1127 0.01408,-0.047 0.02584,-0.047 0.640653,-0.042 l 0.626694,0.01 0,0.07 z M 8.827061,3.0826 c -0.02816,0.1009 -0.06331,0.1948 -0.07984,0.2089 -0.01408,0.014 -0.09392,0.045 -0.178408,0.068 -0.234734,0.063 -0.237061,0.07 -0.01408,0.1314 l 0.204122,0.056 0.06343,0.2112 0.06588,0.2089 0.054,-0.1854 c 0.03049,-0.1032 0.06331,-0.1994 0.07506,-0.2112 0.01176,-0.014 0.110327,-0.052 0.215878,-0.084 L 9.425593,3.4254 9.249511,3.3734 C 9.153271,3.3454 9.059348,3.3144 9.040613,3.3054 9.021883,3.2954 8.981963,3.2045 8.953793,3.1012 8.923303,3.0003 8.895143,2.9134 8.890363,2.9087 c -0.0045,0 -0.03269,0.075 -0.06331,0.1737 z"/></svg>
                                <span>@lang('Games')
                                  </span> </a></li>
                            <li class="site_bar_nav_item {{ (request()->is('user/games/live')) ? 'active' : '' }}" title="Live casino"><a href="/user/games/live">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"width="20px" height="20px" version="1.1" id="Icons" viewBox="0 0 32 32" xml:space="preserve">
                                    <path d="M26.6,5.4C26.6,5.4,26.6,5.4,26.6,5.4C26.6,5.4,26.6,5.4,26.6,5.4C23.9,2.7,20.1,1,16,1S8.1,2.7,5.4,5.4c0,0,0,0,0,0  s0,0,0,0C2.7,8.1,1,11.9,1,16s1.7,7.9,4.4,10.6c0,0,0,0,0,0s0,0,0,0C8.1,29.3,11.9,31,16,31s7.9-1.7,10.6-4.4c0,0,0,0,0,0s0,0,0,0  C29.3,23.9,31,20.1,31,16S29.3,8.1,26.6,5.4z M25.9,7.6c1.7,2,2.9,4.6,3.1,7.4h-2c-0.2-2.3-1.1-4.4-2.5-6L25.9,7.6z M15,3.1v2  c-2.3,0.2-4.4,1.1-6,2.5L7.6,6.1C9.6,4.4,12.2,3.3,15,3.1z M6.1,24.4c-1.7-2-2.9-4.6-3.1-7.4h2c0.2,2.3,1.1,4.4,2.5,6L6.1,24.4z   M5.1,15h-2c0.2-2.8,1.3-5.4,3.1-7.4L7.6,9C6.2,10.6,5.3,12.7,5.1,15z M15,28.9c-2.8-0.2-5.4-1.3-7.4-3.1L9,24.4  c1.7,1.4,3.8,2.3,6,2.5V28.9z M16,22c-0.3,0-0.6-0.1-0.8-0.4l-4-5c-0.3-0.4-0.3-0.9,0-1.2l4-5c0.4-0.5,1.2-0.5,1.6,0l4,5  c0.3,0.4,0.3,0.9,0,1.2l-4,5C16.6,21.9,16.3,22,16,22z M17,28.9v-2c2.3-0.2,4.4-1.1,6-2.5l1.4,1.4C22.4,27.6,19.8,28.7,17,28.9z   M23,7.6c-1.7-1.4-3.8-2.3-6-2.5v-2c2.8,0.2,5.4,1.3,7.4,3.1L23,7.6z M25.9,24.4L24.4,23c1.4-1.7,2.3-3.8,2.5-6h2  C28.7,19.8,27.6,22.4,25.9,24.4z"/>
                                    </svg>
                                <span>@lang('Live Casino')
                                </span> </a></li>
                            <li class="site_bar_nav_item {{ (request()->is('user/games/lottery')) ? 'active' : '' }}" title="Lottery"><a href="/user/games/lottery">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                                    <path d="M16.6487 3.85938H9.90865V6.87938C9.90865 7.26938 9.58865 7.57938 9.20865 7.57938C8.82865 7.57938 8.50865 7.26938 8.50865 6.87938V3.85938H7.34865C3.39865 3.85938 2.09865 5.03937 2.00865 8.72937C1.99865 8.90937 2.07865 9.09937 2.20865 9.22937C2.33865 9.36937 2.50865 9.43937 2.70865 9.43937C4.10865 9.43937 5.25865 10.5994 5.25865 11.9994C5.25865 13.3994 4.10865 14.5594 2.70865 14.5594C2.51865 14.5594 2.33865 14.6294 2.20865 14.7694C2.07865 14.8994 1.99865 15.0894 2.00865 15.2694C2.09865 18.9594 3.39865 20.1394 7.34865 20.1394H8.50865V17.1194C8.50865 16.7294 8.82865 16.4194 9.20865 16.4194C9.58865 16.4194 9.90865 16.7294 9.90865 17.1194V20.1394H16.6487C20.7487 20.1394 21.9987 18.8894 21.9987 14.7894V9.20938C21.9987 5.10938 20.7487 3.85938 16.6487 3.85938ZM18.4687 11.8994L17.5387 12.7994C17.4987 12.8294 17.4887 12.8894 17.4987 12.9394L17.7187 14.2094C17.7587 14.4394 17.6687 14.6794 17.4687 14.8194C17.2787 14.9594 17.0287 14.9794 16.8187 14.8694L15.6687 14.2694C15.6287 14.2494 15.5687 14.2494 15.5287 14.2694L14.3787 14.8694C14.2887 14.9194 14.1887 14.9394 14.0887 14.9394C13.9587 14.9394 13.8387 14.8994 13.7287 14.8194C13.5387 14.6794 13.4387 14.4494 13.4787 14.2094L13.6987 12.9394C13.7087 12.8894 13.6887 12.8394 13.6587 12.7994L12.7287 11.8994C12.5587 11.7394 12.4987 11.4894 12.5687 11.2694C12.6387 11.0394 12.8287 10.8794 13.0687 10.8494L14.3487 10.6594C14.3987 10.6494 14.4387 10.6194 14.4687 10.5794L15.0387 9.41938C15.1487 9.20938 15.3587 9.07938 15.5987 9.07938C15.8387 9.07938 16.0487 9.20938 16.1487 9.41938L16.7187 10.5794C16.7387 10.6294 16.7787 10.6594 16.8287 10.6594L18.1087 10.8494C18.3487 10.8794 18.5387 11.0494 18.6087 11.2694C18.6987 11.4894 18.6387 11.7294 18.4687 11.8994Z" fill="#292D32"/>
                                    </svg>
                                <span>@lang('Lottery')</span> </a></li>
                        </ul>
                    </li>
                    <li class="site_bar_nav_item {{ request()->is('sport') ? 'active':'' }}" title="Sport"><a href="{{route('sport')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20px" height="20px" viewBox="0 0 512 512">
                            <g id="Sport">
                            <path d="M256,46.5544c-115.98,0-210,94.0209-210,210,11.0614,278.5613,408.9813,278.4822,420-.0011C466,140.5753,371.98,46.5544,256,46.5544Zm13.1314,64.0816,43.3441-28.8626a184.32,184.32,0,0,1,92.236,67.287L390.73,198.9456,322.2637,220.89l-53.1323-39.0514ZM199.5266,81.7734l43.3548,28.8679v71.192L189.7405,220.89l-68.47-21.9487-13.98-49.8832A184.2945,184.2945,0,0,1,199.5266,81.7734Zm-91.7,282.996a182.38,182.38,0,0,1-35.564-108.4681l40.9409-32.3831L181.6186,245.85,202.03,309.3984,159.6816,366.89Zm205.2255,66.3535c-35.6088,12.1391-78.5,12.137-114.1089-.0011l-18.0682-48.7359,42.4084-57.5736h65.437l42.4,57.5757Zm91.1188-66.3524-51.8549,2.1213L309.974,309.3994l20.4138-63.5507,68.4107-21.9263,40.9387,32.381A182.3643,182.3643,0,0,1,404.1711,364.7705Z"/>
                            </g>
                            </svg>
                        <span>{{__('Sport')}}</span></a></li>
                    <li class="site_bar_nav_item {{ request()->is('tournament') ? 'active':'' }}" title="Tournaments"><a href="{{route('tournament')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20px" width="20px" version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
                            <style type="text/css">
                            </style>
                            <g>
                                <path class="st0" d="M493.379,55.416c-11.458-11.479-27.441-18.63-44.952-18.62h-29.049h-14.736H107.358H92.632H63.573   c-17.502-0.01-33.494,7.142-44.952,18.62C7.142,66.874-0.01,82.866,0,100.368v33.297c0,40.979,24.949,77.828,62.994,93.045   l0.569,0.225l66.065,20.24c3.286,4.258,6.75,8.427,10.615,12.41c24.537,25.233,48.386,42.177,64.82,55.931   c8.221,6.848,14.481,12.881,18.15,18.013c1.854,2.561,3.08,4.846,3.856,6.956c0.766,2.119,1.128,4.061,1.128,6.327   c0,31.983,0,13.5,0,45.483c0,6.612-0.932,12.292-2.482,16.982c-2.364,7.054-5.954,11.831-10.37,15.089   c-4.455,3.218-10.007,5.141-17.424,5.17c-26.449,0-26.704,0-26.724,0h-14.736v45.669h199.078v-45.669h-14.736c0,0-0.265,0-26.715,0   c-4.945,0-9.075-0.893-12.577-2.403c-5.23-2.306-9.282-5.916-12.47-11.528c-3.139-5.602-5.238-13.372-5.238-23.31   c0-31.983,0-13.5,0-45.483c0.009-2.266,0.373-4.208,1.128-6.327c1.324-3.66,4.179-8.016,9.046-13.107   c7.23-7.653,18.65-16.541,32.267-27.382c13.616-10.88,29.402-23.84,45.511-40.41c3.866-3.983,7.338-8.152,10.616-12.41   l66.074-20.24l0.56-0.225C487.061,211.494,512,174.644,512,133.665v-33.297C512.01,82.866,504.867,66.874,493.379,55.416z    M73.55,199.191c-26.646-10.841-44.089-36.732-44.089-65.526v-33.297c0.01-9.458,3.797-17.904,9.987-24.115   c6.23-6.201,14.657-9.987,24.125-9.997h29.01c-0.03,6.858-0.07,13.725-0.07,20.554c0.02,31.59,0.736,62.749,6.956,92.22   c2.237,10.556,5.229,20.887,9.154,30.903L73.55,199.191z M181.733,225.101c0,0-42.696-40.185-42.696-80.369s0-77.858,0-77.858   h42.696V225.101z M482.548,133.665c0,28.794-17.453,54.685-44.099,65.526l-35.093,10.742c6.672-16.992,10.596-34.916,12.882-53.301   c2.815-22.682,3.237-46.13,3.247-69.823c0-6.828-0.04-13.696-0.069-20.554h29.01c9.468,0.01,17.904,3.796,24.124,9.997   c6.191,6.21,9.988,14.647,9.998,24.115V133.665z"/>
                            </g>
                            </svg>                            
                        <span>{{__('Tournaments')}}</span></a></li>
                    <li class="site_bar_nav_item {{ request()->is('promo') ? 'active':'' }}" title="Promo"><a href="/promo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 1024 1024"><path fill="none" d="M640 832H64V640a128 128 0 1 0 0-256V192h576v160h64V192h256v192a128 128 0 1 0 0 256v192H704V672h-64v160zm0-416v192h64V416h-64z"/></svg>
                        <span>{{__('Promo')}}</span> </a></li>
                    <li class="site_bar_nav_item  {{ request()->is('blog') ? 'active':'' }}" title="News"><a href="/blog">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 481 370" fill="none">
                            <path d="M467.4 0.200195H89C81.8 0.200195 75.4 6.6002 75.4 13.8002V295.4C75.4 306.6 65 315.4 53.8 313.8C44.2 312.2 37.8 303.4 37.8 294.6V93.0002C37.8 87.4002 33.8 83.4002 28.2 83.4002H14.6C7.40001 83.4002 1 89.8002 1 97.0002V332.2C1 352.2 17.8 369 37.8 369H74.6H444.2C464.2 369 481 352.2 481 332.2V14.6002C481 6.6002 474.6 0.200195 467.4 0.200195ZM259.4 268.2C259.4 273.8 255.4 277.8 249.8 277.8H139.4C133.8 277.8 129.8 273.8 129.8 268.2V249.8C129.8 244.2 133.8 240.2 139.4 240.2H249.8C255.4 240.2 259.4 244.2 259.4 249.8V268.2ZM259.4 194.6C259.4 200.2 255.4 204.2 249.8 204.2H139.4C133.8 204.2 129.8 200.2 129.8 194.6V176.2C129.8 170.6 133.8 166.6 139.4 166.6H249.8C255.4 166.6 259.4 170.6 259.4 176.2V194.6ZM425.8 268.2C425.8 273.8 421.8 277.8 416.2 277.8H305.8C300.2 277.8 296.2 273.8 296.2 268.2V249.8C296.2 244.2 300.2 240.2 305.8 240.2H416.2C421.8 240.2 425.8 244.2 425.8 249.8V268.2ZM425.8 194.6C425.8 200.2 421.8 204.2 416.2 204.2H305.8C300.2 204.2 296.2 200.2 296.2 194.6V176.2C296.2 170.6 300.2 166.6 305.8 166.6H416.2C421.8 166.6 425.8 170.6 425.8 176.2V194.6ZM425.8 120.2C425.8 125.8 421.8 129.8 416.2 129.8H139.4C133.8 129.8 129.8 125.8 129.8 120.2V65.0002C129.8 59.4002 133.8 55.4002 139.4 55.4002H416.2C421.8 55.4002 425.8 59.4002 425.8 65.0002V120.2Z" fill="black"/>
                            </svg>
                        <span>@lang('News')</span> </a></li>
                    <li class="site_bar_nav_item {{ request()->is('blog') ? 'active':'' }}" title="Suport 24/7"><a href="https://t.me/+-yvMy2qDtJk1NDAy" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" fill="none" version="1.1" id="Layer_1" viewBox="0 0 24 24" xml:space="preserve">
                        <path d="M19.2,4.4L2.9,10.7c-1.1,0.4-1.1,1.1-0.2,1.3l4.1,1.3l1.6,4.8c0.2,0.5,0.1,0.7,0.6,0.7c0.4,0,0.6-0.2,0.8-0.4  c0.1-0.1,1-1,2-2l4.2,3.1c0.8,0.4,1.3,0.2,1.5-0.7l2.8-13.1C20.6,4.6,19.9,4,19.2,4.4z M17.1,7.4l-7.8,7.1L9,17.8L7.4,13l9.2-5.8  C17,6.9,17.4,7.1,17.1,7.4z"/>
                        <rect y="0" class="st0" width="24" height="24" fill="none"/>
                        </svg><span>@lang('Suport 24/7')</span> </a></li>
                </ul>
                {{-- Site Bar Navigation END --}}
                </div>
              </div>
            <!-- Site Bar END -->   

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

      <!-- Section Crypto -->
      <section class="crypto">
        <div class="crypto__container">
          <div class="crypto_wrapper">
            <div class="crypto_img">
              <picture>
                <source srcset="/assets/images/profile/crypto_payments_bongo_mobile.png" media="(max-width: 764.98px)">
                <img  loading="lazy"   src="/assets/images/profile/crypto_payments_bongo.png" alt="" class="crypto_img">
              </picture>

            </div>
            <div class="crypto_top section_title_wrapper">
              <div class="crypto_title title_h2">
                {{ __($methodContent->data_values->heading) }}
              </div>
              <div class="crypto_text text_after">
                @lang('crypto_text')
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section Crypto END -->
    
    <!-- Footer -->
    <footer class="footer">
        <div class="footer__container">
          <div class="footer_wrapper">
            <div class="footer_top">
              <div class="footer_top_logo">
                <a href="#" class="footer_logo">
                  <img  loading="lazy"   src="{{ asset('assets/images/logoIcon/bongo_logo.png') }}" alt="Bongo">
                </a>
                <div class="footer_top_descr">
                  @lang('footer_top_descr')
                </div>
              </div>
              <div class="footer_top_wrapper">
                <div class="footer_bottom_socials footer_bottom_socials_mobile">
                  <a href="#" class="footer_social_item" target="blank"
                    style="background-image: url({{ asset('assets/images/frontend/footer/facebook.png') }});">
                  </a>
                  <a href="#" class="footer_social_item" target="blank"
                    style="background-image: url({{ asset('assets/images/frontend/footer/twitter.png') }});">
                  </a>
                  <a href="#" class="footer_social_item" target="blank"
                    style="background-image: url({{ asset('assets/images/frontend/footer/instagram.png') }}); ">
                  </a>
                  <a href="#" class="footer_social_item" target="blank"
                    style="background-image: url({{ asset('assets/images/frontend/footer/telegram_footer.png') }});">
                  </a>
                </div>
                <ul class="footer_top_menu">
                  <li class="footer_top_menu_item"><a href="{{ route('about') }}">{{ __('ABOUT') }}</a></li>
                  <li class="footer_top_menu_item"><a href="{{ route('contact') }}">{{ __('CONTACT') }}</a></li>
                  <li class="footer_top_menu_item"><a href="{{ route('about') }}#why_choose_bongo">{{ __('WHY CHOOSE BONGO') }}</a></li>
                  <li class="footer_top_menu_item"><a href="/other">{{ __('OTHER') }}</a></li>
                  <li class="footer_top_menu_item"><a href="/faq">{{ __('F.A.Q') }}</a></li>
                  <li class="footer_top_menu_item"><a href="/terms">{{ __('Terms and Conditions') }}</a></li>
                  <li class="footer_top_menu_item"><a href="/privacy">{{ __('Privacy Policy') }}</a></li>
                  {{-- @forelse($extra_pages as $item)
                  @if($item->data_values->title != 'Loyalty Program')
                  <li class="footer_top_menu_item">
                      <a href="{{ route('extra.details', [$item->id, @slug($item->data_values->title)]) }}">{{ __(@$item->data_values->title) }}</a>
                  </li>
                  @endif
                  @empty
                  @endforelse --}}
                  <li class="footer_top_menu_item"><a href="/bonuses">{{ __('BONUSES') }}</a></li>
                  <li class="footer_top_menu_item"><a href="{{ route('about') }}#referal_program">{{ __('REFERRAL PROGRAM') }}</a></li>
                  {{-- <li class="footer_top_menu_item"><a href="{{ route('about') }}#referal_program">{{ __('FAQ') }}</a></li>
                  <li class="footer_top_menu_item"><a href="{{ route('about') }}#referal_program">{{ __('Promo and Bonuses') }}</a></li> --}}
                </ul>
              </div>
  
            </div>
            <div class="footer_bottom">
  
              <div class="footer_bottom_btns">
                <a href="{{route('bongocoins')}}" class="footer_btn_coins main_btn_green">
                  @lang('Bongo Coins')
                </a>
                <a href="https://t.me/+-yvMy2qDtJk1NDAy" target="_blank" class="footer_btn_telegram main_btn_green">
                  @lang('24 /7 Online support')
                </a>
                <a href="{{ route('about') }}#loyalty_program" class="footer_btn_loyalty main_btn_green">
                  @lang('Loyalty program')
                </a>
              </div>
              <div class="footer_bottom_socials">
                <a href="#" target="_blank" class="footer_social_item" target="blank"
                  style="background-image: url({{ asset('assets/images/frontend/footer/facebook.png') }}); ">
                </a>
                <a href="#" target="_blank" class="footer_social_item" target="blank" style="background-image: url({{ asset('assets/images/frontend/footer/twitter.png') }}); ">
                </a>
                <a href="#" target="_blank" class="footer_social_item" target="blank"
                  style="background-image: url({{ asset('assets/images/frontend/footer/instagram.png') }}); ">
                </a>
                <a href="#" target="_blank" class="footer_social_item" target="blank"
                  style="background-image: url({{ asset('assets/images/frontend/footer/telegram_footer.png') }}); ">
                </a>
              </div>
            </div>
          </div>
          <div class="footer_copy">
            <p>@lang('footer_copy_1') <a href="https://bongo.land">@lang('footer_copy_1')</a> 
                @lang('footer_copy_1')
            </p>
        </div>
        </div>
      </footer>
      <!-- Footer END -->

            <!-- Footer NAV -->
            <div class="header_mobile mobile-header">
                <div class="mobile__container">
                  <div class="mobile__wrapper">
                    <ul class="mobile_list " >
                        <li {{ (request()->is('user/dashboard')) ? 'class=active' : '' }}><a href="/user/dashboard"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="18px" height="18px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                            <path fill="none" d="M62.799,23.737c-0.47-1.399-1.681-2.419-3.139-2.642l-16.969-2.593L35.069,2.265  C34.419,0.881,33.03,0,31.504,0c-1.527,0-2.915,0.881-3.565,2.265l-7.623,16.238L3.347,21.096c-1.458,0.223-2.669,1.242-3.138,2.642  c-0.469,1.4-0.115,2.942,0.916,4l12.392,12.707l-2.935,17.977c-0.242,1.488,0.389,2.984,1.62,3.854  c1.23,0.87,2.854,0.958,4.177,0.228l15.126-8.365l15.126,8.365c0.597,0.33,1.254,0.492,1.908,0.492c0.796,0,1.592-0.242,2.269-0.72  c1.231-0.869,1.861-2.365,1.619-3.854l-2.935-17.977l12.393-12.707C62.914,26.68,63.268,25.138,62.799,23.737z"/>
                            </svg> @lang('Extra')</a></li>
                        <li {{ (request()->is('user/games/slots')) ? 'class=active' : '' }}><a href="/user/games/slots">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="20px" height="20px" version="1.1" viewBox="0 0 31.985 31.969" xml:space="preserve">
                            <g id="ace">
                                <path d="M11.939,6c0,0-5.275,2.729-6.636,6.834c-0.693,2.455-0.064,3.951,0.563,4.76c0.75,0.971,1.979,1.549,3.288,1.549   c0.635,0,1.243-0.195,1.779-0.498l-0.314,2.777c-0.021,0.131,0.02,0.293,0.109,0.393c0.087,0.1,0.217,0.186,0.352,0.186h1.95   c0.135,0,0.264-0.086,0.352-0.186c0.089-0.1,0.129-0.247,0.109-0.378l-0.299-2.681c0.518,0.244,1.088,0.391,1.647,0.391   c1.308,0,2.538-0.581,3.289-1.552c0.626-0.807,1.255-2.306,0.562-4.761C17.333,8.729,11.939,6,11.939,6z"/>
                                <path d="M30.559,4.104L24,2.14V2c0-1.104-0.896-2-2-2H2C0.896,0,0,0.896,0,2v25c0,1.104,0.896,2,2,2h10.611l9.627,2.884   c1.058,0.317,2.173-0.284,2.489-1.342l7.174-23.948C32.218,5.536,31.616,4.421,30.559,4.104z M2,2h20v25H2V2z"/>
                            </g>
                            </svg> @lang('Games')</a></li>
                        <li {{ (request()->is('/')) ? 'class=active' : '' }}><a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                                <path d="M20.8593 8.36985L13.9293 2.82985C12.8593 1.96985 11.1293 1.96985 10.0693 2.81985L3.13929 8.36985C2.35929 8.98985 1.85929 10.2998 2.02929 11.2798L3.35929 19.2398C3.59929 20.6598 4.95929 21.8098 6.39929 21.8098H17.5993C19.0293 21.8098 20.3993 20.6498 20.6393 19.2398L21.9693 11.2798C22.1293 10.2998 21.6293 8.98985 20.8593 8.36985ZM11.9993 15.4998C10.6193 15.4998 9.49929 14.3798 9.49929 12.9998C9.49929 11.6198 10.6193 10.4998 11.9993 10.4998C13.3793 10.4998 14.4993 11.6198 14.4993 12.9998C14.4993 14.3798 13.3793 15.4998 11.9993 15.4998Z" fill="none"/>
                                </svg>
                            @lang('HOME')</a></li>
                        <li {{ (request()->is('user/games/live')) ? 'class=active' : '' }}><a href="/user/games/live">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"width="20px" height="20px" version="1.1" id="Icons" viewBox="0 0 32 32" xml:space="preserve">
                                <path d="M26.6,5.4C26.6,5.4,26.6,5.4,26.6,5.4C26.6,5.4,26.6,5.4,26.6,5.4C23.9,2.7,20.1,1,16,1S8.1,2.7,5.4,5.4c0,0,0,0,0,0  s0,0,0,0C2.7,8.1,1,11.9,1,16s1.7,7.9,4.4,10.6c0,0,0,0,0,0s0,0,0,0C8.1,29.3,11.9,31,16,31s7.9-1.7,10.6-4.4c0,0,0,0,0,0s0,0,0,0  C29.3,23.9,31,20.1,31,16S29.3,8.1,26.6,5.4z M25.9,7.6c1.7,2,2.9,4.6,3.1,7.4h-2c-0.2-2.3-1.1-4.4-2.5-6L25.9,7.6z M15,3.1v2  c-2.3,0.2-4.4,1.1-6,2.5L7.6,6.1C9.6,4.4,12.2,3.3,15,3.1z M6.1,24.4c-1.7-2-2.9-4.6-3.1-7.4h2c0.2,2.3,1.1,4.4,2.5,6L6.1,24.4z   M5.1,15h-2c0.2-2.8,1.3-5.4,3.1-7.4L7.6,9C6.2,10.6,5.3,12.7,5.1,15z M15,28.9c-2.8-0.2-5.4-1.3-7.4-3.1L9,24.4  c1.7,1.4,3.8,2.3,6,2.5V28.9z M16,22c-0.3,0-0.6-0.1-0.8-0.4l-4-5c-0.3-0.4-0.3-0.9,0-1.2l4-5c0.4-0.5,1.2-0.5,1.6,0l4,5  c0.3,0.4,0.3,0.9,0,1.2l-4,5C16.6,21.9,16.3,22,16,22z M17,28.9v-2c2.3-0.2,4.4-1.1,6-2.5l1.4,1.4C22.4,27.6,19.8,28.7,17,28.9z   M23,7.6c-1.7-1.4-3.8-2.3-6-2.5v-2c2.8,0.2,5.4,1.3,7.4,3.1L23,7.6z M25.9,24.4L24.4,23c1.4-1.7,2.3-3.8,2.5-6h2  C28.7,19.8,27.6,22.4,25.9,24.4z"/>
                                </svg> @lang('live')</a></li>
                        <li {{ (request()->is('/promo')) ? 'class=active' : '' }}><a href="/promo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 1024 1024"><path fill="none" d="M640 832H64V640a128 128 0 1 0 0-256V192h576v160h64V192h256v192a128 128 0 1 0 0 256v192H704V672h-64v160zm0-416v192h64V416h-64z"/></svg>
                            @lang('PROMO')</a></li>
                      </ul>
                  </div>
                </div>
              </div>
              <!-- Footer NAV END -->
</div>

<div class="win-loss-popup">
    <div class="win-loss-popup__bg">
        <div class="win-loss-popup__inner">
            <div class="win-loss-popup__body">
                <img  loading="lazy"   src="{{ asset($activeTemplateTrue.'images/play/lose-message.png') }}" alt="lose message image" class="img-glow lose d-none">
                <img  loading="lazy"   src="{{ asset($activeTemplateTrue.'images/play/win-message.png') }}" alt="win message image" class="img-glow win d-none">
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
                <h5 class="modal-title" id="exampleModalLabel">@lang('Modal title')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                <button type="button" class="btn btn-primary">@lang('Save changes')</button>
            </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/assets/global/js/jquery-3.6.0.min.js"></script>
<!-- bootstrap js -->
<script src="/assets/global/js/bootstrap.bundle.min.js"></script>
<script src="/{{$activeTemplateTrue}}js/vendor/swiper-bundle.min.js"></script>
<!-- lightcase plugin -->
<script src="/{{$activeTemplateTrue}}js/vendor/lightcase.js"></script>
<!-- custom select js -->
<script src="/{{$activeTemplateTrue}}js/vendor/jquery.nice-select.min.js"></script>
<!-- slick slider js -->
{{-- Так как на бонго не используеться слик слайдер, пока скрыпты его я отклюаю --}}
{{-- <script src="/{{$activeTemplateTrue}}js/vendor/slick.min.js"></script> --}}
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

{{-- // Временные скрипты --}}
<script>
    //  import { useDynamicAdapt } from '../libs/dynamicAdapt.js'

    // useDynamicAdapt();


        // Sitebar
            jQuery(document).ready(function ($) {
                    let burger = $('.site_bar_top_wrapper .site_bar_burger');
                    let siteBar = $('.site_bar:not(.site_bar_hidden)');
                    let siteBarHidden = $('.site_bar_hidden');
                    let wrapper = $('.page-wrapper');
                    burger.on('click', function () {
                        siteBarHidden.toggleClass('active')
                        siteBar.toggleClass('reverse');
                        wrapper.toggleClass('active');
                    })
                })

                jQuery(document).ready(function ($) {
                    let item = $('.site_bar_nav_item:has(".site_bar_children") > a');
                    item.on('click', function (e) {
                        e.preventDefault();
                        $(this).toggleClass('active')
                        $(this).next('.site_bar_children').slideToggle()
                    })
                })

            jQuery(document).ready(function($){
            let burger  = $('.header_left_mobile .site_bar_burger');
            let mobileMenu = $('.header_mobile_menu')
            burger.on('click', function(){
                burger.toggleClass('active')
                mobileMenu.toggleClass('active')
            })
            })
            jQuery(document).ready(function($){
            let btn  = $('.header_left_user_btn');
            let mobileMenu = $('.header_user_menu')
            btn.on('click', function(){
                btn.toggleClass('active')
                mobileMenu.toggleClass('active')
            })
        })

        // Deposit popup
        // jQuery(document).ready(function($){
        //     let btn = $('.deposit_grid_right_btn ')
        //     let popUpWrapper = $('.deposit_popup_wrapper')
        //     let close = $('.deposit_popup_close')
        //     let PopUp = $('.deposit_popup')
        //     let closeBtn = $('.deposit_popup_btn_close')
        //     btn.on('click',function(){
        //     popUpWrapper.toggleClass('active')
        //     })
        //     close.on('click',function(){
        //     popUpWrapper.removeClass('active')
        //     })
        //     closeBtn.on('click',function(){
        //     popUpWrapper.removeClass('active')
        //     })
        //     $(document).mouseup( function(e){ // событие клика по веб-документу
        //     if ( !PopUp.is(e.target) // если клик был не по нашему блоку
        //         && PopUp.has(e.target).length === 0 ) { // и не по его дочерним элементам
        //             popUpWrapper.removeClass('active');
        //     }
        //     });
        // })
        const swiperHero = new Swiper('.hero_swiper', {
                autoplay: {
                    delay: 2000,
                },
                loop: true,
            });
            jQuery(document).ready(function ($) {
            let selectItems = $('.main-tabs__item')
            selectItems.on('click', function(){
                $(this).addClass('active')
                selectItems.not($(this)).removeClass('active')
            })
            console.log(selectItems)
            })
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

            // Mobile Accordion
            jQuery(document).ready(function ($) {
                let accItem = $('.bonuses_acc__item')
                accItem.on('click', function(){
                accItem.removeClass('active')
                $(this).toggleClass('active')
                })
            })
            // Mobile Accordion END
            jQuery(document).ready(function ($) {
                let balanceMenu = $('.header_user_menu_wrapper .header_right');
                let closeBalans = $('.header_balance__menu');
                closeBalans.on('click', function(){
                    balanceMenu.toggleClass('active')
                    closeBalans.toggleClass('active')
                })
            })
</script>
{{-- // Временные скрипты END --}}


<script>
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
