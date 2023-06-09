@extends($activeTemplate.'layouts.auth')


@section('content')

    @php
        $registerContent = getContent('register.content',true);
    @endphp

          <!-- Registration Hero -->
          <section class="registration_hero"
          style="background-image: url(/assets/images/frontend/register/registration_hero_image.png);">
          <div class="registration_page__container">
              <div class="registration_page_wrapper">
                  <div class="registration_title_h1 registration_hero_title">
                      <p>{{ __(@$registerContent->data_values->title) }}</p>
                      <div class="registration_subtitle">
                          @lang('Register and get') 
                          <a href="#">@lang('10$ welcome bonus')</a>
                      </div>
                  </div>
                  <div class="registration_hero_bottom">
                      

                    <form action="{{ route('user.register') }}" method="POST" onsubmit="return submitUserForm();" class="registration_hero_form">        
                            @if(session()->get('reference') != null)
                                <div class="form-group col-md-12">
                                    <label for="referenceBy">{{ __('Reference BY') }}</label>

                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="las la-user"></i></div>
                                        </div>
                                        <input type="text" name="referBy" id="referenceBy" class="form-control"
                                                value="{{session()->get('reference')}}" readonly>
                                    </div>
                                </div>
                            @endif

                          <label for="username" class="registration_hero_label"> {{ __('Username') }}:
                              <input id="username" type="text" class="registration_hero_input registration_hero_name checkUser" name="username" value="{{ old('username') }}" required>
                              <small class="text-danger usernameExist"></small>
                          </label>


                          <label for="email" class="registration_hero_label"> @lang('Email address')
                              <input id="email" type="email" name="email" class="registration_hero_input registration_hero_email"  value="{{ old('email') }}" required>
                          </label>


                          <label for="password" class="registration_hero_label"> @lang('Password'):
                              <input id="password" type="password" class="registration_hero_input registration_hero_password" name="password" required>
                              @if($general->secure_password)
                              <div class="input-popup">
                                  <p class="error lower">@lang('1 small letter minimum')</p>
                                  <p class="error capital">@lang('1 capital letter minimum')</p>
                                  <p class="error number">@lang('1 number minimum')</p>
                                  <p class="error special">@lang('1 special character minimum')</p>
                                  <p class="error minimum">@lang('6 character password')</p>
                              </div>
                              @endif                              
                          </label>


                          <label or="password-confirm" class="registration_hero_label"> @lang('Confirm Password'):
                              <input id="password-confirm" type="password" class="registration_hero_input registration_hero_c_password" name="password_confirmation" required autocomplete="new-password">
                          </label>
                          
 
                          <label for="password" class="registration_hero_label"> @lang('Promo code')
                              <input id="promocode" type="text" name="promocode" class="registration_hero_input registration_hero_promocode" value="{{ old('promocode') }}">
                              @if($general->secure_password)
                                    <div class="input-popup">
                                        <p class="error lower">@lang('1 small letter minimum')</p>
                                        <p class="error capital">@lang('1 capital letter minimum')</p>
                                        <p class="error number">@lang('1 number minimum')</p>
                                        <p class="error special">@lang('1 special character minimum')</p>
                                        <p class="error minimum">@lang('6 character password')</p>
                                    </div>
                                @endif
                          </label>
                          @csrf
                          @include($activeTemplate.'partials.custom_captcha')

                          @if($general->agree)
                          @php
                            $extra_pages = getContent('extra.element');
                          @endphp
                          <div class="registration_hero_checkbox_wrapper">

                              <input type="checkbox" id="agree" name="agree" checked>

                              <label for="agree" class="registration_hero_checkbox">
                                @lang('I am 18 years old and I accept the')
                                <a href="/privacy">{{ __('Privacy Policy') }}</a> and 
                                <a href="/terms">{{ __('Terms and Conditions') }}</a>
                                 {{-- @forelse($extra_pages as $item)
                                <a href="{{ route('extra.details', [$item->id, @slug($item->data_values->title)]) }}">{{ __(@$item->data_values->title) }}</a> {{ $loop->last ? '' : 'and' }}
                                 @empty

                                @endforelse --}}
                              </label>

                          </div>
                          @endif
                          <button type="submit" class="registration_hero_form_btn main_btn_green">@lang('Register')</button>

  
                      </form>

                      <div class="login_hero_right_btns">
                        <a href="{{ route('user.login') }}" class="login_hero_right_btn main_btn">@lang('SIGN IN')</a>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Registration Hero  END -->









<div class="modal fade" id="existModalCenter" tabindex="-1" role="dialog" aria-labelledby="existModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="existModalLongTitle">@lang('You are with us')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6 class="text-center">@lang('You already have an account please Sign in ')</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
        <a href="{{ route('user.login') }}" class="btn btn-primary">@lang('Login')</a>
      </div>
    </div>
  </div>
</div>
@endsection
@push('style')
<style>
    .country-code .input-group-prepend .input-group-text{
        background: #fff !important;
    }
    .country-code select{
        border: none;
    }
    .country-code select:focus{
        border: none;
        outline: none;
    }
    .hover-input-popup {
        position: relative;
    }
    .hover-input-popup:hover .input-popup {
        opacity: 1;
        visibility: visible;
    }
    .input-popup {
        position: absolute;
        bottom: 65%;
        left: 50%;
        width: 280px;
        background-color: #1a1a1a;
        color: #fff;
        padding: 20px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }
    .input-popup::after {
        position: absolute;
        content: '';
        bottom: -19px;
        left: 50%;
        margin-left: -5px;
        border-width: 10px 10px 10px 10px;
        border-style: solid;
        border-color: transparent transparent #1a1a1a transparent;
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }
    .input-popup p {
        padding-left: 20px;
        position: relative;
    }
    .input-popup p::before {
        position: absolute;
        content: '';
        font-family: 'Line Awesome Free';
        font-weight: 900;
        left: 0;
        top: 4px;
        line-height: 1;
        font-size: 18px;
    }
    .input-popup p.error {
        text-decoration: line-through;
    }
    .input-popup p.error::before {
        content: "\f057";
        color: #ea5455;
    }
    .input-popup p.success::before {
        content: "\f058";
        color: #28c76f;
    }
</style>
@endpush
@push('script-lib')
<script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
@endpush
@push('script')
    <script>
      "use strict";
        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span class="text-danger">@lang("Captcha field is required.")</span>';
                return false;
            }
            return true;
        }
        (function ($) {
            @if($mobile_code)
            $(`option[data-code={{ $mobile_code }}]`).attr('selected','');
            @endif

            $('select[name=country]').change(function(){
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
            });
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
            @if($general->secure_password)
                $('input[name=password]').on('input',function(){
                    secure_password($(this));
                });
            @endif

            $('.checkUser').on('focusout',function(e){
                var url = '{{ route('user.checkUser') }}';
                var value = $(this).val();
                var token = '{{ csrf_token() }}';
                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {mobile:mobile,_token:token}
                }
                if ($(this).attr('name') == 'email') {
                    var data = {email:value,_token:token}
                }
                if ($(this).attr('name') == 'username') {
                    var data = {username:value,_token:token}
                }
                $.post(url,data,function(response) {
                  if (response['data'] && response['type'] == 'email') {
                    $('#existModalCenter').modal('show');
                  }else if(response['data'] != null){
                    $(`.${response['type']}Exist`).text(`${response['type']} already exist`);
                  }else{
                    $(`.${response['type']}Exist`).text('');
                  }
                });
            });


        })(jQuery);

    </script>
@endpush
