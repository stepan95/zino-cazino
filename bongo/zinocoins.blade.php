@extends($activeTemplate.'layouts.frontend')

@section('content')
    <section class="zinocoins_hero" style="background-image: url(/assets/images/zinocoin_images/zinicoin_bg_hero.png);">
        <div class="zinocoins_hero_container">
            <div class="zinocoins_hero_img_wrapper">
                <img src="/assets/images/zinocoin_images/zinicoin_image_hero.png" alt="" class="zinocoins_hero_img zinocoins_hero_desctop_image">
                <img src="/assets/images/zinocoin_images/zino_hero_mobile_img.png" alt="" class="zinocoins_hero_img zinocoins_hero_mobile_image">
            </div>
            <div class="zinocoins_hero_content_wrapper">
                <h1 class="zinocoins_hero_title">
                    @lang('ZINO COINS')
                </h1>
                <p class="zinocoins_hero_subtitle">
                    @lang('zinocoins_hero_subtitle')
                </p>
            </div>
        </div>
    </section>
    <section class="zinocoins_following">
        <div class="zinocoins_following_container">
            <img src="/assets/images/zinocoin_images/zino_following_before.png" alt="" class="zinocoins_absolute_image_one">
            <h2 class="zinocoins_following_title">
                @lang('zinocoins_following_title'):
            </h2>
            <img src="/assets/images/zinocoin_images/zino_following_after.png" alt="" class="zinocoins_absolute_image_two">
            <div class="zinocoins_following_grid">
                <div class="zinocoins_following_grid_item">
                    <div class="zinocoins_following_item_wrapper">
                        <img src="/assets/images/zinocoin_images/welcome_bonus.png" alt="welcome bonus"
                            class="zinocoins_following_item_image">
                    </div>
                    <h4 class="zinocoins_following_item_title">
                        @lang('Welcome bonus'):
                    </h4>
                    <p class="zinocoins_following_item_description">
                        @lang('zinocoins_following_item_description')
                    </p>
                </div>
                <div class="zinocoins_following_grid_item">
                    <div class="zinocoins_following_item_wrapper">
                        <img src="/assets/images/zinocoin_images/deposit_bonus.png" alt="Deposit bonus"
                            class="zinocoins_following_item_image">
                    </div>
                    <h4 class="zinocoins_following_item_title">
                        @lang('DEPOSIT BONUS')
                    </h4>
                    <p class="zinocoins_following_item_description">
                        @lang('zinocoins_following_item_description_1')
                    </p>
                    <p class="zinocoins_following_item_description">
                        @lang('zinocoins_following_item_description_2')
                    </p>
                    <p class="zinocoins_following_item_description">
                        @lang('zinocoins_following_item_description_3')
                    </p>
                </div>
                <div class="zinocoins_following_grid_item">
                    <div class="zinocoins_following_item_wrapper">
                        <img src="/assets/images/zinocoin_images/lottery_bonus.png" alt="Lottery bonus"
                            class="zinocoins_following_item_image">
                    </div>
                    <h4 class="zinocoins_following_item_title">
                        @lang('LOTTERY BONUS')
                    </h4>
                    <p class="zinocoins_following_item_description">
                        @lang('zinocoins_following_item_description_4')
                    </p>
                </div>
                <div class="zinocoins_following_grid_item">
                    <div class="zinocoins_following_item_wrapper">
                        <img src="/assets/images/zinocoin_images/tournament_bouns.png" alt="Tournament bonus"
                            class="zinocoins_following_item_image">
                    </div>
                    <h4 class="zinocoins_following_item_title">
                        @lang('TOURNAMENT BONUS')
                    </h4>
                    <p class="zinocoins_following_item_description">
                        @lang('zinocoins_following_item_description_5')
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="what_zinocoins" style="background-image: url(/assets/images/zinocoin_images/what_zinocoin_bg.png);">
        <div class="what_zinocoins_container">
            <div class="what_zinocoins_top">
                <img src="/assets/images/zinocoin_images/what_zinocoin_image.png" alt="" class="what_zinocoins_image what_zinocoins_image_desctop">
                <div class="what_zinocoins_top_content">
                    <h2 class="what_zinocoins_top_title">
                        @lang('What are Zino coins?')
                    </h2>
                     <img src="/assets/images/zinocoin_images/what_zinocoin_image.png" alt="" class="what_zinocoins_image what_zinocoins_image_mobile">
                    <p class="what_zinocoins_top_description">
                        @lang('zinocoins_following_item_description_6')
                        <span>@lang('zinocoins_following_item_description_7')</span>
                    </p>
                </div>
            </div>
            <div class="what_zinocoins_bottom">
                <div class="what_zinocoins_bottom_item zinoteken_image">
                    <h2 class="what_zinocoins_bottom_title ">
                        @lang('What are') <span>@lang('Zino Token?')</span>
                    </h2>
                    <div class="what_zinocoins_bottom_wrapper">
                        <img src="/assets/images/zinocoin_images/zino_tokenn.png" alt="zino token" class="what_zinocoins_bottom_image">
                    </div>
                    <p class="what_zinocoins_bottom_description description_shot">
                        @lang('what_zinocoins_bottom_description_1')
                    </p>
                    <p class="what_zinocoins_bottom_description">
                        @lang('what_zinocoins_bottom_description_2')
                    </p>
                </div>
                <div class="what_zinocoins_bottom_item">
                    <h2 class="what_zinocoins_bottom_title">
                        @lang('What are') <span>@lang('Nft Token?')</span>
                    </h2>
                    <img src="/assets/images/zinocoin_images/nft_token.png" alt="nft token" class="what_zinocoins_bottom_image">
                    <p class="what_zinocoins_bottom_description description_shot">
                         @lang('what_zinocoins_bottom_description_3')
                    </p>
                    <p class="what_zinocoins_bottom_description">
                         @lang('what_zinocoins_bottom_description_4')
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="zinocoins_exchanger">
        <div class="zinocoins_exchanger_container">
            <div class="zinocoins_exchanger_content">
                <a href="#" class="zinocoins_exchanger_btn">@lang('Exchanger')</a>
                <p class="zinocoins_exchanger_title">
                    <span> - </span>
                    @lang('Very soon')
                </p>
            </div>
            <p class="zinocoins_exchanger_description">
                @lang('zinocoins_exchanger_description')
            </p>
        </div>
    </section>
    @endsection