@extends($activeTemplate.'layouts.master')
@push('style')
    <link rel="stylesheet" href="/assets/templates/bongo/css/components/deposit.css">
@endpush
@section('content')
<section class="balance_profile">
        <div class="balance_profile_top">
            <div class="balance_container">
                Test
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
                                   @lang('ZINO COINS')
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
                                @lang('Dashboard')  
                            </a>
                        </div>   
                        <div class="balance_menu_item">
                            <p class="balance_menu_item_title">
                                @lang('Dashboard')
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
            <!-- Deposit Hero -->
            <section class="deposit_hero" style="background-image: url(/assets/images/frontend/homepage/deposit_hero_image_new.png);">
                <div class="deposit_page__container">
                    <div class="deposit_page_wrapper">
                        <div class="deposit_title_h2 deposit_hero_title">
                            <p> @lang('Deposit')</p>
                        </div>
                        <div class="deposit_grid">
                            @foreach($gatewayCurrency as $data)
                            <div class="deposit_grid_item">
                                <div class="deposit_grid_left">
                                    <img  loading="lazy"  src="{{$data->methodImage()}}" alt="{{$data->name}}">
                                    <div class="deposit_grid_title">
                                        {{$data->name}}
                                    </div>
                                </div>
                                <div class="deposit_grid_right">
                                    <p class="deposit_grid_right_item deposit_grid_right_limit">@lang('Limit')
                                        : {{getAmount($data->min_amount)}}
                                        - {{getAmount($data->max_amount)}} {{$general->cur_text}}</p>
                                    <p class="deposit_grid_right_item deposit_grid_right_charge">@lang('Charge')
                                        - {{getAmount($data->fixed_charge)}} {{$general->cur_text}}
                                        + {{getAmount($data->percent_charge)}}%</p>
                                    <button type="button"  data-id="{{$data->id}}" data-resource="{{$data}}"
                                        data-base_symbol="{{$data->baseSymbol()}}"
                                        class=" deposit_grid_right_btn main_btn_green deposit" data-toggle="modal" data-target="#exampleModal">
                                    @lang('Deposit')</button>    
                                    <?php if($data->name == 'Okipays') { ?>
                                        <p class="deposit_grid_right_item deposit_grid_right_cripto">Deposit by crypto
                                        </p>
                                    <?php } else { ?>
                                        <p class="deposit_grid_right_item deposit_grid_right_cripto">deposit by IRR (Toman)
                                        </p>
                                    <?php } ?>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- Deposit Hero  END -->




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal_dialog" role="document">
            <div class="modal-content section--bg">
                {{-- <div class="modal-header modal_header">
                    <h6 class="modal-title method-name" id="exampleModalLabel"></h6>

                </div> --}}
                <a href="javascript:void(0)" class="deposit_close mobile-exit" data-dismiss="modal" aria-label="Close" onclick="  jQuery('#exampleModal').close();"></a>
                <div class="deposit_popup_title method-name">
                    @lang('Deposit') <span>@lang('by')  {{$data->name}}</span>
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
                <form action="{{route('user.deposit.insert')}}" method="post" class="deposit_popup_form" target="_blank">
                    <label class="deposit_popup_label">@lang('Enter Amount') ({{$general->cur_text}}):
                        @if(auth()->user()->id == 4)
                            <input id="amount-mini" type="text" class="deposit_popup_input deposit_popup_amount" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" onchange="$('.error-amount').hide(); if(this.value < 0) {this.value = 0; $('.error-amount').show();}" name="amount" placeholder="0.00" required  value="{{old('amount')}}">
						@else
                            <input id="amount" type="text" class="deposit_popup_input deposit_popup_amount" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" onchange="ajaxbonus();  $('.error-amount').hide(); if(this.value < 10) {this.value = 10; $('.error-amount').show();}" name="amount" placeholder="0.00" required  value="{{old('amount')}}">
						@endif
							<label class="error-amount" for="amount" style="top: 100%; position: absolute; display: none;">@lang('Amount must be greater than 10 USD.')</label> 
                    </label>
                    <label  class="deposit_popup_label">@lang('Enter Promocode'):

                        <div class="deposit_promo_wrapper">
                            <input id="promo" type="text" class="deposit_popup_input deposit_popup_promocode" name="promocode" placeholder=""  value="{{old('promocode')}}" onchange="ajaxbonus()">
                            <button class="deposit_promocode__btn">@lang('Add')</button>
                        </div>
                        
                    </label>
                    <div class="deposit_popup_bonnus_promocode" id="ajaxbonuspromocode">
                       
                    </div>
                    <div class="deposit_popup_checkbox_wrapper">
                        <input id="without_bonus" type="checkbox" class="custom_checkbox" name="withoutbonus" value="1"  onchange="ajaxbonus()"> 
                        <label  for="without_bonus" class="deposit_popup_checkbox"> <span>@lang('No added benefits')</span></label>
                    </div>
                    <div class="deposit_popup_bonnus" id="ajaxbonus">
                       
                    </div>
                    <div class="form-group form_group">
                        <input type="hidden" name="currency" class="edit-currency" value="">
                        <input type="hidden" name="method_code" class="edit-method-code" value="">
                        <input type="hidden" id="method-code" value="">
                    </div>
                    @csrf
                    <div class="deposit_popup_form_btns">
                        <button type="button" class="deposit_popup_btn main_btn deposit_popup_btn_close" data-dismiss="modal">@lang('Close')</button>
                        <button type="submit" class="deposit_popup_btn main_btn_green deposit_popup_btn_confirm">@lang('Confirm')</button>
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
            	   $('#ajaxbonus').html(data.bonuses).show();
            	   $('#ajaxbonuspromocode').html(data.promos).show();
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
                var methodImage = $(this).parent().prev().children('.payment_metod_img').attr('src');
                var depositLimit = `@lang('Deposit Limit:') ${minAmount} - ${maxAmount}  ${baseSymbol}`;
                $('.depositLimit').text(depositLimit);
                var depositCharge = `@lang('Charge:') ${fixCharge} ${baseSymbol}  ${(0 < percentCharge) ? ' + ' +percentCharge + ' % ' : ''}`;
                $('.depositCharge').text(depositCharge);
                $('.method-name').html(`@lang('Deposit') <span> by ${result.name} </span>`);
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
        // let clooseBtn = $('.deposit_popup_close')
        // clooseBtn.on('click', function(){
        //     $('.modal.fade').removeClass('show')
        //     $('.bongo_body').removeClass('modal-open')
        // })
    </script>
@endpush


@push('style')
<style type="text/css">

</style>
@endpush
