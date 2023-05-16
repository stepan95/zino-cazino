@extends($activeTemplate.'layouts.frontend')

@section('content')
            <!-- Bongocoins hero -->
            <section class="bongocoins_hero"
                style="background-image: url(/assets/images/zinocoin_images/bongocoins_hero_imagee.png);">
                <div class="bongocoins_page__container">
                    <div class="bongocoins_page_wrapper">
                        <div class="bongocoins_title_h2 bongocoins_hero_title">
                            <img src="/assets/images/zinocoin_images/bongocoins_title_img.png" alt=""
                                class="bongocoins_hero_image">
                            <p>@lang('Bongo Coins')</p>
                        </div>
                        <div class="bongocoins_hero_subtitle">@lang('bongocoins_hero_subtitle')</div>
                    </div>
                </div>
            </section>
            <!-- Bongocoins hero END -->

            <!-- Bongocoins credit -->
            <section class="bongocoins_credit">
                <div class="bongocoins_credit__container">
                    <div class="bongocoins_credit_wrapper">
                        <div class="bongocoins_credit_title">
                            @lang('bongocoins_credit_title'):
                        </div>
                        <div class="bongocoins_credit_grid">
                            <div class="bongocoins_credit_items">
                                <div class="bongocoins_credit_image"><img
                                        src="/assets/images/zinocoin_images/bongocoins_benefit_1.png" alt=""></div>
                                <div class="bongocoins_credit_item_title">
                                    @lang('Welcome bonus')
                                </div>
                                <div class="bongocoins_credit_text">
                                    @lang('bongocoins_credit_text')
                                </div>
                            </div>
                            <div class="bongocoins_credit_items">
                                <div class="bongocoins_credit_image"><img
                                        src="/assets/images/zinocoin_images/bongocoins_benefit_2.png" alt=""></div>
                                <div class="bongocoins_credit_item_title">
                                    @lang('DEPOSIT BONUS')
                                </div>
                                <div class="bongocoins_credit_text">
                                    <p>@lang('With a deposit of') <span>$100</span>
                                        @lang('bongocoins_credit_text_1')
                                    </p>

                                    <p>@lang('With a deposit of') <span>$300</span>
                                        @lang('bongocoins_credit_text_2')
                                    </p>

                                    <p>@lang('With a deposit of') <span>$500</span>
                                        @lang('bongocoins_credit_text_3')
                                    </p>
                                </div>
                            </div>
                            <div class="bongocoins_credit_items">
                                <div class="bongocoins_credit_image"><img
                                        src="/assets/images/zinocoin_images/bongocoins_benefit_3.png" alt=""></div>
                                <div class="bongocoins_credit_item_title">
                                    @lang('LOTTERY BONUS')
                                </div>
                                <div class="bongocoins_credit_text">
                                    @lang('bongocoins_credit_text_4')
                                </div>
                            </div>
                            <div class="bongocoins_credit_items">
                                <div class="bongocoins_credit_image"><img
                                        src="/assets/images/zinocoin_images/bongocoins_benefit_4.png" alt=""></div>
                                <div class="bongocoins_credit_item_title">
                                    @lang('TOURNAMENT BONUS')
                                </div>
                                <div class="bongocoins_credit_text">
                                    @lang('bongocoins_credit_text_5')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Bongocoins credit END -->

            <!-- Bongocoins what -->
            <section class="bongocoins_what">
                <div class="bongocoins_what__container">
                    <div class="bongocoins_what_wrapper">
                        <div class="bongocoins_what_top">
                            <div data-da=".bongocoins_what_title, 765, 1" class="bongocoins_what_img"><img
                                    src="/assets/images/zinocoin_images/bongocoins_what_img.png" alt=""></div>
                            <div class="bongocoins_what_content">
                                <div class="bongocoins_what_title">
                                    @lang('bongocoins_what_title')
                                </div>
                                <div class="bongocoins_what_text">
                                    <p>
                                        @lang('bongocoins_what_text_1')
                                    </p>
                                    <p>
                                        @lang('bongocoins_what_text_2')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bongocoins_what_bottom">
                            <div class="bongocoins_what_card">
                                <div class="bongocoins_what_card_title bongocoins_what_title">
                                    @lang('bongocoins_what_title_2')
                                </div>
                                <div class="bongocoins_what_card_text bongocoins_what_text">
                                    <p>
                                        @lang('bongocoins_what_text_3')
                                    </p>
                                    <p>
                                        @lang('bongocoins_what_text_4')
                                    </p>
                                </div>
                            </div>
                            <div class="bongocoins_what_card">
                                <div class="bongocoins_what_card_title bongocoins_what_title">
                                    @lang('bongocoins_what_title_3')
                                </div>
                                <div class="bongocoins_what_card_text bongocoins_what_text">
                                    <p>
                                        @lang('bongocoins_what_text_5')
                                        </p>
                                    <p>
                                        @lang('bongocoins_what_text_6')
                                        </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Bongocoins what END -->
    @endsection