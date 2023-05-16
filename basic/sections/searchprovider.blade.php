
            @if(Auth::check() && Auth::user()->username != 'dadaba')      
            	<div class="game-group row justify-content-center mb-none-30">
                		@forelse($games as $keygame =>  $game)
                             <div class="col-xl-2 col-lg-4 col-sm-6 mb-30 <?php if($keygame > 5) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s" >
                                <div class="game-card">
                               
                                    <div class="game-card__thumb">
                                        <img src="/{{imagePath()['game']['path']}}/{{$game['image']}}" alt="image" style="width: 100%;">
                                    </div>
                                    <div class="game-card__content">
                                    	<h4 class="game-name">{{ $game->title }}</h4>
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
                                            } " data-gameurl="https://int.apiforb2b.com/games/{{ $game->link }}?operator_id={{ env('SLOTS_OPERATOR_ID') }}&user_id={{ auth()->user()->id }}&auth_token={{ auth()->user()->mobile }}&currency=USD&lang=en" class="cmn-btn d-block text-center btn-sm mt-3 btn--capsule" data-toggle="modal" data-target="#exampleModal" style="color: #363636; cursor: pointer;">@lang('Play Now')</a>
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
                @if($games->lastPage() > 1)
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30 wow fadeInUp more-games-button" data-wow-duration="0.5s" data-wow-delay="0.3s" onclick="slotspage()">
                    	MORE GAMES
               		</div>
            	@endif
            @else
               <div class=" game-group row justify-content-center mb-none-30">
            		@forelse($games as $keygame =>  $game)
                         <div class="col-xl-2 col-lg-4 col-sm-6 mb-30 <?php if($keygame > 3) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s" >
                            <div class="game-card">
                            
                                <div class="game-card__thumb">
                                    <img src="/{{imagePath()['game']['path']}}/{{$game['image']}}" alt="image" style="width: 100%;">
                                </div>
                                <div class="game-card__content">
                                	<h4 class="game-name">{{ $game->title }}</h4>
                                    <a href="/user/dashboard" class="cmn-btn d-block text-center btn-sm mt-3 btn--capsule">@lang('Play Now')</a>
                                </div>
                            </div>
                            <!-- game-card end -->
                        </div>
                    @empty
                        @lang('No Data Found!')
                    @endforelse
                    
            	</div>
                    @if($games->lastPage() > 1)
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30 wow fadeInUp more-games-button" data-wow-duration="0.5s" data-wow-delay="0.3s" onclick="slotspage()">
                        	MORE GAMES
                   		</div>
                    @endif
            @endif
           