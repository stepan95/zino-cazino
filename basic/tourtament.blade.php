@extends($activeTemplate.'layouts.frontend')

@section('content')
	<link rel="stylesheet" href="/assets/global/css/stylepages.css?1.3">
	<link rel="stylesheet" href="/assets/global/css/styletour.css?1.5">

	<section class="tourtament_hero" style="display: none;">
        <div class="tourtament_hero_container">
            <h1 class="tourtament_hero_title">
                <span>AWESOME TOURNAMENTS</span>
                    START JULY 30!
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

    	<div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-header text-center">
                    <h2 class="section-title">Our Awesome Tournaments</h2>
                </div>
            </div>
        </div>

		<div class="tourtament_events_container">
			<?php foreach($tours as $val) {
			    $userlist = array();
			    if($val->userlist) {
    			    $userlistraw = json_decode($val->userlist);
    			    foreach($userlistraw as $list) {
    			        if($list > 0) {
    			            $userlist[$list] = $list;
    			        }
    			    }
			    }
			    if((isset($user->id) && count($userlist) && isset($userlist[$user->id])) || !count($userlist)) {
			    ?>
			    <?php if($val->begin_at < date('Y-m-d')) { ?>
			    <div id="tourres{{ $val->id }}" class="modal fade" tabindex="-1">
			    <div class="modal-dialog" role="document" style="max-width: 100%; background-color: #181818;">
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
                        <?php $isreg=false; foreach($tourUsers[$val->id] as $touruser) { if(isset($user->id) &&  $touruser['id'] == $user->id) {$isreg=true;}?>
                        <div class="read_more_table_row ">
                            <p class="read_more_table_row_item place" <?php if($touruser['qualified'] == 0) { ?>style="color:red"<?php } ?>>
                                {{ $touruser['place'] }}
                            </p>
                            <div class="read_more_table_row_item player" >
                                <img src="/assets/images/tour-images/player_image_<?php echo rand(1, 5);?>.png" alt="icone player">
                                <p <?php if($touruser['qualified'] == 0) { ?>style="color:red"<?php } ?>>{{ $touruser['name'] }}</p>
                            </div>
                            <p class="read_more_table_row_item result" <?php if($touruser['qualified'] == 0) { ?>style="color:red"<?php } ?>>
                                {{ $touruser['res'] }}
                            </p>
                            <p class="read_more_table_row_item prize" <?php if($touruser['qualified'] == 0) { ?>style="color:red"<?php } ?>>
                                {{ $touruser['prize'] }} <span>USD</span>
                            </p>
                        </div>
                        <?php } ?>
                    </section>
                </div>
                </div>
            	<?php } ?>

            <div class="tourtament_events_item" style="background-image: url('/assets/images/pages/tournament_cart_back.png');">
                <div class="tourtament_events_header">
                    <img src="/assets/images/tournaments/{{ $val->imagemini }}" alt="" class="tourtament_events_image">
                    <?php if($val->begin_at < date('Y-m-d') && date('Y-m-d') < $val->end_at) { ?>
                    	<button class="tourtament_events_button">
                           	Active
                        </button>
                        <a data-toggle="modal" href="#tourres{{ $val->id }}" class="btn btn--success btn--shadow btn-block btn-lg" style="width: 172px; padding: 0; position: absolute;top: 20px;left: 20px;"><img src="/assets/images/tour-images/player_rating.png"></a>
                    <?php } elseif(date('Y-m-d') > $val->end_at) { ?>
                    	<button class="tourtament_events_button">
                           	Completed
                        </button>
                    <?php } else { ?>
                    	<button class="tourtament_events_button">
                            Coming
                        </button>
                    <?php } ?>
                </div>
                <div class="tourtament_events_footer" style="position: relative;">
                    <p class="tourtament_events__title">
                        {{ $val->title }}
                    </p>
                    <div class="tourtament_events_times" style="justify-content: left; margin-bottom: 50px;">
                        <p class="tourtament_events_time" style="margin-top: 20px;margin-left: 80px;">
                            Start After:
                        </p>
                     </div>
                    <div class="tourtament_events_timer" style="min-width: 660px; position: absolute; bottom: 205px; display: inline-block;">
                    	<div style="width: 100%; display: inline-block;">
                        	<div class="flipTimer{{ $val->alias }}" style="transform: scale(0.4);">
                            	<div class="days"></div>
                            	<div class="hours"></div>
                            	<div class="minutes"></div>
                            	<div class="seconds"></div>
                            </div>
                        </div>
                        <div style="width: 100%; display: inline-block; margin-top: 20px;position: absolute; bottom: 10px; left: 0;">
                            <div class="tourtament_events_timer_item" style="width: 55px; display: inline-block;">
                          		<div class="tourtament_events_timer_item_name">Day</div>
                          	</div>
                          	<div class="tourtament_events_timer_item" style="width: 55px; display: inline-block;">

                          		<div class="tourtament_events_timer_item_name">Hour</div>
                          	</div>
                          	<div class="tourtament_events_timer_item" style="width: 55px; display: inline-block;">

                          		<div class="tourtament_events_timer_item_name">Min</div>
                          	</div>
                          	<div class="tourtament_events_timer_item" style="width: 55px; display: inline-block;">

                          		<div class="tourtament_events_timer_item_name">Sec</div>
                          	</div>
                    	</div>
                    </div>


                    <p class="tourtament_events_prize">prize:<span>{{ $val->prize }}$</span></p>
                    <div class="tourtament_events_buttons">
                    	<?php if($val->begin_at < date('Y-m-d') && date('Y-m-d') < $val->end_at) { ?>
                    		<?php if($isreg)  { ?>
                    			<a class="tourtament_events_btn participate"  href="/tournamentjoin/{{ $val->id }}/">Joined</button>
                    		<?php } else { ?>
                    			<a class="tourtament_events_btn participate"  href="/tournamentjoin/{{ $val->id }}/">Join</button>
                    		<?php }?>
                    	<?php } else { ?>
                        	<button class="tourtament_events_btn participate">Coming</button>
                        <?php } ?>
                        <a class="tourtament_events_btn more" href="/tournament/{{ $val->alias }}/">more info</a>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </section>


    @if($sections->secs != null)
        @foreach(json_decode($sections->secs) as $sec)
            @include($activeTemplate.'sections.'.$sec)
        @endforeach
    @endif
@endsection

