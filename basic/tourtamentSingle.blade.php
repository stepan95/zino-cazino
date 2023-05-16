@extends($activeTemplate.'layouts.frontend')

@section('content')
	<link rel="stylesheet" href="/assets/global/css/styletour.css?1.5">
	<style>
        .flipTimer {
        	 transform: scale(0.4);text-align: center;position: absolute;width: 100%;top: 0;padding-right: 132px; margin-top: -10px ;
        }
        .read_hero_name {
        	     margin: 55px 15px 0 24px;
        }
        @media (max-width: 770px) {
        	.flipTimer {
        	   transform: scale(0.4);text-align: center;position: absolute;width: 154%;top: 124px;padding-right: 132px; margin-top: -10px ; left: -23%;
            }
        }
    </style>
	<section class="read_hero">
	
		<div style="width: 100%; display: inline-block; position: relative;">
        	<div class="flipTimerOne">
            	<div class="days"></div>
            	<div class="hours"></div>
            	<div class="minutes"></div>
            	<div class="seconds"></div>
            </div>
        </div>
	
        <div class="read_hero_container">
            <h1 class="read_hero_title">
                {{ $tour->title }}
            </h1>
            <div class="read_hero_timer_wrapper">
                <p class="read_hero_text">Time left:</p>
                <div class="read_hero_timer_wrapper_items">
                    <div class="read_hero_timer_item">
                        <p class="read_hero_name">
                            Day
                        </p>
                    </div>
                    <div class="read_hero_timer_item">
                        <p class="read_hero_name">
                            Hour
                        </p>
                    </div>
                    <div class="read_hero_timer_item">
                        <p class="read_hero_name">
                            Min
                        </p>
                    </div>
                    <div class="read_hero_timer_item">
                        <p class="read_hero_name">
                            Sec
                        </p>
                    </div>
                </div>
            </div>
            <div class="read_hero_pool">
                <p class="read_hero_text">prize pool:<span>{{ $tour->prize }}$</span></p>
                <a href="#" class="read_descr_btn mobile">Coming</a>
            </div>
        </div>
    </section>
    <section class="read_descr">
        <div class="read_descr_container">
            <div class="read_descr_top">
                <h2 class="read_descr_title">Tournament games - {{ $tour->games }}</h2>
                <a href="#" class="read_descr_btn desctop">Coming</a>
            </div>
            <div class="read_descr_bottom">
                <h2 class="read_descr_title">Paid places - {{ $tour->places }}</h2>
                <h3 class="read_descr_title">Rules of the tournament:</h3>
                <p class="read_descr_text">participants play tournament games and earn points, which are equal to the
                    amount won in these games,
                    that is, each winning $ 1 = 1 point. In tournaments, participants make bets only from the balance of
                    MONEY
                    To participate in the tournament, you have to click on the JOIN button
                    After that, you have to go through the qualifying round - select tournament games (games that
                    participate in the tournament) and play them from the MONEY balance. The total winnings from bets
                    from the MONEY balance must exceed ${{ $tour->qualify }} (respectively {{ $tour->qualify }} points). After accumulating 50 points, these
                    points are taken into account in the rating of this tournament and the next earned points begin to
                    accumulate there.</p>
                <h3 class="read_descr_title">At the end of the tournament, the first {{ $tour->places }} places in the ranking win.
                    Distribution of the prize fund by places won in the rating:</h3>
                <ul class="read_descr_list">
                	<?php 
                	$placeslist = (array)json_decode($tour->placeslist); 
                	foreach($placeslist as $key => $val) { ?>
                		<li>{{$key}} place - {{$val}}%</li>
                	<?php } ?>
                </ul>
                
                <a href="/tournaments" class="read_descr_btn" style="float: right;"><   BACK</a>
            </div>
        </div>
    </section>
    
<?php if($tour->begin_at < date('Y-m-d') && date('Y-m-d') < $tour->end_at) { ?>    
    <!-- Table -->
    <section class="read_more_table desctop">
        <div class="read_more_table_hader">
            <p class="read_more_table_header_item">
                Place
            </p>
            <p class="read_more_table_header_item">
                Player
            </p>
            <p class="read_more_table_header_item">
                Results
            </p>
            <p class="read_more_table_header_item">
                Prize
            </p>
        </div>
        <?php foreach($users as $val) { ?>
        <div class="read_more_table_row ">
            <p class="read_more_table_row_item place" <?php if($val['qualified'] == 0) { ?>style="color:red"<?php } ?>>
                {{ $val['place'] }}
            </p>
            <div class="read_more_table_row_item player" >
                <img src="/assets/images/tour-images/player_image_<?php echo rand(1, 5);?>.png" alt="icone player">
                <p <?php if($val['qualified'] == 0) { ?>style="color:red"<?php } ?>>{{ $val['name'] }}</p>
            </div>
            <p class="read_more_table_row_item result" <?php if($val['qualified'] == 0) { ?>style="color:red"<?php } ?>>
                {{ $val['res'] }}
            </p>
            <p class="read_more_table_row_item prize" <?php if($val['qualified'] == 0) { ?>style="color:red"<?php } ?>>
                {{ $val['prize'] }} <span>USD</span> 
            </p>
        </div>
        <?php } ?>
    </section>
    <!-- Table END -->
    

@php
	$gamelist = json_decode($tour->gamelist);


    $options     = array(
        CURLOPT_URL            => 'https://int.apiforb2b.com/frontendsrv/apihandler.api?cmd={%22api%22:%22ls-games-by-operator-id-get%22,%22operator_id%22:%220%22}',
        CURLOPT_RETURNTRANSFER => true,
    );
    
    $headers                       = array(
        'Content-Type: application/json',
    );
    $options[ CURLOPT_HTTPHEADER ] = $headers;
    
    
    $h = curl_init();
    curl_setopt_array( $h, $options );
    $ret = curl_exec( $h );
    curl_close( $h );
    
    $decoded = json_decode( $ret, true );
	
	//print_r('<pre>'); print_r($decoded); exit();
	
	$games = array();
	
	foreach($decoded['locator']['groups'] as $group) {
		foreach($group['games'] as $game) {
    			$games[] = array(
    				'image' => '/'.imagePath()['game']['path'].'/'.$game['icons'][0]['ic_name'],
    				'title' => $game['gm_title'],
    				'alias' => $game['gm_url']
    			);
		}
	}
	
	$newgroups = array();
	foreach($decoded['locator']['groups'] as $group) {
		foreach($group['games'] as $game) {
			if (in_array($game['gm_url'], $gamelist)) {
    		 	foreach($game['icons'] as $icon) {
                        if($icon['ic_h'] == 221)
                            $gicon = $icon['ic_name'];
                }
    		
    			$newgroups[] = array(
    				'image' => '/'.imagePath()['game']['path'].'/'.$gicon,
    				'title' => $game['gm_title'],
    				'alias' => $game['gm_url']
    			);
    		}
		}
	}
			
    $gameContent = getContent('game.content',true);
    //$games = \App\Models\Game::where('status',1)->get(['image','name','id','max_limit','min_limit','win','invest_back','alias']);
@endphp
<!-- game section start -->
<section class="read_descr_container">
        <div class="read_descr_top" style="margin-bottom: 50px;">
            <h2 class="read_descr_title">Tournament games - {{ $tour->games }}</h2>
        </div>
        <style>
            .game-card__thumb {
            	height: 122px;
            }
            .game-card__thumb img {
            	width: 100%;
                height: 100%;
                object-fit: cover;
                -o-object-fit: cover;
                object-position: center;
                -o-object-position: center;
                -webkit-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }
            .mobile-landscape {
                position: absolute;
                width: 80%;
                top: 100px;
                background: #808080bd;
                height: 40px;
                line-height: 40px;
                text-align: center;
                border-radius: 40px;
                margin-left: 10%;
            }
            
            .importantRule { height: 96% !important; }
            .importantRule2 { height: 100% !important; border-width: 0 !important; }
        </style>
        
        @if(Auth::check())
            		<div class="row justify-content-center mb-none-30">
                		@forelse($newgroups as $keygame =>  $game)
                             <div class="col-xl-3 col-lg-4 col-sm-6 mb-70" data-wow-duration="0.5s" data-wow-delay="0.3s" >
                                <div class="game-card">
                                    <div class="game-card__thumb">
                                        <img src="{{ $game['image'] }}" alt="image" style="width: 100%;">
                                    </div>
                                    <div class="game-card__content">
                                    	<h4 class="game-name">{{ $game['title'] }}</h4>
                                        @if(Auth::user()->ev)
                                            <a onclick="
                                            jQuery('#geme-iframe-modal').attr('src', jQuery(this).data('gameurl'));
                                            $('#exampleModalLabel').text('{{ $game['title'] }}');
                                            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                                            	$('.mobile-exit').delay(5000).fadeIn();;
                                            	if ( window.matchMedia('(orientation: portrait)').matches ) {
                                                    $('.mobile-landscape').show().delay(5000).fadeOut();
                                                    $('#fullscreen .requestfullscreen').hide();
                                                    $('#fullscreen .exitfullscreen').hide();
                                                    $('#fullscreen').fullscreen();
                                                 }
                                                 if ( window.matchMedia('(orientation: landscape)').matches ) {
                                                     $('.mobile-landscape').hide();
                                                     $('#fullscreen .requestfullscreen').hide();
                                                     $('#fullscreen .exitfullscreen').hide();
                                                     $('#fullscreen').fullscreen();
                                                  }
                                            } else {
                                                $('.mobile-landscape').hide();
                                                jQuery('#geme-iframe-modal').css('height', $(window).height()-90);
                                                $('#exampleModalLabel').text('{{ $game['title'] }}');
                                            } " data-gameurl="https://int.apiforb2b.com/games/{{ $game['alias'] }}?operator_id={{ env('SLOTS_OPERATOR_ID') }}&user_id={{ auth()->user()->id }}&auth_token={{ auth()->user()->mobile }}&currency=USD&language=en" class="cmn-btn d-block text-center btn-sm mt-3 btn--capsule" data-toggle="modal" data-target="#exampleModal" style="color: #363636; cursor: pointer;">@lang('Play Now')</a>
                                        @else
                                            <a href="{{ route('user.authorization') }}" class="cmn-btn d-block text-center btn-sm mt-3 btn--capsule" style="color: #363636; cursor: pointer;">@lang('Play Now')</a>
                                        @endif
                                    </div>
                                </div>
                                <!-- game-card end -->
                            </div>
                        @empty
                            @lang('No Data Found!')
                        @endforelse
                	</div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog" role="document" style="width: 99%; max-width: 95%; margin-top: 0; margin-bottom: 0;">
                    <div class="modal-content section--bg">
                        <div class="modal-header">
                            <h6 class="modal-title method-name" id="exampleModalLabel">Payment By Okipays</h6>
                            <a href="javascript:void(0)" class="close button-for-reload-balance" data-dismiss="modal" aria-label="Close" onclick="jQuery('#geme-iframe-modal').attr('src','');">
                                <span aria-hidden="true">×</span>
                            </a>
                        </div>
                        <div id="fullscreen">
                        	<a href="javascript:void(0)" class="mobile-exit close button-for-reload-balance" data-dismiss="modal" aria-label="Close" onclick="jQuery('#geme-iframe-modal').attr('src','');  $.fullscreen.exit(); jQuery('#exampleModal').close();" style="display: none;"></a>
                        	<div class="mobile-landscape" style="display: none;">Please, use Landscape!</div>
                            <iframe style="width: 100%;" src="" id="geme-iframe-modal">
                            </iframe>
                            <div style="text-align: right;"><a href="#" class="requestfullscreen" style="color: white;">Click to open it in fullscreen</a><a href="#" class="exitfullscreen" style="display: none; color: white; margin-right: 20px;">Click to exit fullscreen</a></div>
                        </div>
                    </div>
                </div>
            </div>
        @else
        <div class="row justify-content-center mb-none-30">
            @forelse($newgroups as $keygame => $game)
        		<div class="game-group-{{$key}} game-group row justify-content-center mb-none-30">
                         <div class="col-xl-3 col-lg-4 col-sm-6 mb-70 <?php if($keygame > 3) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s" >
                            <div class="game-card">
                            	<div class="game-card__thumb">
                                    <img src="{{ $game['image'] }}" alt="image" style="width: 100%;">
                                </div>
                                <div class="game-card__content">
                                	<h4 class="game-name">{{ $game['title'] }}</h4>
                                    <a href="/user/play/{{ $game['alias'] }}" class="cmn-btn d-block text-center btn-sm mt-3 btn--capsule">@lang('Play Now')</a>
                                </div>
                            </div>
                            <!-- game-card end -->
                        </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30 wow fadeInUp more-games-button more-games-button-{{ $key }}" data-wow-duration="0.5s" data-wow-delay="0.3s" onclick="jQuery('.game-group-<?php echo $key+1?>').show();  jQuery('.more-games-button-{{ $key }}').hide();">
                    	MORE GAMES
               		</div>
            	</div>
            @empty
                @lang('No Data Found!')
            @endforelse
        </div>
        @endif
</section>
<style>
.more-games-button {
	background-color: #ee9f00;
	padding: 10px 20px;
    cursor: pointer;
	display: block;
	text-align: center;
	border-radius: 5px;
}
.game-group {
	margin-top: 30px;
}
.game-group-0 {
	margin-top: 0;
}
.importantRule { height: 96% !important; }
</style>
<!-- game section end -->
<?php } ?>
@endsection
