@extends($activeTemplate.'layouts.frontend')

@section('content')
	<link rel="stylesheet" href="/assets/global/css/stylepages.css?1.2">
	
	<section class="sport_hero">
        <div class="sport_hero_container">
            <h1 class="sport_hero_title">
                <span>Sports betting</span>
                
                    Coming very soon!
            </h1>
            <p class="sport_hero_subtitle">
                sign up, and get <span>free 10$</span> whan we start!
              </p>
              <a href="/user/dashboard" class="sport_hero_button">
                sign up
              </a>
        </div>
    </section>
	<section class="sport_championship">
        <div class="sport_championship_container">
            <div class="sport_championship_item">
                <img src="/assets/images/pages/fifa.png" alt="" class="sport_championship_image">
                <p class="sport_championship_name">2022 FIFA World Cup </p>
            </div>
            <div class="sport_championship_item">
                <img src="/assets/images/pages/azian.png" alt="" class="sport_championship_image">
                <p class="sport_championship_name">Summer Asian Games 2022</p>
            </div> 
            <div class="sport_championship_item">
                <img src="/assets/images/pages/poland.png" alt="" class="sport_championship_image">
                <p class="sport_championship_name">2022 Men's Volleyball World Championship</p>
            </div> 
            <div class="sport_championship_item">
                <img src="/assets/images/pages/europian.png" alt="" class="sport_championship_image">
                <p class="sport_championship_name">European Summer Sports Championship 2022</p>
            </div>  
        </div>
    </section>
@endsection
