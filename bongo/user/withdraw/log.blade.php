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
                            <img  loading="lazy"  src="/assets/images/profile/money_deposit.png" alt="money_deposit"
                                class="balance_right_image">
                            <div class="balance_right_item_description">
                                <p class="balance_right_item_description_name">
                                    @lang('Total deposit')
                                </p>
                                <p class="balance_right_item_description_money">
                                    <span class="jsTotalDeposit">{{ getAmount(auth()->user()->deposits->where('status',1)->sum('amount')) }}</span> {{ $general->cur_text }}
                                </p>
                            </div>
                        </div>
                        <div class="balance_right_item">
                            <img  loading="lazy"  src="/assets/images/profile/money_withdrow.png" alt="money_withdrow"
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
                            <img  loading="lazy"  src="/assets/images/profile/money_bonus.png" alt="money_bonus" class="balance_right_image">
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
                            <img  loading="lazy"  src="/assets/images/profile/Zinocoin.png" alt="zinocoin" class="balance_right_image">
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
    </section>
    <div class="container pt-120 pb-120">
        <div class="row justify-content-center">
            <div class="col-lg-12 ">
                <div class="card card-deposit">
                    <div class="card-body p-0">
                        <table class="table style--two">
                            <thead>
                            <tr>
                                <th>@lang('Transaction ID')</th>
                                <th>@lang('Gateway')</th>
                                <th>@lang('Amount')</th>
                                <th>@lang('Charge')</th>
                                <th>@lang('After Charge')</th>
                                <th>@lang('Rate')</th>
                                <th>@lang('Receivable')</th>
                                <th>@lang('Status')</th>
                                <th>@lang('Time')</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($withdraws as $k=>$data)
                                <tr>
                                    <td data-label="#@lang('Trx')">{{$data->trx}}</td>
                                    <td data-label="@lang('Gateway')">{{ __($data->method->name) }}</td>
                                    <td data-label="@lang('Amount')">
                                        <strong>{{getAmount($data->amount)}} {{__($general->cur_text)}}</strong>
                                    </td>
                                    <td data-label="@lang('Charge')" class="text-danger">
                                        {{getAmount($data->charge)}} {{__($general->cur_text)}}
                                    </td>
                                    <td data-label="@lang('After Charge')">
                                        {{getAmount($data->after_charge)}} {{__($general->cur_text)}}
                                    </td>
                                    <td data-label="@lang('Rate')">
                                        {{rtrim($data->rate, 0)}} {{__($data->currency)}}
                                    </td>
                                    <td data-label="@lang('Receivable')" class="text-success">
                                        <strong>{{rtrim($data->final_amount, 0)}} {{__($data->currency)}}</strong>
                                    </td>
                                    <td data-label="@lang('Status')">
                                        @if($data->status == 2)
                                            <span class="badge badge--warning">@lang('Pending')</span>
                                        @elseif($data->status == 1)
                                            <span class="badge badge--success">@lang('Completed')</span>
                                            <button class="btn-info btn-rounded  badge approveBtn py-1"
                                                    data-admin_feedback="{{$data->admin_feedback}}"><i class="fas fa-info"></i></i></button>
                                        @elseif($data->status == 3)
                                            <span class="badge badge--danger">@lang('Rejected')</span>
                                            <button class="btn-info btn-rounded badge approveBtn py-1"
                                                    data-admin_feedback="{{$data->admin_feedback}}"><i class="fas fa-info"></i></button>
                                        @endif

                                    </td>
                                    <td data-label="@lang('Time')">
                                        <i class="las la-calendar"></i> {{showDateTime($data->created_at)}}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __('No transactions') }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-4">
                    {{$withdraws->links()}}
                </div>
            </div>
        </div>
    </div>



    {{-- Detail MODAL --}}
    <div id="detailModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content section--bg">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('Details')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="withdraw-detail"></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        (function($){
            "use strict";
            $('.approveBtn').on('click', function() {
                var modal = $('#detailModal');
                var feedback = $(this).data('admin_feedback');
                modal.find('.withdraw-detail').html(`<p> ${feedback} </p>`);
                modal.modal('show');
            });
        })(jQuery);

    </script>
@endpush
