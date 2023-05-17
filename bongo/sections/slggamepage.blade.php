  
@forelse($games as $keygame =>  $game)
<div class="profile_games_grid_item <?php if($keygame > 5) { ?> wow fadeInUp <?php } ?>" data-wow-duration="0.5s" data-wow-delay="0.3s">
    			<div class="game-card">
               
                    <div class="game-card__thumb  {{ $game->uuid  }}">
                        <img src="{{ $game->image }}" alt="image" style="width: 100%;" loading="lazy">
                    </div>
                    <div class="game-card__content">
                    	@if ($game->has_lobby)
                    		<a onclick="
                        	    $.get( '/user/getGameLobby/{{ $game->uuid }}', function( data ) {
                        		   jQuery('#exampleModalLobby #fullscreen').html(data);
                      			});
                                $('#exampleModalLobby #exampleModalLabel').text('{{ $game->name }}');" class="profile_games_grid_item_button" data-toggle="modal" data-target="#exampleModalLobby" style="cursor: pointer;">@lang('Play Now')</a>
                    	@else
                    		<a onclick="
                    		    $.get( '/user/hasFreespins/{{ $game->uuid }}', function( data ) {
                    		    	console.log(data);
                        		    if(data > 0) {
                        		    	$('.button_freespin_{{ $game->uuid }}').trigger('click');
                        		    	$('#exampleModalFreespin #fullscreen .remain_freespins').html(data);
                        		    } else {
                        		    	$('.button_no_freespin_{{ $game->uuid }}').trigger('click');
                        		    } 
                      			});
                            	
                 			   " class="profile_games_grid_item_button" style="cursor: pointer;">@lang('Play Now')</a>
                    	
                    		
                        		<a style="display: none" onclick="
                            		
                 	                $('#exampleModalFreespin #fullscreen .profile_games_grid_item_button_no_freespins').attr('data-uuid', '{{ $game->uuid }}');
                  	                $('#exampleModalFreespin #fullscreen .profile_games_grid_item_button_with_freespins').attr('data-uuid', '{{ $game->uuid }}');
                 	                $('#exampleModalFreespin #exampleModalLabel').text('<?php echo str_replace("'", '`', $game->name)?>');
                 	                $('#exampleModal #exampleModalLabel').text('<?php echo str_replace("'", '`', $game->name)?>');" class="profile_games_grid_item_button button_freespin_{{ $game->uuid }}" data-toggle="modal" data-target="#exampleModalFreespin" style="cursor: pointer;"></a>
                       	
                           		<a style="display: none" onclick="
                            	    $.get( '/user/getGameUrl/{{ $game->uuid }}', function( data ) {
                            		   jQuery('#geme-iframe-modal').attr('src', data);
                          			});
                                    $('#exampleModal #exampleModalLabel').text('<?php echo str_replace("'", '`',  $game->name)?>');
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
                                    } " class="profile_games_grid_item_button button_no_freespin_{{ $game->uuid }}" data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;"></a>

                        @endif
                    </div>
                </div>
</div>
@empty
   @lang('No Data Found')
@endforelse
