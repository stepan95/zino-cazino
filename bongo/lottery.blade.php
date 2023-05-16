@extends($activeTemplate.'layouts.frontend')

@section('content')
	            <!-- Sports Hero -->
              <section class="lottery__hero" style="background-image: url(/assets/images/pages/lottery_images/lottery_hero_imagee.png);">
                <div class="lottery_page__container">
                    <div class="lottery_page_wrapper">
                        <div class="lottery_title_h2 lottery_heroo_title">
                            <p>@lang('AWESOME LOTTERIES')
                            </p>
                        </div>
                        <div class="lottery_hero_right">
                            <div class="lottery_hero_top">
                                @lang('Coming very soon')
                            </div>
                            <div class="lottery_hero_bottom">
                                <p>@lang('sign up, and get') <span>@lang('hero_content_left_title')</span> @lang('WHAN WE START!') </p>
                                <a href="#" class="lottery_hero_btn main_btn_green">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="lottery_grid">
                        <div class="lottery_item" style="background-image: url('/assets/images/pages/lottery_images/lottery_item_1.png');">
                            <a href="/user/dashboard" class="lottery_item_btn main_btn">@lang('INSTANT LOTTERY')</a>
                        </div>
                        <div class="lottery_item" style="background-image: url('/assets/images/pages/lottery_images/lottery_item_2.png');">
                            <a href="/user/dashboard" class="lottery_item_btn main_btn">@lang('Guess WHO')</a>
                        </div>

                        <div class="lottery_item" style="background-image: url('/assets/images/pages/lottery_images/lottery_item_3.png');">
                            <a href="/user/dashboard" class="lottery_item_btn main_btn">@lang('Big prizes')</a>
                        </div>
                    </div>
                    

                </div>
            </section>
            <!-- Sports Hero  END -->


            <!-- Sports How -->
            <div class="lottery_how">
                <div class="lottery_how__container">
                    <div class="lottery_how_wrapper">
                        <div class="lottery_title_h2 lottery_how_title">
                            @lang('How to play?')
                        </div>
                        <div class="lottery_how__grid">
                            <div class="lottery_how_item">
                                <div class="lottery_how_top">
                                    <div class="lottery_how_img"><img src="/assets/images/pages/lottery_images/lottery_item_how_1.png" alt=""></div>
                                    <div class="lottery_how_arrow"><img src="/assets/images/pages/lottery_images/lottery_how_arrow.png" alt=""></div>
                                </div>
                                <div class="lottery_how_bottom">
                                    <div class="lottery_how__title">
                                        @lang('BUY TICKETS')
                                    </div>
                                    <div class="lottery_how_text">
                                        @lang('Buy ticket with $0.1, and choose numbers for ticket.')
                                    </div>
                                </div>
                            </div>
                            <div class="lottery_how_item">
                                <div class="lottery_how_top">
                                    <div class="lottery_how_img"><img src="/assets/images/pages/lottery_images/lottery_item_how_2.png" alt=""></div>
                                    <div class="lottery_how_arrow"><img src="/assets/images/pages/lottery_images/lottery_how_arrow.png" alt=""></div>
                                </div>
                                <div class="lottery_how_bottom">
                                    <div class="lottery_how__title">
                                        @lang('WAIT FOR THE DRAW')
                                    </div>
                                    <div class="lottery_how_text">
                                        @lang('Wait for the draw at 15:00 UTC+0 daily.')
                                    </div>
                                </div>
                            </div>
                            <div class="lottery_how_item">
                                <div class="lottery_how_top">
                                    <div class="lottery_how_img"><img src="/assets/images/pages/lottery_images/lottery_item_how_3.png" alt=""></div>
                                    <div class="lottery_how_arrow"><img src="/assets/images/pages/lottery_images/lottery_how_arrow.png" alt=""></div>
                                </div>
                                <div class="lottery_how_bottom">
                                    <div class="lottery_how__title">
                                        @lang('CHECK FOR PRIZES')
                                    </div>
                                    <div class="lottery_how_text">
                                        @lang('lottery_how_text')
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    
                </div>

            </div>
            <!-- Sports How END -->
	


  
@endsection
