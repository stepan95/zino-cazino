@php
    //$aboutContent = getContent('about.content',true);
    $aboutElements = getContent('about.element', false, null ,true);
@endphp
<!-- about section start -->
	<style>
        
        .owl-carousel2 .pt-120.pb-120 {
        	background-size: contain !important;
        }
        .owl-carousel22 .pt-120.pb-120 {
        	background-size: contain !important;
        }
        .owl-carousel2 {
        	display: block !important;
        }
        .owl-carousel22 {
        	display: none !important;
        }
        @media (max-width: 600px) {
            .owl-carousel22 {
            	display: block !important;
            }
            .owl-carousel2 {
            	display: none !important;
            }
        }
      </style>

	<div class="owl-carousel owl-carousel2 owl-theme">
		 @foreach($aboutElements as $aboutContent)
		 	@if(isset($aboutContent->data_values->image) and  $aboutContent->data_values->image != "") 
		 	@if(!isset($aboutContent->data_values->heading) or $aboutContent->data_values->heading === 'test')
		 		 <section class="pt-120 pb-120" style="background: url( {{ getImage('assets/images/frontend/about/'.@$aboutContent->data_values->image,'590x564') }} ) 50% 50% no-repeat; width: 100%;">
                  	<div class="container" style="width: 100%;"></div>
                  </section>
            @else
            	<section class="pt-120 pb-120">
                    <div class="container container-fully">
                       <div class="row align-items-center">
                          <div class="col-lg-6 pr-lg-5">
                             <div class="about-content">
                                <h2 class="mb-3">{{ __($aboutContent->data_values->heading) }}</h2>
                                <p class="mb-3">@php echo $aboutContent->data_values->description @endphp</p>
                                <a href="{{ __($aboutContent->data_values->button_url) }}" class="cmn-btn mt-3">{{ __($aboutContent->data_values->button) }}</a>
                             </div>
                          </div>
                          <div class="col-lg-6 mt-lg-0 mt-5 d-lg-block d-none">
                             <div class="about-thumb wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                <img  loading="lazy"   src="{{ getImage('assets/images/frontend/about/'.@$aboutContent->data_values->image,'590x564') }}" alt="about image">
                             </div>
                          </div>
                       </div>
                    </div>
                 </section>
         	@endif
         	@endif
		  @endforeach
	
         
          
      </div>

	<div class="owl-carousel owl-carousel22 owl-theme">
		 @foreach($aboutElements as $aboutContent)
		 
		 	@if(isset($aboutContent->data_values->imagemobile) and  $aboutContent->data_values->imagemobile != "") 
		 
    		 	@if(!isset($aboutContent->data_values->heading) or $aboutContent->data_values->heading === 'test')
    		 		 <section class="pt-120 pb-120" style="background: url( {{ getImage('assets/images/frontend/about/'.@$aboutContent->data_values->imagemobile,'400x700') }} ) 50% 50% no-repeat; width: 100%;">
                      	<div class="container" style="width: 100%;"></div>
                      </section>
                @else
                	<section class="pt-120 pb-120">
                        <div class="container container-fully">
                           <div class="row align-items-center">
                              <div class="col-lg-6 pr-lg-5">
                                 <div class="about-content">
                                    <h2 class="mb-3">{{ __($aboutContent->data_values->heading) }}</h2>
                                    <p class="mb-3">@php echo $aboutContent->data_values->description @endphp</p>
                                    <a href="{{ __($aboutContent->data_values->button_url) }}" class="cmn-btn mt-3">{{ __($aboutContent->data_values->button) }}</a>
                                 </div>
                              </div>
                              <div class="col-lg-6 mt-lg-0 mt-5 d-lg-block d-none">
                                 <div class="about-thumb wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                    <img  loading="lazy"   src="{{ getImage('assets/images/frontend/about/'.@$aboutContent->data_values->imagemobile,'400x700') }}" alt="about image">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
             	@endif
          	@endif
		  @endforeach
	
         
          
      </div>

         
         
         
         <!-- about section end -->