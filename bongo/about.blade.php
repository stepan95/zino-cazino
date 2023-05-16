@extends($activeTemplate.'layouts.frontend')

@push('style')
    <link rel="stylesheet" href="/assets/templates/bongo/css/components/About/about_hero.css?<?php echo time()?>">
    <link rel="stylesheet" href="/assets/templates/bongo/css/components/About/about_choose.css?<?php echo time()?>">
    <link rel="stylesheet" href="/assets/templates/bongo/css/components/About/about_loyalty.css?<?php echo time()?>">
    <link rel="stylesheet" href="/assets/templates/bongo/css/components/About/about_table.css?<?php echo time()?>">
    <link rel="stylesheet" href="/assets/templates/bongo/css/components/About/about_referral.css?<?php echo time()?>">
    <link rel="stylesheet" href="/assets/templates/bongo/css/components/About/about_bonuses.css?<?php echo time()?>">
    <link rel="stylesheet" href="/assets/templates/bongo/css/components/About/about_contact.css?<?php echo time()?>">
@endpush

@section('content')
            <!-- About Hero -->
            <section class="about_hero" style="background-image: url(/assets/images/about/about_hero_image.png);">
                <div class="about_page__container">
                    <div class="about_page_wrapper">
                        <div class="about_title_h2 about_hero_title">
                            <h1>{!! $aboutdata->title_about !!}</h1>
                            <img  loading="lazy"   src="/assets/images/about/about_hero_title_image.png" alt="Bongo" class="about_hero_image">
                        </div>
                        <div class="about_page_content">
                            {!! $aboutdata->content_about !!}
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Hero  END -->
            <!-- About Choose -->
            <section class="about_choose" id='#why_choose_bongo'>
                <div class="about_choose__container">
                    <div class="about_choose_wrapper">
                        <div class="about_title_h2 about_choose_title">
                            {!! $aboutdata->title_why_choose_zino !!}
                        </div>
                        <div class="about_choose_content">
                                <img  loading="lazy"   src="/assets/images/about/about_choose_content_img.png" alt="">{!! $aboutdata->content_why_choose_zino !!}
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Choose END -->
            <!-- About Loyalty -->
            <section class="about_loyalty">
                <div class="about_loyalty__container">
                    <div class="about_loyalty_wrapper">
                        <div class="about_loyalty_left">
                            <img  loading="lazy"   src="/assets/images/about/loyalty_program_img.png" alt="loyalty" class="about_loyalty_img">
                        </div>
                        <div class="about_loyalty_right">
                            {!! $aboutdata->content_loyalty_program !!}
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Loyalty END -->

            <!-- About Table -->
            <section class="about_table">
                <div class="about_table_container">
                    <div class="about_table_wrapper about_table_desctop">
                        
                        <div class="about_table_grid about_table_grid_heading">
                            <div class="about_table_item about_table_headind">@lang('Levels')</div>
                            <div class="about_table_item about_table_headind">@lang('Status')</div>
                            <div class="about_table_item about_table_headind">@lang('Points from')</div>
                            <div class="about_table_item about_table_headind">@lang('Reload bonus')</div>
                            <div class="about_table_item about_table_headind">@lang('Cashback')</div>
                            <div class="about_table_item about_table_headind">@lang('Birthday bonus')</div>
                        </div>
                        @foreach($levels as $level)
                        <div class="about_table_grid about_table_grid_content">
                            <div  class="about_table_item about_table_lvl">{{ $level->id }}</div>
                            <div class="about_table_item about_table_status"><img  loading="lazy"   class="status-img" src="{{ getImage(imagePath()['profile']['admin']['path'].'/'.$level->image,imagePath()['profile']['admin']['size']) }}" alt="{{ $level->title }}">{{ $level->title }}</div>
                            <div class="about_table_item about_table_points"> {{ $level->balls }}</div>
                            <div class="about_table_item about_table_bonus">{{ $level->cashback }}%</div>
                            <div class="about_table_item about_table_cashback">{{ $level->deposit }}%</div>
                            <div class="about_table_item about_table_birthday">{{ $level->birthday }}%</div>
                        </div>
                    @endforeach
                    </div>
                    <div class="about_table_mobile">
                        @foreach($levels as $level)
                        <div class="about_table_mobile__row">
                            <div class="about_table_mobile_col">
                                <div class="about_table_item about_table_status"><img  loading="lazy"  
                                        src="{{ getImage(imagePath()['profile']['admin']['path'].'/'.$level->image,imagePath()['profile']['admin']['size']) }}" alt="{{ $level->title }}"><span>{{ $level->title }}</span>
                                </div>
                            </div>
                            <div class="about_table_mobile_col">
                                <div class="about_table_item ">@lang('Levels')</div>
                                <div class="about_table_item ">@lang('Points from')</div>
                                <div class="about_table_item ">@lang('Reload bonus')</div>
                                <div class="about_table_item ">@lang('Cashback')</div>
                                <div class="about_table_item ">@lang('Birthday bonus')</div>
                            </div>
                            <div class="about_table_mobile_col">
                                <div class="about_table_item about_table_lvl">{{ $level->id }}</div>
                                <div class="about_table_item about_table_points">{{ $level->balls }}</div>
                                <div class="about_table_item about_table_bonus">{{ $level->cashback }}%</div>
                                <div class="about_table_item about_table_cashback">{{ $level->deposit }}%</div>
                                <div class="about_table_item about_table_birthday">{{ $level->birthday }}%</div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="about_table__container">
                        <div class="about_table__content">
                            <p>@lang('about_table_content_1')</p>
                            <p>@lang('about_table_content_2')</p>
                            <p>@lang('about_table_content_3')</p>
                            <p>@lang('about_table_content_4')</p>
                        </div>

                    </div>
                </div>
            </section>
            <!-- About Table END -->

            <!-- About Referral -->
            <section class="about_referral" id='referal_program'>
                <div class="about_referral__container">
                    <div class="about_referral_wrapper">
                        <div data-da=".about_referral_right, 765, 1" class="about_referral_left">
                            <img  loading="lazy"   src="/assets/images/about/about_referral_img.png" alt="referral program">
                        </div>
                        <div class="about_referral_right">
                            <div class="about_referral_title about_title_h2">
                                {!! $aboutdata->title_referral_program !!}
                            </div>
                            <div class="about_referral_content">
                                {!! $aboutdata->content_referral_program !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Referral END -->

            <!-- About Bonuses -->
            <section class="about_bonuses" id="bonuses">
                <div class="about_bonuses__container">
                    <div class="about_bonuses_wrapper">
                        <div class="about_bonuses_top">
                            <div class="about_bonuses_top_title about_title_h2">
                                {!! $aboutdata->title_bonuses !!}
                            </div>
                            <div class="about_bonuses_top_content">
                                {!! $aboutdata->content_bonuses !!}
                            </div>
                        </div>
                        <div class="about_bonuses_botton">
                            <div class="about_bonuses_botton_title">
                                {!! $aboutdata->title_bonus_types !!}:
                            </div>
                            <div class="about_bonuses_botton_list">
                                {!! $aboutdata->content_bonus_types !!} 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Bonuses END -->

            <!-- About Contact -->
            <section class="about_contact">
                <div class="about_contact__container">
                    <div class="about_contact_wrapper">
                        <div class="about_contact_top">
                            <div class="about_contact_top_img">
                                <img  loading="lazy"   src="/assets/images/about/about_contact_top_img.png" alt="">
                            </div>
                            <div class="about_contact_top_title about_title_h2">
                                @lang('CONTACT US')
                                <span>@lang('CONTACT US span')</span>
                            </div>
                        </div>
                        <div class="about_contact_bottom">
                            <form action="/contact" method="post" class="about_contact_form" id="zinoform">
                                
                                <label for="name" class='about_contact_label'> @lang('Your Name'):
                                    <input id='name' type="text" name="name" class="about_contact_input" value="{{ auth()->check() ? auth()->user()->fullname : old('name') }}">
                                </label>
                                <label for="email" class="about_contact_label"> @lang('Your e-mail'):
                                    <input id="email" type="email" name="email" class="about_contact_input" value="{{ auth()->check() ? auth()->user()->email : old('email') }}">
                                </label>
                                <label for="message" class="about_contact_label"> @lang('Your message'):
                                    <textarea id="message" name="message" cols="30" rows="10"
                                        class="about_contact_input about_contact_textarea">{{old('message')}}</textarea>
                                </label>
                                <input name="subject" type="hidden" name="subject" class="form-control" value="From About Page" required>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                {!! ReCaptcha::htmlFormSnippet() !!}
                                <button type="submit" class="main_btn_green about_contact_btn" data-callback='onSubmit' data-action='submit'>@lang('Send Message')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Contact END -->
            <script src="https://www.google.com/recaptcha/api.js"></script>
            <style>
                .g-recaptcha {
                    margin: 0 !important;
                }
            </style>
            <script>
              function onSubmit(token) {
                document.getElementById("zinoform").submit();
              }
            </script>
@endsection

