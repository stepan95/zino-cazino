@extends($activeTemplate.'layouts.frontend')

@section('content')
	<link rel="stylesheet" href="/assets/global/css/stylepages.css?1.2">
	
	<section class="tourtament_hero">
        <div class="tourtament_hero_container">
            <h1 class="tourtament_hero_title">
                <span>AWESOME TOURNAMENTS</span>
                    START JULY 10!
            </h1>
            <p class="tourtament_hero_subtitle">
                sign up, and get <span>free 10$</span>
              </p>
              <a href="/user/dashboard" class="tourtament_hero_button">
                sign up
              </a>
        </div>
    </section>
       
    <section class="tourtament_events">
    
    
      

 
 
        <div class="tourtament_events_container">
            <div class="tourtament_events_item" style="background-image: url('/assets/images/pages/tournament_cart_back.png');">
                <div class="tourtament_events_header">
                    <img src="/assets/images/tournaments/7.jpg" alt="" class="tourtament_events_image">
                    <button class="tourtament_events_button">
                        Coming
                    </button>
                </div>
                <div class="tourtament_events_footer">
                    <p class="tourtament_events__title">
                        LUCKY 7
                    </p>
                    <div class="tourtament_events_times">
                        <p class="tourtament_events_time">
                            Start After:
                        </p>
                        <div class="tourtament_events_timer">
                        	
                        </div>
                    </div>
                    <p class="tourtament_events_prize">prize:<span>1 000$</span></p>
                    <div class="tourtament_events_buttons">
                        <button class="tourtament_events_btn participate">Coming</button>
                        <a class="tourtament_events_btn more" href="/tournament/lucky7/">more info</a>
                    </div>
                </div>
            </div>
            <div class="tourtament_events_item" style="background-image: url('/assets/images/pages/tournament_cart_back.png');">
                <div class="tourtament_events_header">
                    <img src="/assets/images/tournaments/21.jpg" alt="" class="tourtament_events_image">
                    <button class="tourtament_events_button">
                        Coming
                    </button>
                </div>
                <div class="tourtament_events_footer">
                    <p class="tourtament_events__title">
                        BIG 21
                    </p>
                    <div class="tourtament_events_times">
                        <p class="tourtament_events_time">
                            Start After:
                        </p>
                        <div class="tourtament_events_timer">
                            <div class="tourtament_events_timer_item">
                                <img src="/assets/images/pages/tournament_timer.jpg" alt="" class="tourtament_events_timer_item_image">
                                <div class="tourtament_events_timer_item_name">Day</div>
                            </div>
                            <div class="tourtament_events_timer_item">
                                <img src="/assets/images/pages/tournament_timer.jpg" alt="" class="tourtament_events_timer_item_image">
                                <div class="tourtament_events_timer_item_name">Hour</div>
                            </div>
                            <div class="tourtament_events_timer_item">
                                <img src="/assets/images/pages/tournament_timer.jpg" alt="" class="tourtament_events_timer_item_image">
                                <div class="tourtament_events_timer_item_name">Min</div>
                            </div>
                            <div class="tourtament_events_timer_item">
                                <img src="/assets/images/pages/tournament_timer.jpg" alt="" class="tourtament_events_timer_item_image">
                                <div class="tourtament_events_timer_item_name">Sec</div>
                            </div>
                        </div>
                    </div>
                    <p class="tourtament_events_prize">prize:<span>2 000$</span></p>
                    <div class="tourtament_events_buttons">
                        <button class="tourtament_events_btn participate">Coming</button>
                        <a class="tourtament_events_btn more" href="/tournament/big21/">more info</a>
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
