@extends($activeTemplate.'layouts.master')

@section('content')
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
                                    @lang('Total withdraw')
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
                                    @lang('Total bonus')
                                </p>
                                <p class="balance_right_item_description_money">
                                    <span class="jsTotalBonus">{{ getAmount(auth()->user()->bonus) }}</span> {{ $general->cur_text }}
                                </p>
                            </div>
                        </div>
                        <div class="balance_right_item">
                            <img src="/assets/images/profile/Zinocoin.png" alt="zinocoin" class="balance_right_image">
                            <div class="balance_right_item_description">
                                <p class="balance_right_item_description_name">
                                    @lang('Total bonus')
                                </p>
                                <p class="balance_right_item_description_money">
                                    <span class="jsTotalBonus">{{ getAmount(auth()->user()->bonus_zino) }}</span> {{ $general->cur_text }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="balance_menu balance_menu_desctop">
                        <div class="balance_menu_item">
                            <a href="{{ route('user.home') }}" class="balance_menu_item_title">
                                @lang('Dashboard')  
                            </a>
                        </div>   
                        <div class="balance_menu_item">
                            <p class="balance_menu_item_title">
                                @lang('Deposit')
                            </p>
                            <ul class="balance_menu_item_list">
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('user.deposit') }}"> @lang('Deposit money')</a>
                                </li>
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('user.deposit.history') }}"> @lang('History')</a>
                                </li>
                            </ul>
                        </div>
                        <div class="balance_menu_item">
                            <p class="balance_menu_item_title">
                                @lang('Withdraw')
                            </p>
                            <ul class="balance_menu_item_list">
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('user.withdraw') }}"> @lang('Withdraw')</a>
                                </li>
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('user.withdraw.history') }}">@lang('Withdraw History')</a>
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
                                @lang('reports')
                            </p>
                            <ul class="balance_menu_item_list">
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('user.gameLog') }}"> @lang('Game Log')</a>
                                </li>
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('user.commissionLog') }}"> @lang('Commission Log')</a>
                                </li>
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('user.transactions') }}"> @lang('Transactions')</a>
                                </li>
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('user.notifications') }}"> @lang('Notifications')</a>
                                </li>
                            </ul>
                        </div>
                        <div class="balance_menu_item">
                            <p class="balance_menu_item_title">
                                @lang('Support')
                            </p>
                            <ul class="balance_menu_item_list">
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('ticket.open') }}"> @lang('Create New')</a>
                                </li>
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('ticket') }}"> @lang('My Tickets')</a>
                                </li>
                            </ul>
                        </div>
                        <div class="balance_menu_item">
                            <p class="balance_menu_item_title">
                                @lang('Account')
                            </p>
                            <ul class="balance_menu_item_list">
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('user.change.password') }}"> @lang('Change Password')</a>
                                </li>
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('user.profile.setting') }}"> @lang('Profile Setting')</a>
                                </li>
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('user.twofactor') }}"> @lang('2FA Security')</a>
                                </li>
                                <li class="balance_menu_item_list_item">
                                    <a href="{{ route('user.logout') }}"> @lang('logout')</a>
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
                            @lang('Deposit')
                        </p>
                        <ul class="balance_menu_item_list">
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.deposit') }}"> @lang('Deposit money')</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.deposit.history') }}"> @lang('History')</a>
                            </li>
                        </ul>
                    </div>
                    <div class="balance_menu_item">
                        <p class="balance_menu_item_title">
                            @lang('Withdraw')
                        </p>
                        <ul class="balance_menu_item_list">
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.withdraw') }}"> @lang('Withdraw')</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.withdraw.history') }}">@lang('Withdraw History')</a>
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
                             @lang('reports')
                        </p>
                        <ul class="balance_menu_item_list">
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.gameLog') }}"> @lang('Game Log')</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.commissionLog') }}"> @lang('Commission Log')</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.transactions') }}"> @lang('Transactions')</a>
                            </li>
                        </ul>
                    </div>
                    <div class="balance_menu_item">
                        <p class="balance_menu_item_title">
                            Support
                        </p>
                        <ul class="balance_menu_item_list">
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('ticket.open') }}"> @lang('Create New')</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('ticket') }}"> @lang('My Tickets')</a>
                            </li>
                        </ul>
                    </div>
                    <div class="balance_menu_item">
                        <p class="balance_menu_item_title">
                            @lang('Account')
                        </p>
                        <ul class="balance_menu_item_list">
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.change.password') }}"> @lang('Change Password')</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.profile.setting') }}"> @lang('Profile Setting')</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.twofactor') }}"> @lang('2FA Security')</a>
                            </li>
                            <li class="balance_menu_item_list_item">
                                <a href="{{ route('user.logout') }}"> @lang('logout')</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table--responsive">
                                <table class="table style--two">
                                    <thead>
                                        <tr>
                                            <th>@lang('Commission From')</th>
                                            <th>@lang('Commission Level')</th>
                                            <th>@lang('Amount')</th>
                                            <th>@lang('Title')</th>
                                            <th>@lang('Transaction')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($logs as $log)
                                        <tr>
                                            <td data-label="@lang('Commission From')">{{ __($log->userFrom->username) }}</td>
                                            <td data-label="@lang('Commission Level')">{{ __($log->level) }}</td>
                                            <td data-label="@lang('Amount')">{{ __($log->amount) }} {{ $general->cur_text }}</td>
                                            <td data-label="@lang('Title')">{{ __($log->title) }}</td>
                                            <td data-label="@lang('Transaction')">{{ __($log->trx) }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="100%" class="text-center">@lang('Log Not found')</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        {{$logs->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
