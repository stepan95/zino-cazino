@extends($activeTemplate.'layouts.auth')

@section('content')
    @php
        $loginContent = getContent('login.content',true);
        // @$loginContent->data_values->image
    @endphp
            <!-- Login Hero -->
            <section class="login_hero"
                style="background-image: url('/assets/images/frontend/login/login_hero_image.png');">
                <div class="login_page__container">
                    <div class="login_page_wrapper">
                        <div class="login_title_h1 login_hero_title">
                            <p> {{ __($loginContent->data_values->title) }}</p>
                            <div class="login_subtitle">
                                @lang('Register and get') 
                                <a href="#">@lang('10$ welcome bonus')</a>
                            </div>
                        </div>
                        <div class="login_hero_bottom">
                            <div class="login_hero_left">
                                <form method="POST" action="{{ route('user.login')}}" onsubmit="return submitUserForm();" class="login_hero_form">
                                    @csrf
                                    <label class="login_hero_label"> @lang('Username or Email')
                                        <input type="text" value="{{ old('username') }}" name="username" class="login_hero_input login_hero_name">
                                    </label>
    
                                    <label class="login_hero_label"> @lang('Password'):
                                        <input type="password" name="password" class="login_hero_input login_hero_password">
                                    </label>
    
                                        @php echo loadReCaptcha() @endphp
                                    @include($activeTemplate.'partials.custom_captcha')
                                    <button type="submit" class="login_hero_form_btn main_btn_green">@lang('Login Now')</button>
                                </form>
                            </div>
                            <div class="login_hero_right">
                                <div class="login_hero_right_btns">
                                    <a href="{{ route('user.register') }}"  class="login_hero_right_btn main_btn">@lang('Create an account')</a>
                                    <a href="{{ route('user.password.request') }}" class="login_hero_right_btn main_btn">@lang('FORGOT YOUR PASSWORD?')</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Login Hero  END -->

@endsection

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

    </script>
@endpush
