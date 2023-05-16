@php 
	if(isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
		$webp = 'webp';
	} else {
		$webp = 'jpg';
	}
	$games = \App\Models\Btbgame::where('active',1)->paginate(24);
	$groups = \App\Models\Btbprovider::where('active', 1)->get();
    $gameContent = getContent('game.content',true);
@endphp

<!-- game section start -->
<section class="pt-120 pb-120 section--bg" style="background-image: url('/assets/images/frontend/blog/back.jpg'); background-repeat: repeat; background-size: contain">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-header text-center">
                    <h2 class="section-title" style="font-size: 40px;">{{ __($gameContent->data_values->heading) }}</h2>
                    <p class="mt-3">{{ __($gameContent->data_values->sub_heading) }}</p>
                </div>
            </div>
            <div class="col-lg-4">
           		<div class="select_dashboard__search dasboard__wrapper profile_games_top_wrapper" style="flex-direction: column; align-items: flex-end;">
                      <label style="float: right;">
                          <input class="game-search" type="search" name="search" placeholder="Game search" value="<?php echo (isset($_GET['search']) && $_GET['search'] !='')? $_GET['search']: '';?>" onchange="$('#currentsearch').val($(this).val()); $('#currentpage').val(1); searchprovider();">
                      </label>
                  
                      <select class="profile_games_select" style="display: none; float: right;" name="provider" onchange="$('#currentprovider').val($(this).val()); $('#currentpage').val(1); searchprovider();">
                        <option value="0">All Providers</option>
                          @forelse($groups as $group)
                          <option value="{{ $group->id }}" >{{ $group->title }}</option>
                        @empty
                        @endforelse
                      </select>      
                  </div>
            </div>
        </div>
        @if(Auth::check() && Auth::user()->username != 'dadaba')
        	<div class="row justify-content-center mb-none-30 slots_wrapper">
                
            		<div class="game-group row justify-content-center mb-none-30">
                		@forelse($games as $keygame =>  $game)
                             <div class="col-xl-2 col-lg-4 col-sm-6 mb-30 <?php if($keygame > 5) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s" >
                                <div class="game-card">
                               
                                    <div class="game-card__thumb">
                                        <img data-original="/{{imagePath()['game']['path']}}/<?php echo str_replace('jpg', $webp, $game['image'])?>" alt="image" style="width: 100%;">
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
                	<div class="col-xl-3 col-lg-4 col-sm-6 mb-30 wow fadeInUp more-games-button" data-wow-duration="0.5s" data-wow-delay="0.3s" onclick="slotspage()">
                    	MORE GAMES
               		</div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog" role="document" style="width: 99%; max-width: 95%; margin-top: 0; margin-bottom: 0;">
                    <div class="modal-content section--bg">
                        <div class="modal-header">
                            <h6 class="modal-title method-name" id="exampleModalLabel"></h6>
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
        <div class="row justify-content-center mb-none-30 slots_wrapper">
           
        		<div class=" game-group row justify-content-center mb-none-30 ">
            		@forelse($games as $keygame =>  $game)
                         <div class="col-xl-2 col-lg-4 col-sm-6 mb-30 <?php if($keygame > 3) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s" >
                            <div class="game-card">
                            
                                <div class="game-card__thumb">
                                    <img data-original="/{{imagePath()['game']['path']}}/<?php echo str_replace('jpg', $webp, $game['image'])?>" alt="image" style="width: 100%;">
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
           		<div class="col-xl-3 col-lg-4 col-sm-6 mb-30 wow fadeInUp more-games-button" data-wow-duration="0.5s" data-wow-delay="0.3s" onclick="slotspage()">
                	MORE GAMES
           		</div>
        </div>
        @endif
    </div>
	<input type="hidden" value="{{ $games->lastPage() }}" id="lastpage" />
    <input type="hidden" value="2" id="currentpage" />
    <input type="hidden" value="0" id="currentprovider" />
    <input type="hidden" value="" id="currentsearch" />
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
	width: 100%
}
.game-group-0 {
	margin-top: 0;
}
.importantRule { height: 96% !important; }
.profile_games_top_wrapper .choices {
	max-width: 240px !important;
}
</style>
@push('script')
	<script type="text/javascript">
    function searchprovider() {
  		$url = '/getzinosearchprovider?page='+$('#currentpage').val();
		if($('#currentprovider').val() > 0) {
			$url += '&provider='+ $('#currentprovider').val();
		}
		if($('#currentsearch').val() != '') {
			$url += '&search='+ $('#currentsearch').val();
		}
		$.get( $url+'&lastpage=1', function( data ) {
	        $('#lastpage').val(data);
		});
		$.get( $url, function( data ) {
			console.log(data);
	        $('.slots_wrapper').html(data);
		});
  	}
    function slotspage() {
		$url = '/getzinoslotspage?page='+$('#currentpage').val();
		if($('#currentprovider').val() > 0) {
			$url += '&provider='+ $('#currentprovider').val();
		}
		if($('#currentsearch').val() != '') {
			$url += '&search='+ $('#currentsearch').val();
		}
  		
		$.get( $url, function( data ) {
	        $('.game-group').append(data);
	        $nextpage = parseInt($('#currentpage').val())+1;
	        if($nextpage > $('#lastpage').val()) {
	        	$('.more-games-button').hide();
	        } else {
	        	$('#currentpage').val($nextpage);
	        }
		});
    }
  	</script>
@endpush
<!-- game section end -->
