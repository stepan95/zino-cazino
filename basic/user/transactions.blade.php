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
                                    <span class="jsTotalBonus">{{ getAmount(auth()->user()->bonus) }}</span> {{ $general->cur_text }}
                                </p>
                            </div>
                        </div>
                        <div class="balance_right_item">
                            <img src="/assets/images/profile/Zinocoin.png" alt="zinocoin" class="balance_right_image">
                            <div class="balance_right_item_description">
                                <p class="balance_right_item_description_name">
                                    @lang('Total Bonus')
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
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
            	<div class="col-md-12">
            		<form id="filter-form" method="GET">
                		<span style="margin-left: 20px;">Date from:</span>
                		<input type="date"  onchange="$('#filter-form').submit();" name="filter-start" value="<?php echo (isset($_GET['filter-start']))? $_GET['filter-start'] : '2022-01-01'; ?>" min="2022-01-01" max="<?php echo date('Y-m-d')?>">
                		<span>Date to:</span>
                		<input type="date"  onchange="$('#filter-form').submit();" name="filter-end" value="<?php echo (isset($_GET['filter-end']))? $_GET['filter-end'] : date('Y-m-d'); ?>" max="<?php echo date('Y-m-d')?>">
                		
                		<span>Type of operation:</span>
                		<select name="filter-type" onchange="$('#filter-form').submit();">
                			<option value="0">All</option>
                			<option value="1" <?php echo (isset($_GET['filter-type']) && $_GET['filter-type'] == 1)? 'selected="selected"' : ''; ?>>Deposit</option>
                			<option value="2" <?php echo (isset($_GET['filter-type']) && $_GET['filter-type'] == 2)? 'selected="selected"' : ''; ?>>Withdraw</option>
                			<option value="3" <?php echo (isset($_GET['filter-type']) && $_GET['filter-type'] == 3)? 'selected="selected"' : ''; ?>>Invest</option>
                			<option value="4" <?php echo (isset($_GET['filter-type']) && $_GET['filter-type'] == 4)? 'selected="selected"' : ''; ?>>Win</option>
                			<option value="5" <?php echo (isset($_GET['filter-type']) && $_GET['filter-type'] == 5)? 'selected="selected"' : ''; ?>>Bonus</option>
                		</select>
                		@if(isset($_GET['filter-type']) && $_GET['filter-type'] == 3)
                    		<span>Invest from:</span>
                    		<select name="filter-from" onchange="$('#filter-form').submit();">
                    			<option value="0">All</option>
                    			<option value="1" <?php echo (isset($_GET['filter-from']) && $_GET['filter-from'] == 1)? 'selected="selected"' : ''; ?>>Money</option>
                    			<option value="2" <?php echo (isset($_GET['filter-from']) && $_GET['filter-from'] == 2)? 'selected="selected"' : ''; ?>>Bonus</option>
                    		</select>
                    	@endif
            		</form>
            	</div>
            	<style>
                    #filter-form {
                    	margin-bottom: 40px;
                    }
                    #filter-form .nice-select {
                    	display: inline-block;
                        width: 200px;
                        float: initial;
                    	min-height: 33px;
                    	height: 33px;
                    	margin-right: 10px;
                    }
                    #filter-form .nice-select .current {
                    	color: #212529;
                    }
                    #filter-form input {
                    	min-height: 33px;
                    	height: 33px;
                    	-webkit-border-radius: 3px;
                    	margin-right: 10px;
                    }
                </style>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table--responsive">
                                <table class="table style--two">
                                    <thead>
                                    <tr>
                                        <th scope="col">@lang('Transaction ID')</th>
                                        <th scope="col">@lang('Amount')</th>
                                        <th scope="col">@lang('Remaining Balance')</th>
                                        <th scope="col">@lang('Details')</th>
                                        <th scope="col">@lang('Date')</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(count($logs) >0)
                                        @foreach($logs as $k=>$data)
                                            <tr>
                                                <td data-label="#@lang('Trx')">{{$data->trx}}</td>
                                                <td data-label="@lang('Amount')">
                                                    <strong @if($data->trx_type == '+') class="text-success"
                                                            @else class="text-danger" @endif> {{($data->trx_type == '+') ? '+':'-'}} {{getAmount($data->amount)}} {{$general->cur_text}}</strong>
                                                </td>
                                                <td data-label="@lang('Remaining Balance')">
                                                    <strong
                                                        class="text-info">{{getAmount($data->post_balance)}} {{$general->cur_text}}</strong>
                                                </td>
                                                <td data-label="@lang('Details')">
                                                @if(strlen($data->details) > 100)
            									@else
            									{{ $data->details }}
            									@endif
                                                </td>
                                                <td data-label="@lang('Date')">{{ showDateTime($data->created_at) }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5"> @lang('No results found')!</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        {{ $logs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
