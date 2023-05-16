@extends($activeTemplate.'layouts.auth')
@section('content')
    <!-- account section start -->
    @php
        $loginContent = getContent('login.content',true);
    @endphp
    <section class="login-section bg_img" style="background-image: url( {{ getImage('assets/images/frontend/login/' . @$loginContent->data_values->image, '1920x1280') }} );">
        <div class="login-area">
            <div class="login-area-inner">
                <div class="text-center">
                    <a class="site-logo mb-4" href="{{ route('home') }}"><img
                            src="{{ asset('assets/images/logoIcon/logo.png') }}" alt="site-logo"></a>
                    <h2 class="title mb-2">{{ __($loginContent->data_values->title) }}</h2>
                    <hr class="hr1"/>
                  {{--  <p>{{ __($loginContent->data_values->sub_title) }}</p>--}}
                </div>
                <form method="POST" action="{{ route('user.login')}}" onsubmit="return submitUserForm();" class="login-form mt-50">
                    @csrf
                    <div class="form-group">
                        <label>@lang('Username or Email')</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="las la-user"></i></div>
                            </div>
                            <input type="text" class="form-control" value="{{ old('username') }}" name="username">
                        </div>
                    </div><!-- form-group end -->
                    <div class="form-group">
                        <label>@lang('Password')</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="las la-key"></i></div>
                            </div>
                            <input id="password" type="password" class="form-control" name="password">
                            <a href="#" class="password-control"></a>
                        </div>
                    </div><!-- form-group end -->

                    <div class="d-flex justify-content-center w-100 mb-3">
                        @php echo loadReCaptcha() @endphp
                    </div>

                    @include($activeTemplate.'partials.custom_captcha')

                    <div class="mt-5 flx-but">
                        <button type="submit" class="cmn-btn rounded-0 w-100">@lang('Login Now')</button>
                        <div class="d-flex flex-wrap justify-content-between align-items-center havext">
                            <p>@lang("Haven't an account?")</p>
                        </div>
                        <a href="{{ route('user.register') }}"  class="text--base crext">@lang('Create an account')</a>
                    </div>
                    <p><a href="{{ route('user.password.request') }}"  class="text--base crext fg">@lang('Forget password?')</a></p>
                </form>
            </div>
        </div>
    </section>
    <!-- account section end -->
@endsection
<style>
.input-group {
	position: relative;
}
.password-control {
	position: absolute;
    bottom: 15px;
    right: 20px;
    display: inline-block;
    width: 20px;
    height: 20px;
	background: url(/assets/templates/basic/images/view.svg?1) 0 0 no-repeat;
	color: white;
}
.password-control.view {
	background: url(/assets/templates/basic/images/no-view.svg?1) 0 0 no-repeat;
}
</style>
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
            $('body').on('click', '.password-control', function(){
            	if ($( "#password" ).attr('type') == 'password'){
            		$(this).addClass('view');
            		$( "#password" ).attr('type', 'text');
            	} else {
            		$(this).removeClass('view');
            		$( "#password" ).attr('type', 'password');
            	}
            	return false;
            });
        })(jQuery);
    </script>
@endpush
