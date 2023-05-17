@if(Auth::check() && Auth::user()->username != 'dadaba')    
		@forelse($games as $keygame =>  $game)
		<div class="<?php if($keygame > 5) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s" >
           <div class="game-card slots_item grid_item">
               <div class="slot_item_image image_slot">
                   <img  loading="lazy"   src="/{{imagePath()['game']['path']}}/{{ $game['image'] }}" alt="{{  $game->title }}" style="width: 100%;">
               </div>
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
                           $('#exampleModalLabel').text('{{ $game->title }}');
                       } " data-gameurl="https://int.apiforb2b.com/games/{{ $game->link }}?operator_id={{ env('SLOTS_OPERATOR_ID') }}&user_id={{ auth()->user()->id }}&auth_token={{ auth()->user()->mobile }}&currency=USD&lang=en" class="slots_item_btn btn_slots" data-toggle="modal" data-target="#exampleModal">@lang('Play Now')</a>
                   @else
                       <a href="{{ route('user.authorization') }}" class="slots_item_btn btn_slots">@lang('Play Now')</a>
                   @endif
           </div>
       </div>
   @empty
       @lang('No Data Found!')
   @endforelse
@else
    @forelse($games as $keygame =>  $game)
         <div class="<?php if($keygame > 3) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s" >
            <div class="game-card slots_item grid_item">
                <div class="slot_item_image image_slot">
                    <img  loading="lazy"   src="/{{imagePath()['game']['path']}}/{{ $game['image'] }}" alt="{{  $game->title }}" style="width: 100%;">
                </div>
                <a href="/user/dashboard" class="slots_item_btn btn_slots">@lang('Play Now')</a>
            </div>
            <!-- game-card end -->
        </div>
    @empty
        @lang('No Data Found')
    @endforelse
@endif
           