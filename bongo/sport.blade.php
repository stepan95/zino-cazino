@extends($activeTemplate.'layouts.frontend')

@section('content')
	<link rel="stylesheet" href="/assets/global/css/stylepages.css?1.2">
	
	            <!-- Sports Hero -->
                <section class="sports_hero" style="background-image: url(/assets/images/pages/sports_hero_image.png);">
                    <div class="sports_page__container">
                        <div class="sports_page_wrapper">
                            <div class="sports_title_h2 sports_hero_title">
                                <p>@lang('SPORTS BETTING')</p>
                            </div>
                            <div class="sports_hero_right">
                                <div class="sports_hero_top">
                                    @lang('Coming very soon')
                                </div>
                                <div class="sports_hero_bottom">
                                    <p>@lang('SIGN UP AND GET') <span>@lang('hero_content_left_title')</span> @lang('WHEN WE START!') </p>
                                    <a href="{{ route('user.register') }}" class="sports_hero_btn main_btn_green">@lang('SING UP')</a>
                                </div>
                            </div>
                        </div>
                        <div class="sports_grid">
                            <div class="sports_grid_item">
                                <div class="sports_grid_img"><img  loading="lazy"   src="/assets/images/pages/sports_betting_img_1.png"
                                        alt="">
                                </div>
                                <div class="sports_grid_body">
                                    <div class="sports_grid_body_top">
                                        <div class="sports_grid_body_cat">
                                            @lang('sports_grid_body_cat')
                                        </div>
                                        <div class="sports_grid_body_title">
                                            @lang('sports_grid_body_title_1')
                                        </div>
                                    </div>
                                    <div class="sports_grid_body_text">
                                        @lang('sports_grid_body_text_1')
                                    </div>
                                </div>
    
                            </div>
                            <div class="sports_grid_item">
                                <div class="sports_grid_img"><img  loading="lazy"   src="/assets/images/pages/sports_betting_img_2.png"
                                        alt="">
                                </div>
                                <div class="sports_grid_body">
                                    <div class="sports_grid_body_top">
                                        <div class="sports_grid_body_cat">
                                            @lang('sports_grid_body_cat')
                                        </div>
                                        <div class="sports_grid_body_title">
                                            @lang('sports_grid_body_title_2')
                                        </div>
                                    </div>
                                    <div class="sports_grid_body_text">
                                        @lang('sports_grid_body_text_2')
                                    </div>
                                </div>
    
                            </div>
                            <div class="sports_grid_item">
                                <div class="sports_grid_img"><img  loading="lazy"   src="/assets/images/pages/sports_betting_img_3.png"
                                        alt="">
                                </div>
                                <div class="sports_grid_body">
                                    <div class="sports_grid_body_top">
                                        <div class="sports_grid_body_cat">
                                            @lang('sports_grid_body_cat')
                                        </div>
                                        <div class="sports_grid_body_title">
                                            @lang('sports_grid_body_title_3')
                                        </div>
                                    </div>
                                    <div class="sports_grid_body_text">
                                        @lang('sports_grid_body_text_3')
                                    </div>
                                </div>
    
                            </div>
                            <div class="sports_grid_item">
                                <div class="sports_grid_img"><img  loading="lazy"   src="/assets/images/pages/sports_betting_img_4.png"
                                        alt="">
                                </div>
                                <div class="sports_grid_body">
                                    <div class="sports_grid_body_top">
                                        <div class="sports_grid_body_cat">
                                            @lang('sports_grid_body_cat')
                                        </div>
                                        <div class="sports_grid_body_title">
                                            @lang('sports_grid_body_title_4')
                                        </div>
                                    </div>
                                    <div class="sports_grid_body_text">
                                        @lang('sports_grid_body_text_4')
                                    </div>
                                </div>
    
                            </div>
    
                        </div>
    
                    </div>
                </section>
                <!-- Sports Hero  END -->

@endsection
