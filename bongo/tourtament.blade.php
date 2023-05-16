@extends($activeTemplate.'layouts.frontend')


@section('content')
	<link rel="stylesheet" href="/assets/global/css/stylepages.css?1.3">
	<link rel="stylesheet" href="/assets/global/css/styletour.css?1.5">


                <!-- Tournament Hero -->
                <section class="tournament_hero"
                    style="background-image: url(/assets/images/tournaments/tournament_hero_image.png);">
                <div class="tournament_page__container">
                    <div class="tournament_page_wrapper">
                        <div class="tournament_title_h2 tournament_hero_title">
                            <p>@lang('sports_grid_body_text_4')</p>
                        </div>
                        <div class="tournament_grid">
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
                                                    @lang('Place')
                                                </p>
                                                <p class="read_more_table_header_item">
                                                    @lang('Player')
                                                </p>
                                                <p class="read_more_table_header_item">
                                                    @lang('Results')
                                                </p>
                                                <p class="read_more_table_header_item">
                                                    @lang('Prize')
                                                </p>
                                            </div>
                                            <?php $isreg=false; foreach($tourUsers[$val->id] as $touruser) { if(isset($user->id) &&  $touruser['id'] == $user->id) {$isreg=true;}?>
                                            <div class="read_more_table_row ">
                                                <p class="read_more_table_row_item place" <?php if($touruser['qualified'] == 0) { ?>style="color:red"<?php } ?>>
                                                    {{ $touruser['place'] }}
                                                </p>
                                                <div class="read_more_table_row_item player" >
                                                    <img  loading="lazy"   src="/assets/images/tour-images/player_image_<?php echo rand(1, 5);?>.png" alt="icone player">
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
                            
                            <div class="tournament_grid-item">
                                <div class="tournament_grid_image">
                                    <img  loading="lazy"   src="/assets/images/tournaments/{{ $val->imagemini }}" alt="  {{ $val->title }}">
                                </div>
                                <div class="tournament_grid_body">
                                    <div class="tournament_grid_top">
                                        <div class="tournament_grid_cat">
                                            @lang('Start After')
                                        </div>
                                        @php
                                        $time = str_replace('-', '/', $val->begin_at )
                                        @endphp
                                        <div class="countdown show tournament_grid_timer" data-Date='{{ $time }} 00:00:00'>
                                            <div class="running">
                                                <timer>
                                                    <div class="tournament_grid_item">
                                                        <span class="days"></span>  <span class="labels">@lang('Day')</span>
                                                    </div>
                                                    <div class="tournament_grid_item">
                                                        <span class="hours"></span> <span class="labels">@lang('Hour')</span>
                                                    </div>
                                                   <div class="tournament_grid_item">
                                                    <span class="minutes"></span> <span class="labels">@lang('Min')</span>
                                                   </div>
                                                   <div class="tournament_grid_item">
                                                    <span class="seconds"></span><span class="labels">@lang('Sec')</span>
                                                   </div>
                                                </timer>
                                            </div>
                                            <div class="ended">
                                                <div class="tournament_grid_item">
                                                    <span class="end_time">00</span>  <span class="labels">@lang('Day')</span>
                                                </div>
                                                <div class="tournament_grid_item">
                                                    <span class="end_time">00</span> <span class="labels">@lang('Hour')</span>
                                                </div>
                                               <div class="tournament_grid_item">
                                                <span class="end_time">00</span> <span class="labels">@lang('Min')</span>
                                               </div>
                                               <div class="tournament_grid_item">
                                                <span class="end_time">00</span> <span class="labels">@lang('Sec')</span>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tournament_grid_bottom">
                                        <div class="tournament_grid_bottom_descr">
                                            <div class="tournament_grid_bottom_prize">
                                                @lang('Prize')
                                            </div>
                                            <div class="tournament_grid_bottom_win">
                                                {{ $val->prize }}$
                                            </div>
                                        </div>
                                        <div class="tournament_grid_bottom_btns">
                                            <?php if($val->begin_at < date('Y-m-d') && date('Y-m-d') < $val->end_at) { ?>
                                                <?php if($isreg)  { ?>
                                                    <a class="tournament_grid_bottom_btn main_btn_green"  href="/tournamentjoin/{{ $val->id }}/">@lang('Joined')</button>
                                                <?php } else { ?>
                                                    <a class="tournament_grid_bottom_btn main_btn_green"  href="/tournamentjoin/{{ $val->id }}/">@lang('Join')</button>
                                                <?php }?>
                                            <?php } else { ?>
                                                <button class="tournament_grid_bottom_btn main_btn_green">@lang('Coming')</button>
                                            <?php } ?>
                                            <a href="/tournament/{{ $val->alias }}/" class="tournament_grid_bottom_btn main_btn">
                                                @lang('more info')
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Tournament Hero  END -->
    
    @if($sections->secs != null)
        @foreach(json_decode($sections->secs) as $sec)
            @include($activeTemplate.'sections.'.$sec)
        @endforeach
    @endif
@endsection
