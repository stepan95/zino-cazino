@extends($activeTemplate.'layouts.frontend')

@section('content')
	<link rel="stylesheet" href="/assets/global/css/stylepages.css?1.2">
	
	<section class="tourtament_hero">
        <div class="tourtament_hero_container">
            <h1 class="tourtament_hero_title">
                <span>@lang('AWESOME TOURNAMENTS')</span>
                    @lang('START JULY 10!')
            </h1>
            <p class="tourtament_hero_subtitle">
                @lang('sign up, and get') <span>@lang('free') 10$</span>
              </p>
              <a href="/user/dashboard" class="tourtament_hero_button">
                @lang('sign up')
              </a>
        </div>
    </section>
       
    <section class="tourtament_events">
    
    
      

 
 
        <div class="tourtament_events_container">
            <div class="tourtament_events_item" style="background-image: url('/assets/images/pages/tournament_cart_back.png');">
                <div class="tourtament_events_header">
                    <img src="/assets/images/tournaments/7.jpg" alt="" class="tourtament_events_image">
                    <button class="tourtament_events_button">
                        @lang('Coming')
                    </button>
                </div>
                <div class="tourtament_events_footer">
                    <p class="tourtament_events__title">
                        @lang('LUCKY 7')
                    </p>
                    <div class="tourtament_events_times">
                        <p class="tourtament_events_time">
                             @lang('Start After'):
                        </p>
                        <div class="tourtament_events_timer">
                        	
                        </div>
                    </div>
                    <p class="tourtament_events_prize">@lang('prize'):<span>1 000$</span></p>
                    <div class="tourtament_events_buttons">
                        <button class="tourtament_events_btn participate">@lang('Coming')</button>
                        <a class="tourtament_events_btn more" href="/tournament/lucky7/">@lang('more info')</a>
                    </div>
                </div>
            </div>
            <div class="tourtament_events_item" style="background-image: url('/assets/images/pages/tournament_cart_back.png');">
                <div class="tourtament_events_header">
                    <img src="/assets/images/tournaments/21.jpg" alt="" class="tourtament_events_image">
                    <button class="tourtament_events_button">
                        @lang('Coming')
                    </button>
                </div>
                <div class="tourtament_events_footer">
                    <p class="tourtament_events__title">
                        @lang('BIG 21')
                    </p>
                    <div class="tourtament_events_times">
                        <p class="tourtament_events_time">
                            @lang('Start After'):
                        </p>
                        <div class="tourtament_events_timer">
                            <div class="tourtament_events_timer_item">
                                <img src="/assets/images/pages/tournament_timer.jpg" alt="" class="tourtament_events_timer_item_image">
                                <div class="tourtament_events_timer_item_name">@lang('Day')</div>
                            </div>
                            <div class="tourtament_events_timer_item">
                                <img src="/assets/images/pages/tournament_timer.jpg" alt="" class="tourtament_events_timer_item_image">
                                <div class="tourtament_events_timer_item_name">@lang('Hour')</div>
                            </div>
                            <div class="tourtament_events_timer_item">
                                <img src="/assets/images/pages/tournament_timer.jpg" alt="" class="tourtament_events_timer_item_image">
                                <div class="tourtament_events_timer_item_name">@lang('Min')</div>
                            </div>
                            <div class="tourtament_events_timer_item">
                                <img src="/assets/images/pages/tournament_timer.jpg" alt="" class="tourtament_events_timer_item_image">
                                <div class="tourtament_events_timer_item_name">@lang('Sec')</div>
                            </div>
                        </div>
                    </div>
                    <p class="tourtament_events_prize">@lang('prize'):<span>2 000$</span></p>
                    <div class="tourtament_events_buttons">
                        <button class="tourtament_events_btn participate">@lang('Coming')</button>
                        <a class="tourtament_events_btn more" href="/tournament/big21/">@lang('more info')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @if($sections->secs != null)
        @foreach(json_decode($sections->secs) as $sec)
            @include($activeTemplate.'sections.'.$sec)
        @endforeach
    @endif
@endsection
