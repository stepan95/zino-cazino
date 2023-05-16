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
    <section class="pb-120">
        <div class="container">
            <h1 class="profile_pages_title">
                Deposit
            </h1>
            <div class="row justify-content-center">

                @foreach($gatewayCurrency as $data)
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="p-method-card">
                            <div class="thumb">
                                <img src="{{$data->methodImage()}}" class="card-img-top w-100 payment_metod_img" alt="{{$data->name}}">
                            </div>
                            <div class="content">
                                <ul class="p-method-card-list 111">
                                    <li class="p-method-card_name">
                                        {{__($data->name)}}</li>
                                    <li class="p-method-card_limets">@lang('Limit')
                                        : {{getAmount($data->min_amount)}}
                                        - {{getAmount($data->max_amount)}} {{$general->cur_text}}</li>
                                    <li class="p-method-card_limets"> @lang('Charge')
                                        - {{getAmount($data->fixed_charge)}} {{$general->cur_text}}
                                        + {{getAmount($data->percent_charge)}}%
                                    </li>
                                </ul>
                                <div>
                                	<button type="button"  data-id="{{$data->id}}" data-resource="{{$data}}"
                                                data-base_symbol="{{$data->baseSymbol()}}"
                                                class=" btn btn-md deposit p-method-card-btn" data-toggle="modal" data-target="#exampleModal">
                                            @lang('Deposit')</button>
                                     <?php if($data->name == 'Okipays') { ?>
                                         <p style="margin-top: 15px; text-align: center;">deposit by crypto</p>
                                     <?php } else { ?>
                                     	<p style="margin-top: 15px; text-align: center;">deposit by IRR (Toman)</p>
                                     <?php } ?>
                                            
                                 </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <div class="modal fade zoni_dep__modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal_dialog" role="document">
            <div class="zoni_dep__content modal-content section--bg">
                <div class="modal-header modal_header">
                    <img class="methodImage" src="" alt="">     
                    <h6 class="zoni_dep_title method-name" id="exampleModalLabel"></h6>
                    <!-- <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a> -->
                </div>
                <div class="deposit_popup__btns">
                    <div class="deposit_popup__btn active">
                        10
                    </div>
                    <div class="deposit_popup__btn">
                        30
                    </div>

                    <div class="deposit_popup__btn">
                        50
                    </div>
                    <div class="deposit_popup__btn">
                        100
                    </div>
                    <div class="deposit_popup__btn">
                        300
                    </div>
                    <div class="deposit_popup__btn">
                        500
                    </div>
                </div>
                <form class="zoni_dep__form" action="{{route('user.deposit.insert')}}" method="post" target="_blank">
                    @csrf
                    <div class="modal-body modal_body">
                        <div class="form-group form_group">
                            <input type="hidden" name="currency" class="edit-currency" value="">
                            <input type="hidden" name="method_code" class="edit-method-code" value="">
                            <input type="hidden" id="method-code" value="">
                        </div>
                        <div class="form-group form_group zino_dep__input">
                            <label>@lang('Enter Amount'):</label>
                            <div class="input-group input_group">
                            	@if(auth()->user()->id == 4)
                                	<input id="amount" type="text" class="form-control form-control-lg deposit_popup_amount" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" onchange="$('.error-amount').hide(); if(this.value < 0) {this.value = 0; $('.error-amount').show();}" name="amount" placeholder="0.00" required  value="{{old('amount')}}">
								@else
                                	<input id="amount" type="text" class="form-control form-control-lg deposit_popup_amount" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" onchange="ajaxbonus(); $('.error-amount').hide(); if(this.value < 10) {this.value = 10; $('.error-amount').show();}" name="amount" placeholder="0.00" required  value="{{old('amount')}}">
								@endif
								<label class="error-amount" for="amount" style="top: 100%; position: absolute; display: none;">Amount must be greater than 10 USD.</label>                                
                                <div class="input-group-append">
                                    <span class="input-group-text currency-addon addon-bg">{{$general->cur_text}}</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group form_group zino_dep__input">
                            <label>@lang('Enter Promocode'):</label>
                            <div class="input-group input_group">
                            	<input id="promo" type="text" class="form-control form-control-lg" name="promocode" placeholder=""  value="{{old('promocode')}}" onchange="ajaxbonus()">
								<button class="zino_promo__btn">
                                    add
                                </button>
                            </div>
                        </div>
                        <div class="zino_popup__bottom">
                            <div class="deposit_popup_bonnus zino_popup_bonnus_first"  id="ajaxbonus">
                            </div>
                            <div class="deposit_popup_bonnus zino_popup_bonnus_first">
                            	<div class="deposit_bonnus__item">
                                    + <span>242</span> Bonus
                                </div>
                                <div class="deposit_bonnus__item">
                                    + <span>242</span> Bonus
                                </div>
                            </div>
                            	
                            <div class="form-group form_group zino_dep__bonus">
                                <label  style="width: 100%;"><input id="without_bonus" type="checkbox" class="custom_checkbox" name="withoutbonus" value="1" style="margin-right: 20px; float: left;" onchange="ajaxbonus()"> <span>@lang('No Added benefits')</span></label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer modal_footer" style="background: transparent;">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                        <button type="submit" class="btn base--bg">@lang('Confirm')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



@push('script')
    <script>
        function ajaxbonus() {
        	$('#ajaxbonus').html('').hide();
         	 $.ajax({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               url: '{{route("user.deposit.ajaxbonus")}}',
               method: 'POST',
               data: { 'amount': $('#amount').val(), 'promo': $('#promo').val(), 'without_bonus': $('#without_bonus').is(':checked'), 'method_code': $('#method-code').val() },
               success: function(data) {
            	   $('#ajaxbonus').html(data).show();
               },
           });
        }

        $(document).ready(function(){
            "use strict";
            $('.deposit').on('click', function () {
                var id = $(this).data('id');
                var result = $(this).data('resource');
                var minAmount = $(this).data('min_amount');
                var maxAmount = $(this).data('max_amount');
                var baseSymbol = "{{$general->cur_text}}";
                var fixCharge = $(this).data('fix_charge');
                var percentCharge = $(this).data('percent_charge');
                var methodImage = $(this).parent().parent().parent().children().children().attr('src')
                console.log(methodImage)
                var depositLimit = `@lang('Deposit Limit:') ${minAmount} - ${maxAmount}  ${baseSymbol}`;
                $('.depositLimit').text(depositLimit);
                var depositCharge = `@lang('Charge:') ${fixCharge} ${baseSymbol}  ${(0 < percentCharge) ? ' + ' +percentCharge + ' % ' : ''}`;
                $('.depositCharge').text(depositCharge);
                $('.method-name').html(`@lang('<span>Deposit</span> /By') ${result.name}`);
                $('.currency-addon').text(baseSymbol);
                $('.methodImage').attr('src', methodImage)

                $('.edit-currency').val(result.currency);
                $('.edit-method-code').val(result.method_code);
                $('#method-code').val(result.id);
                ajaxbonus();
            });
        });
        jQuery(document).ready(function ($) {
        let depBtns = $('.deposit_popup__btn')
        let depInput = $('.deposit_popup_amount')
        let newVal = depInput.val(+ $('.deposit_popup__btn.active').text())
        depBtns.on('click', function(){
            depBtns.removeClass('active')
            $(this).toggleClass('active')
            newVal = depInput.val(+$(this).text())
            depInput.trigger('change')
        })
        })
    </script>
@endpush


@push('style')
<style type="text/css">

</style>
@endpush
