@extends($activeTemplate.'layouts.frontend')

@section('content')
	
	
	<section class="lottery_hero">
    <div class="lottery_hero_container">
      <h1 class="lottery_hero_title">
        <span>Awesome lotteries</span>
        Coming very soon!
      </h1>
      <p class="lottery_hero_subtitle">
        sign up, and get <span>free 10$</span> whan we start!
      </p>
      <a href="/user/dashboard" class="lottery_hero_button">
        sign up
      </a>
    </div>
  </section>
  <section class="lottery_type">
    <div class="lottery_type_container">
      <div class="lottery_type_item" style="background-image: url(/assets/images/pages/lottery_image_cart_hero.png);">
        <a href="/user/dashboard" class="lottery_type_name">instant Lottery</a>
      </div>
      <div class="lottery_type_item" style="background-image: url(/assets/images/pages/lottery_image_cart_hero.png);">
        <a href="/user/dashboard" class="lottery_type_name">Guess who</a>
      </div>
      <div class="lottery_type_item" style="background-image: url(/assets/images/pages/lottery_image_cart_hero.png);">
        <a href="/user/dashboard" class="lottery_type_name">Big Prizes</a>
      </div>
    </div>
  </section>
  <section class="how_play">
    <div class="how_play_container">
      <p class="how_play_title">
        How to play?
      </p>
      <div class="how_play_items">
        <div class="how_play_item">
          <img src="/assets/images/pages/buy_ticket.png" alt="" class="how_play_item_img">
          <div class="how_play_item_description">
            <p class="how_play_item_title">
              BUY TICKETS
            </p>
            <p class="how_play_item_subtitle">
              Buy ticket with $0.1, and choose numbers for ticket.
            </p>
          </div>
        </div>
        <div class="how_play_item">
          <img src="/assets/images/pages/wait_for_draw.png" alt="" class="how_play_item_img">
          <div class="how_play_item_description">
            <p class="how_play_item_title">
              WAIT FOR THE DRAW
            </p>
            <p class="how_play_item_subtitle">
              Wait for the draw at 15:00 UTC+0 daily.
            </p>
          </div>
        </div>
        <div class="how_play_item">
          <img src="/assets/images/pages/check_prizes.png" alt="" class="how_play_item_img">
          <div class="how_play_item_description">
            <p class="how_play_item_title">
              CHECK FOR PRIZES
            </p>
            <p class="how_play_item_subtitle">
              Once the draw is over, come back to this page and check your prize.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="lottety_games" style="display: none;">
    <div class="lottety_games_container">
      <div class="lottety_games_item" style="background-image: url('/assets/images/pages/lottery_cart_item_background.png');">
        <div class="lottety_games_header">
          <p class="lottety_games_header_name">
            Lottery name
          </p>
          <p class="lottety_games_header_number">
            number XX AAA XXXX
          </p>
        </div>
        <div class="lottety_games_item_image_wrapper">
          <img src="/assets/images/pages/lottery_cart_item_image.png" alt="" class="lottety_games_item_image">
          <a href="/user/dashboard" class="lottety_games_item_rules">rules</a>
        </div>
        <div class="lottety_games_footer">
          <div class="lottety_games_footer_left">
            <div class="lottety_games_footer_name">
              <p class="lottety_games_footer_name_item"> Cost</p>
              <p class="lottety_games_footer_cost_item cost">3$</p>
            </div>
            <div class="lottety_games_footer_name">
              <p class="lottety_games_footer_name_item"> Buy</p>
              <p class="lottety_games_footer_cost_item buy">3</p>
            </div>
            <button class="lottety_games_footer_left_btn">Accept - 9$</button>
          </div>
          <div class="lottety_games_footer_right">
            <div class="lottety_games_footer_right_ticket">
              <div class="lottety_games_footer_right_time">
                <div class="lottety_games_footer_right_time_wrapper">
                  <img src="/assets/images/pages/number.jpg" alt="">
                  <p>Min</p>
                </div>
                <div class="lottety_games_footer_right_time_wrapper">
                  <img src="/assets/images/pages/number.jpg" alt="">
                  <p>Sec</p>
                </div>
              </div>
              <button class="lottety_games_footer_right_ticket_button">
                My tickets - 7
              </button>
            </div>
            <div class="lottety_games_footer_right_description">
              <div class="lottety_games_footer_right_description_item">
                <p class="lottety_games_footer_right_name">
                  Lottery close
                </p>
                <p class="lottety_games_footer_right_value">
                  12:00 AM
                </p>
              </div>
              <div class="lottety_games_footer_right_description_item">
                <p class="lottety_games_footer_right_name">
                  Ticket
                </p>
                <p class="lottety_games_footer_right_value">
                  124aaa 535 xxx
                </p>
              </div>
              <div class="lottety_games_footer_right_description_item">
                <p class="lottety_games_footer_right_name">
                  Amount
                </p>
                <p class="lottety_games_footer_right_value">
                  21$
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="lottety_games_item" style="background-image: url('/assets/images/pages/lottery_cart_item_background.png');">
        <div class="lottety_games_header">
          <p class="lottety_games_header_name">
            Lottery name
          </p>
          <p class="lottety_games_header_number">
            number XX AAA XXXX
          </p>
        </div>
        <div class="lottety_games_item_image_wrapper">
          <img src="/assets/images/pages/lottery_cart_item_image.png" alt="" class="lottety_games_item_image">
          <a href="/user/dashboard" class="lottety_games_item_rules">rules</a>
        </div>
        <div class="lottety_games_footer">
          <div class="lottety_games_footer_left">
            <div class="lottety_games_footer_name">
              <p class="lottety_games_footer_name_item"> Cost</p>
              <p class="lottety_games_footer_cost_item cost">3$</p>
            </div>
            <div class="lottety_games_footer_name">
              <p class="lottety_games_footer_name_item"> Buy</p>
              <p class="lottety_games_footer_cost_item buy">3</p>
            </div>
            <button class="lottety_games_footer_left_btn">Accept - 9$</button>
          </div>
          <div class="lottety_games_footer_right">
            <div class="lottety_games_footer_right_ticket">
              <div class="lottety_games_footer_right_time">
                <div class="lottety_games_footer_right_time_wrapper">
                  <img src="/assets/images/pages/number.jpg" alt="">
                  <p>Min</p>
                </div>
                <div class="lottety_games_footer_right_time_wrapper">
                  <img src="/assets/images/pages/number.jpg" alt="">
                  <p>Sec</p>
                </div>
              </div>
              <button class="lottety_games_footer_right_ticket_button">
                My tickets - 7
              </button>
            </div>
            <div class="lottety_games_footer_right_description">
              <div class="lottety_games_footer_right_description_item">
                <p class="lottety_games_footer_right_name">
                  Lottery close
                </p>
                <p class="lottety_games_footer_right_value">
                  12:00 AM
                </p>
              </div>
              <div class="lottety_games_footer_right_description_item">
                <p class="lottety_games_footer_right_name">
                  Ticket
                </p>
                <p class="lottety_games_footer_right_value">
                  124aaa 535 xxx
                </p>
              </div>
              <div class="lottety_games_footer_right_description_item">
                <p class="lottety_games_footer_right_name">
                  Amount
                </p>
                <p class="lottety_games_footer_right_value">
                  21$
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="lottety_games_item" style="background-image: url('/assets/images/pages/lottery_cart_item_background.png');">
        <div class="lottety_games_header">
          <p class="lottety_games_header_name">
            Lottery name
          </p>
          <p class="lottety_games_header_number">
            number XX AAA XXXX
          </p>
        </div>
        <div class="lottety_games_item_image_wrapper">
          <img src="/assets/images/pages/lottery_cart_item_image.png" alt="" class="lottety_games_item_image">
          <a href="/user/dashboard" class="lottety_games_item_rules">rules</a>
        </div>
        <div class="lottety_games_footer">
          <div class="lottety_games_footer_left">
            <div class="lottety_games_footer_name">
              <p class="lottety_games_footer_name_item"> Cost</p>
              <p class="lottety_games_footer_cost_item cost">3$</p>
            </div>
            <div class="lottety_games_footer_name">
              <p class="lottety_games_footer_name_item"> Buy</p>
              <p class="lottety_games_footer_cost_item buy">3</p>
            </div>
            <button class="lottety_games_footer_left_btn">Accept - 9$</button>
          </div>
          <div class="lottety_games_footer_right">
            <div class="lottety_games_footer_right_ticket">
              <div class="lottety_games_footer_right_time">
                <div class="lottety_games_footer_right_time_wrapper">
                  <img src="/assets/images/pages/number.jpg" alt="">
                  <p>Min</p>
                </div>
                <div class="lottety_games_footer_right_time_wrapper">
                  <img src="/assets/images/pages/number.jpg" alt="">
                  <p>Sec</p>
                </div>
              </div>
              <button class="lottety_games_footer_right_ticket_button">
                My tickets - 7
              </button>
            </div>
            <div class="lottety_games_footer_right_description">
              <div class="lottety_games_footer_right_description_item">
                <p class="lottety_games_footer_right_name">
                  Lottery close
                </p>
                <p class="lottety_games_footer_right_value">
                  12:00 AM
                </p>
              </div>
              <div class="lottety_games_footer_right_description_item">
                <p class="lottety_games_footer_right_name">
                  Ticket
                </p>
                <p class="lottety_games_footer_right_value">
                  124aaa 535 xxx
                </p>
              </div>
              <div class="lottety_games_footer_right_description_item">
                <p class="lottety_games_footer_right_name">
                  Amount
                </p>
                <p class="lottety_games_footer_right_value">
                  21$
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="lottety_games_item" style="background-image: url('/assets/images/pages/lottery_cart_item_background.png');">
        <div class="lottety_games_header">
          <p class="lottety_games_header_name">
            Lottery name
          </p>
          <p class="lottety_games_header_number">
            number XX AAA XXXX
          </p>
        </div>
        <div class="lottety_games_item_image_wrapper">
          <img src="/assets/images/pages/lottery_cart_item_image.png" alt="" class="lottety_games_item_image">
          <a href="/user/dashboard" class="lottety_games_item_rules">rules</a>
        </div>
        <div class="lottety_games_footer">
          <div class="lottety_games_footer_left">
            <div class="lottety_games_footer_name">
              <p class="lottety_games_footer_name_item"> Cost</p>
              <p class="lottety_games_footer_cost_item cost">3$</p>
            </div>
            <div class="lottety_games_footer_name">
              <p class="lottety_games_footer_name_item"> Buy</p>
              <p class="lottety_games_footer_cost_item buy">3</p>
            </div>
            <button class="lottety_games_footer_left_btn">Accept - 9$</button>
          </div>
          <div class="lottety_games_footer_right">
            <div class="lottety_games_footer_right_ticket">
              <div class="lottety_games_footer_right_time">
                <div class="lottety_games_footer_right_time_wrapper">
                  <img src="/assets/images/pages/number.jpg" alt="">
                  <p>Min</p>
                </div>
                <div class="lottety_games_footer_right_time_wrapper">
                  <img src="/assets/images/pages/number.jpg" alt="">
                  <p>Sec</p>
                </div>
              </div>
              <button class="lottety_games_footer_right_ticket_button">
                My tickets - 7
              </button>
            </div>
            <div class="lottety_games_footer_right_description">
              <div class="lottety_games_footer_right_description_item">
                <p class="lottety_games_footer_right_name">
                  Lottery close
                </p>
                <p class="lottety_games_footer_right_value">
                  12:00 AM
                </p>
              </div>
              <div class="lottety_games_footer_right_description_item">
                <p class="lottety_games_footer_right_name">
                  Ticket
                </p>
                <p class="lottety_games_footer_right_value">
                  124aaa 535 xxx
                </p>
              </div>
              <div class="lottety_games_footer_right_description_item">
                <p class="lottety_games_footer_right_name">
                  Amount
                </p>
                <p class="lottety_games_footer_right_value">
                  21$
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
