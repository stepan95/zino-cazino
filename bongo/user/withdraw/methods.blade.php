@extends($activeTemplate.'layouts.master')

@section('content')
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
                                <img  loading="lazy"  src="/assets/images/profile/money_deposit.png" alt="money_deposit"
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
                                <img  loading="lazy"  src="/assets/images/profile/money_withdrow.png" alt="money_withdrow"
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
                                <img  loading="lazy"  src="/assets/images/profile/money_bonus.png" alt="money_bonus"
                                     class="balance_right_image">
                                <div class="balance_right_item_description">
                                    <p class="balance_right_item_description_name">
                                        @lang('Total Bonus')
                                    </p>
                                    <p class="balance_right_item_description_money">
                                        <span
                                            class="jsTotalBonus">{{ getAmount(auth()->user()->bonus) }}</span> {{ $general->cur_text }}
                                    </p>
                                </div>
                            </div>
                            <div class="balance_right_item">
                                <img  loading="lazy"  src="/assets/images/profile/Zinocoin.png" alt="zinocoin"
                                     class="balance_right_image">
                                <div class="balance_right_item_description">
                                    <p class="balance_right_item_description_name">
                                        @lang('Total Bonus')
                                    </p>
                                    <p class="balance_right_item_description_money">
                                        <span
                                            class="jsTotalBonus">{{ getAmount(auth()->user()->bonus_zino) }}</span> {{ $general->cur_text }}
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
    <div class="container pt-120 pb-120">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <form id="withdrawForm" class="card card-withdraw" action="{{ route('user.withdraw.money') }}" method="POST">
                    @csrf
                    <h5 class="card-header text-center mt-3 pb-0">@lang('WITHDRAW')</h5>
                    <div class="card-body card-body-withdraw">
                        <div style="text-align: right;">@lang('Money balance:')
                            <span>{{ getAmount(auth()->user()->balance) }}{{ $general->cur_text }}</span></div>
                        <div class="form-group">
                            <label>@lang('Enter Amount'):</label>
                            <div class="input-group">
                                <input id="amount" type="text" class="form-control form-control-lg"
                                       onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" name="amount"
                                       placeholder="0.00" required="" value="{{old('amount')}}">
                                <div class="input-group-append">
                                    <span
                                        class="input-group-text addon-bg currency-addon">{{__($general->cur_text)}}</span>
                                </div>
                            </div>
                            <p class="ticket-attachments-message text-muted mb-3">@lang('Min 5$ and Max amount of Money balance')</p>
                        </div>
                        <div class="form-group field-fix">
                            <label>@lang('Select Crypto'):</label>
                            <select id="method_code" name="method_code" class="form-control" required="">
                                <option value="">Select currency</option>
                                @foreach($withdrawMethod as $method)
                                    <option value="{{ $method->id }}">{{ $method->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>@lang('Send to (enter address)'):</label>
                            <div class="input-group">
                                <input id="wallet" type="text" class="form-control form-control-lg" name="wallet"
                                       required="">
                            </div>
                        </div>
                        <div class="form-group field-fix">
                            <label>@lang('Send to (choose network)'):</label>
                            <select id="network" name="network" class="form-control" required="">
                                <option value="">Select network</option>
                                <option value="Main">Main</option>
                                <option value="BEP 20">BEP 20</option>
                                <option value="TRC 20">TRC 20</option>
                                <option value="ERC 20">ERC 20</option>

                            </select>
                        </div>
                        <p class="ticket-attachments-message text-muted mb-3">@lang('Note: Transfer fee included')</p>

                        <div class="card-footer text-center">
                            <button class="btn base--bg">@lang('ORDER WITHDRAW')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if($errors->has('modal'))
        <div class="modal fade" id="withdrawError" tabindex="-1" role="dialog"
             aria-labelledby="withdrawErrorLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><? xml version = "1.0" encoding = "UTF-8" ?>
                            <svg enable-background="new 0 0 488.451 488.451" version="1.1" viewBox="0 0 488.45 488.45"
                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path
                                    d="m484.12 412.01-212.2-367.6c-12.3-21.3-43.1-21.3-55.4 0l-212.2 367.6c-12.3 21.3 3.1 48 27.7 48h424.4c24.6 0 40-26.7 27.7-48zm-239.6-254.4c13.6 0 24.6 11.3 24.2 24.9l-4 139.6c-0.3 11-9.3 19.7-20.3 19.7s-20-8.8-20.3-19.7l-3.9-139.6c-0.3-13.6 10.6-24.9 24.3-24.9zm-0.3 252.5c-13.9 0-25.2-11.3-25.2-25.2s11.3-25.2 25.2-25.2 25.2 11.3 25.2 25.2-11.3 25.2-25.2 25.2z"
                                    fill="red"/></svg>
                            SOME ERROR
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <? xml version = "1.0" encoding = "UTF-8" ?>
                            <svg enable-background="new 0 0 378.303 378.303" version="1.1" viewBox="0 0 378.3 378.3"
                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
<polygon
    points="378.3 28.285 350.02 0 189.15 160.87 28.285 0 0 28.285 160.87 189.15 0 350.02 28.285 378.3 189.15 217.44 350.02 378.3 378.3 350.02 217.44 189.15"
    fill="grey"/></svg>
                        </button>
                    </div>
                    <div style="color: #ffffff; border: none" class="modal-body">
                        @if($errors->has('modal'))
                            @foreach($errors->get('modal') as $val)
                                    <?php echo $val ?> <br/>
                            @endforeach
                        @endif
                        <p class="ok-but">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(session('success'))
        <div class="modal fade" id="withdrawSuccess" tabindex="-1" role="dialog"
             aria-labelledby="withdrawErrorLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><? xml version = "1.0" encoding = "UTF-8" ?>
                                                                           <? xml version = "1.0" encoding = "UTF-8" ?>
                            <svg enable-background="new 0 0 489 489" version="1.1" viewBox="0 0 489 489"
                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path fill="#0cae00"
                                                                                               d="M417.4,71.6C371.2,25.4,309.8,0,244.5,0S117.8,25.4,71.6,71.6S0,179.2,0,244.5s25.4,126.7,71.6,172.9S179.2,489,244.5,489    s126.7-25.4,172.9-71.6S489,309.8,489,244.5S463.6,117.8,417.4,71.6z M244.5,462C124.6,462,27,364.4,27,244.5S124.6,27,244.5,27    S462,124.6,462,244.5S364.4,462,244.5,462z"/>
                                <path fill="#0cae00"
                                      d="m301.6 188.1-84.1 84.2-30.1-30.1c-5.3-5.3-13.8-5.3-19.1 0s-5.3 13.8 0 19.1l39.7 39.7c2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l93.7-93.7c5.3-5.3 5.3-13.8 0-19.1-5.2-5.4-13.8-5.4-19.1-0.1z"/></svg>
                            OK
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <? xml version = "1.0" encoding = "UTF-8" ?>
                            <svg enable-background="new 0 0 378.303 378.303" version="1.1" viewBox="0 0 378.3 378.3"
                                 xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
<polygon
    points="378.3 28.285 350.02 0 189.15 160.87 28.285 0 0 28.285 160.87 189.15 0 350.02 28.285 378.3 189.15 217.44 350.02 378.3 378.3 350.02 217.44 189.15"
    fill="grey"/></svg>
                        </button>
                    </div>
                    <div style="color: #ffffff; border: none" class="modal-body">
                        <span>Your order for withdrawal has been accepted for consideration. you will be notified of the withdrawal by receiving a notification and e-mail</span>
                        <p class="ok-but">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() { // Аналог $(document).ready(function(){
                let myModalSuccess = new bootstrap.Modal(document.getElementById('withdrawSuccess'));
                myModalSuccess.toggle();
            });
        </script>
    @endif
    @if($errors->has('modal'))
        <script>
            document.addEventListener('DOMContentLoaded', function() { // Аналог $(document).ready(function(){
                let myModal = new bootstrap.Modal(document.getElementById('withdrawError'));
                myModal.toggle();
            });
        </script>
    @endif

@endsection
@push('script')
@endpush
