@extends($activeTemplate.'layouts.master')
@section('content')

    <div class="page-wrapper" id="main-scrollbar" data-scrollbar="">


        <section class="balance_profile">
            <div class="balance_profile_top">
                <div class="balance_container">
                    <div class="balance_grid">
                        <div class="balance_left">
                            <div class="balance_left_type">
                                <p class="balance_left_name">@lang('Balance')</p>
                                <p class="balance_left_money"><span
                                        class="jsBalance">{{ getAmount(auth()->user()->balance+auth()->user()->bonus) }}</span> {{ $general->cur_text }}
                                </p>
                            </div>
                            <div class="balance_left_type">
                                <p class="balance_left_name">@lang('Money')</p>
                                <p class="balance_left_money"><span style="font-size: 16px;"><span
                                            class="jsMoney">{{ getAmount(auth()->user()->balance) }}</span> {{ $general->cur_text }}
                                </p>
                            </div>
                            <div class="balance_left_type" style="margin-bottom: 0;">
                                <p class="balance_left_name">@lang('Bonus')</p>
                                <p class="balance_left_money"><span
                                        class="jsBonus">{{ getAmount(auth()->user()->bonus) }}</span> {{ $general->cur_text }}
                                </p>
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
                                            <span
                                                class="jsTotalDeposit">{{ getAmount(auth()->user()->deposits->where('status',1)->sum('amount')) }}</span> {{ $general->cur_text }}
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
                                            <span
                                                class="jsTotalWithdraw">{{ getAmount(auth()->user()->withdrawals->where('status',1)->sum('amount')) }}</span> {{ $general->cur_text }}
                                        </p>
                                    </div>
                                </div>
                                <div class="balance_right_item">
                                    <img src="/assets/images/profile/money_bonus.png" alt="money_bonus"
                                         class="balance_right_image">
                                    <div class="balance_right_item_description">
                                        <p class="balance_right_item_description_name">
                                            @lang('Total Bonus')
                                        </p>
                                        <p class="balance_right_item_description_money">
                                            <span
                                                class="jsTotalBonus">{{ getAmount($totelbonus) }}</span> {{ $general->cur_text }}
                                        </p>
                                    </div>
                                </div>
                                <div class="balance_right_item">
                                    <img src="/assets/images/profile/Zinocoin.png" alt="zinocoin"
                                         class="balance_right_image">
                                    <div class="balance_right_item_description">
                                        <p class="balance_right_item_description_name">
                                            Zino Coins
                                        </p>
                                        <p class="balance_right_item_description_money">
                                            <span
                                                class="jsTotalBonus">{{ getAmount(auth()->user()->bonus_zino) }}</span>
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
                <div class="col-lg-12">
                    @foreach($notifications as $notification)
                        <a class="notify__item"
                           style="width: 100%; margin-bottom: 20px; display: inline-block; background-color: #01162f; padding: 20px; margin-left: -15px;"
                           href="{{ $notification->href }}">
                            <div class="notify__content">
                                <h6 class="title">{{ __($notification->name) }}</h6>
                                <span class="date"><i class="las la-clock"></i> {{ $notification->created_at->diffForHumans() }}</span>
                            </div>
                        </a>
                    @endforeach
                    @foreach($collection as $userNotification)
                        @if($userNotification->text != null)
                                <div class="modal fade" id="messageModal_{{$userNotification->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="messageModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{ $userNotification->title }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @if($userNotification->banner_extension != null)
                                                @if($userNotification->banner_extension != 'mp4')
                                                    <img src="{{ asset($userNotification->getBannerUrl()) }}" alt="">
                                                @else
                                                    <video style="margin: 0 auto; display: flex; padding-bottom: 15px; width: 100%" muted loop playsinline autoplay src="{{ asset($userNotification->getBannerUrl()) }}"></video>
                                                @endif
                                            @endif
                                            <div style="color: black" class="modal-body">
                                                {!! $userNotification->text !!}
                                            </div>
                                            <div class="modal-footer">
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endif

                        @if($userNotification->text === null && $userNotification->banner_extension != null)
                            <div class="modal fade" id="messageModal_{{$userNotification->id}}" tabindex="-1"
                                 role="dialog"
                                 aria-labelledby="messageModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document" style="margin: 13rem auto; max-width: 650px">
                                    <div class="modal-content" style="background: none">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                                style="position: absolute; right: 5px; color: #fff; z-index: 100">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div style="color: black; padding: 0" class="modal-body">
                                            @if($userNotification->banner_extension != 'mp4')
                                                <img src="{{ asset($userNotification->getBannerUrl()) }}" alt="">
                                            @else
                                                <video style="display:flex; justify-content: center; margin: 0 auto; width: 65%" muted autoplay loop playsinline src="{{ asset($userNotification->getBannerUrl()) }}">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <button type="button" class="btn btn-primary notify__item" data-toggle="modal"
                                data-target="#messageModal_{{$userNotification->id}}"
                                style="width: 100%; text-align: left; margin-bottom: 20px; display: inline-block; background-color: #01162f; padding: 20px; margin-left: -15px;">
                            <div class="notify__content">
                                <h6 class="title">{{ $userNotification->title }} - <i style="color: red; font-style:normal;">Ads</i>
                                </h6>
                                <span class="date"><i class="las la-clock"></i> {{ $userNotification->created_at->diffForHumans() }}</span>
                            </div>
                        </button>
                    @endforeach
                    {{ paginateLinks($notifications) }}
                </div>
            </div>
        </section>
    </div>
@endsection
