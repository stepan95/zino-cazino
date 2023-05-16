@extends($activeTemplate.'layouts.frontend')

@section('content')
	<link rel="stylesheet" href="/assets/global/css/styleabout.css?1.1">

	<section class="about_us sections_footer">
        <div class="sections_footer_wrapper">
            <div class="container">
                <h1 class="title_section about_title">
                    {!! $aboutdata->title_about !!}
                </h1>
            </div>
        </div>
        <div class="container about_container">
            <div class="sections_flex">
                <img src="/assets/images/about/about_image.png" alt="about_image" class="about_image">
                <div class="section_description about_description">
                    <img src="/assets/images/about/about_zino_logo.png" alt="">
                    <p>
                       {!! $aboutdata->content_about !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="why_choose_zino sections_footer" id="why_choose_zino">
        <div class="sections_footer_wrapper">
            <div class="container">
                <h1 class="title_section choose_title">
                    <span>{!! $aboutdata->title_why_choose_zino !!}</span>
                </h1>
            </div>
        </div>
        <div class="container why_choose_zino_container why_choose_zino_container_desctop">
            <div class="sections_flex">
                <img src="/assets/images/about/whu_choose_zino_image.png" alt="about_image" class="why_choose_image">
                <div class="section_description chosose_description">
                    <p>
                        {!! $aboutdata->content_why_choose_zino !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="container why_choose_zino_container why_choose_zino_container_mobile">
            <div class="sections_flex">
                <div class="section_description chosose_description">
                    <p>
                        <img src="/assets/images/about/whu_choose_zino_image.png" alt="about_image" class="why_choose_image">
                        {!! $aboutdata->content_why_choose_zino !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="loyalty_program sections_footer" id="loyalty_program">
        <div class="sections_footer_wrapper">
            <div class="container">
                <h1 class="title_section loyalty_title">
                    <span>{!! $aboutdata->title_loyalty_program !!}</span>
                </h1>
            </div>
        </div>
        <div class="loyalty_description">
            <div class="container">
                {!! $aboutdata->content_loyalty_program !!}
           {{--     <div class="loyalty_table_head">
                    <div class="loyalty_table_item">@lang('levels')</div>
                    <div class="loyalty_table_item">@lang('statuses')</div>
                    <div class="loyalty_table_item">@lang('points')</div>
                    <div class="loyalty_table_item">@lang('to_next_level')</div>
                    <div class="loyalty_table_item">@lang('exch_rate')</div>
                    <div class="loyalty_table_item">@lang('reload_bonus')</div>
                    <div class="loyalty_table_item">@lang('cashback')</div>
                    <div class="loyalty_table_item">@lang('birthday_bonus')</div>
                </div>
                <div class="loyalty_table_items">
                    <div class="loyalty_table_item">1-9 </div>
                    <div class="loyalty_table_item">
                        <img src="/assets/images/about/starter.png" alt="">
                        <p>@lang('starter')</p>
                    </div>
                    <div class="loyalty_table_item"> 0</div>
                    <div class="loyalty_table_item">@lang('no')</div>
                    <div class="loyalty_table_item">@lang('no')</div>
                    <div class="loyalty_table_item">@lang('no')</div>
                    <div class="loyalty_table_item">@lang('no')</div>
                    <div class="loyalty_table_item">@lang('no')</div>
                </div>
                <div class="loyalty_table_items">
                    <div class="loyalty_table_item">10-19</div>
                    <div class="loyalty_table_item">
                        <img src="/assets/images/about/starter.png" alt="">
                        <p>Specialist</p>
                    </div>
                    <div class="loyalty_table_item">100</div>
                    <div class="loyalty_table_item">100</div>
                    <div class="loyalty_table_item">16:1</div>
                    <div class="loyalty_table_item">10%</div>
                    <div class="loyalty_table_item">3</div>
                    <div class="loyalty_table_item plus">+</div>
                </div>
                <div class="loyalty_table_items">
                    <div class="loyalty_table_item">20-29</div>
                    <div class="loyalty_table_item">
                        <img src="/assets/images/about/expert.png" alt="">
                        <p>@lang('expert')</p>
                    </div>
                    <div class="loyalty_table_item">1500</div>
                    <div class="loyalty_table_item">850</div>
                    <div class="loyalty_table_item">14:1</div>
                    <div class="loyalty_table_item">20%</div>
                    <div class="loyalty_table_item">3%</div>
                    <div class="loyalty_table_item plus">+</div>
                </div>
                <div class="loyalty_table_items">
                    <div class="loyalty_table_item">30-49</div>
                    <div class="loyalty_table_item">
                        <img src="/assets/images/about/proffesional.png" alt="">
                        <p>@lang('professional')</p>
                    </div>
                    <div class="loyalty_table_item">10 000</div>
                    <div class="loyalty_table_item">1000</div>
                    <div class="loyalty_table_item">13:1</div>
                    <div class="loyalty_table_item">30%</div>
                    <div class="loyalty_table_item">5%</div>
                    <div class="loyalty_table_item plus">+</div>
                </div>
                <div class="loyalty_table_items">
                    <div class="loyalty_table_item">40-49</div>
                    <div class="loyalty_table_item">
                        <img src="/assets/images/about/bronzw.png" alt="">
                        <p>@lang('bronze')</p>
                    </div>
                    <div class="loyalty_table_item">20 000</div>
                    <div class="loyalty_table_item">3000</div>
                    <div class="loyalty_table_item">11:1</div>
                    <div class="loyalty_table_item">40%</div>
                    <div class="loyalty_table_item">7%</div>
                    <div class="loyalty_table_item plus">+</div>
                </div>
                <div class="loyalty_table_items">
                    <div class="loyalty_table_item">50-59</div>
                    <div class="loyalty_table_item">
                        <img src="/assets/images/about/silver.png" alt="">
                        <p>@lang('silver')</p>
                    </div>
                    <div class="loyalty_table_item">50 000</div>
                    <div class="loyalty_table_item">5000</div>
                    <div class="loyalty_table_item">10:1</div>
                    <div class="loyalty_table_item">50%</div>
                    <div class="loyalty_table_item">7%</div>
                    <div class="loyalty_table_item plus">+</div>
                </div>
                <div class="loyalty_table_items">
                    <div class="loyalty_table_item">60-69</div>
                    <div class="loyalty_table_item">
                        <img src="/assets/images/about/gold.png" alt="">
                        <p>@lang('gold')</p>
                    </div>
                    <div class="loyalty_table_item">100 000</div>
                    <div class="loyalty_table_item">10 000</div>
                    <div class="loyalty_table_item">8:1</div>
                    <div class="loyalty_table_item">60%</div>
                    <div class="loyalty_table_item">9%</div>
                    <div class="loyalty_table_item plus">+</div>
                </div>
                <div class="loyalty_table_items">
                    <div class="loyalty_table_item">70-79</div>
                    <div class="loyalty_table_item">
                        <img src="/assets/images/about/platinum.png" alt="">
                        <p>@lang('platinum')</p>
                    </div>
                    <div class="loyalty_table_item">200 000</div>
                    <div class="loyalty_table_item">30 000</div>
                    <div class="loyalty_table_item">6:1</div>
                    <div class="loyalty_table_item">70%</div>
                    <div class="loyalty_table_item">9%</div>
                    <div class="loyalty_table_item plus">+</div>
                </div>
                <div class="loyalty_table_items">
                    <div class="loyalty_table_item">80-89</div>
                    <div class="loyalty_table_item">
                        <img src="/assets/images/about/diamond.png" alt="">
                        <p>@lang('diamond')</p>
                    </div>
                    <div class="loyalty_table_item">500 000</div>
                    <div class="loyalty_table_item">50 000</div>
                    <div class="loyalty_table_item">5:1</div>
                    <div class="loyalty_table_item">80%</div>
                    <div class="loyalty_table_item">10%</div>
                    <div class="loyalty_table_item plus">+</div>
                </div>
                <div class="loyalty_table_items">
                    <div class="loyalty_table_item">90-99</div>
                    <div class="loyalty_table_item">
                        <img src="/assets/images/about/vip.png" alt="">
                        <p>@lang('vip')</p>
                    </div>
                    <div class="loyalty_table_item">1 000 000</div>
                    <div class="loyalty_table_item">100 000</div>
                    <div class="loyalty_table_item">3:1</div>
                    <div class="loyalty_table_item">90%</div>
                    <div class="loyalty_table_item">12%</div>
                    <div class="loyalty_table_item plus">+</div>
                </div>
                <div class="loyalty_accordeon_mobile">
                    <div class="accordion-dw ">
                        <section class="accordion_item active_block">
                            <div class="title_block ">
                                <img src="/assets/images/about/starter.png" alt="">
                                <p>@lang('starter')</p>
                            </div>
                            <div class="info dow-mob-acc" aria-hidden="false" style="display: block;">
                                <div class="loyalty_accordeon_grid">
                                      <p>@lang('levels') - <span>0-9</span></p>
                                      <p>@lang('exch_rate') - <span>@lang('no')</span></p>
                                      <p>@lang('points')  - <span>0</span></p>
                                      <p>@lang('reload_bonus')  - <span>@lang('no')</span></p>
                                      <p>@lang('to_next_lvl') - <span>10-100</span></p>
                                      <p>@lang('cashback')  - <span>@lang('no')</span></p>
                                      <p>@lang('points') - <span>1-9</span></p>
                                      <p>@lang('birthday_bonus')  - <span>@lang('no')</span></p>
                                </div>
                            </div>
                        </section>
                        <section class="accordion_item ">
                            <div class="title_block ">
                                <img src="/assets/images/about/specialist.png" alt="">
                                <p>@lang('specialist')</p>
                            </div>
                            <div class="info dow-mob-acc" aria-hidden="false">
                                <div class="loyalty_accordeon_grid">
                                      <p>@lang('levels') - <span>10-19</span></p>
                                      <p>@lang('exch_rate') - <span>16:1</span></p>
                                      <p>@lang('points')  - <span>100</span></p>
                                      <p>@lang('reload_bonus')  - <span>10%</span></p>
                                      <p>@lang('to_next_lvl') - <span>100</span></p>
                                      <p>@lang('cashback')  - <span>3%</span></p>
                                      <p>@lang('points') - <span>10-19</span></p>
                                      <p>@lang('birthday_bonus')  - <span class="plus">+</span></p>
                                </div>
                            </div>
                        </section>
                        <section class="accordion_item ">
                            <div class="title_block ">
                                <img src="/assets/images/about/expert.png" alt="">
                                <p>@lang('expert')</p>
                            </div>
                            <div class="info dow-mob-acc" aria-hidden="false">
                                <div class="loyalty_accordeon_grid">
                                      <p>@lang('levels') - <span>20-29</span></p>
                                      <p>@lang('exch_rate') - <span>14:1</span></p>
                                      <p>@lang('points')  - <span>1500</span></p>
                                      <p>@lang('reload_bonus')  - <span>20%</span></p>
                                      <p>@lang('to_next_lvl') - <span>850</span></p>
                                      <p>@lang('cashback')  - <span>3%</span></p>
                                      <p>@lang('points') - <span>20-29</span></p>
                                      <p>@lang('birthday_bonus')  - <span class="plus">+</span></p>
                                </div>
                            </div>
                        </section>
                        <section class="accordion_item ">
                            <div class="title_block ">
                                <img src="/assets/images/about/proffesional.png" alt="">
                                <p>@lang('professional')</p>
                            </div>
                            <div class="info dow-mob-acc" aria-hidden="false">
                                <div class="loyalty_accordeon_grid">
                                      <p>@lang('levels') - <span>30-39</span></p>
                                      <p>@lang('exch_rate') - <span>13:1</span></p>
                                      <p>@lang('points')  - <span>10 000</span></p>
                                      <p>@lang('reload_bonus')  - <span>30%</span></p>
                                      <p>@lang('to_next_lvl') - <span>1000</span></p>
                                      <p>@lang('cashback')  - <span>5%</span></p>
                                      <p>@lang('points') - <span>30-39</span></p>
                                      <p>@lang('birthday_bonus')  - <span class="plus">+</span></p>
                                </div>
                            </div>
                        </section>
                        <section class="accordion_item ">
                            <div class="title_block ">
                                <img src="/assets/images/about/bronzw.png" alt="">
                                <p>@lang('bronze')</p>
                            </div>
                            <div class="info dow-mob-acc" aria-hidden="false">
                                <div class="loyalty_accordeon_grid">
                                      <p>@lang('levels') - <span>40-49</span></p>
                                      <p>@lang('exch_rate') - <span>11:1</span></p>
                                      <p>@lang('points')  - <span>20 000</span></p>
                                      <p>@lang('reload_bonus')  - <span>40%</span></p>
                                      <p>@lang('to_next_lvl') - <span>3000</span></p>
                                      <p>@lang('cashback')  - <span>7%</span></p>
                                      <p>@lang('points') - <span>40-49</span></p>
                                      <p>@lang('birthday_bonus')  - <span class="plus">+</span></p>
                                </div>
                            </div>
                        </section>
                        <section class="accordion_item ">
                            <div class="title_block ">
                                <img src="/assets/images/about/silver.png" alt="">
                                <p>@lang('silver')</p>
                            </div>
                            <div class="info dow-mob-acc" aria-hidden="false">
                                <div class="loyalty_accordeon_grid">
                                      <p>@lang('levels') - <span>50-59</span></p>
                                      <p>@lang('exch_rate') - <span>10:1</span></p>
                                      <p>@lang('points')  - <span>50 000</span></p>
                                      <p>@lang('reload_bonus')  - <span>50%</span></p>
                                      <p>@lang('to_next_lvl') - <span>5000</span></p>
                                      <p>@lang('cashback')  - <span>7%</span></p>
                                      <p>@lang('points') - <span>50-59</span></p>
                                      <p>@lang('birthday_bonus')  - <span class="plus">+</span></p>
                                </div>
                            </div>
                        </section>
                        <section class="accordion_item ">
                            <div class="title_block ">
                                <img src="/assets/images/about/gold.png" alt="">
                                <p>@lang('gold')</p>
                            </div>
                            <div class="info dow-mob-acc" aria-hidden="false">
                                <div class="loyalty_accordeon_grid">
                                      <p>@lang('levels') - <span>60-69</span></p>
                                      <p>@lang('exch_rate') - <span>8:1</span></p>
                                      <p>@lang('points')  - <span>100 000</span></p>
                                      <p>@lang('reload_bonus')  - <span>60%</span></p>
                                      <p>@lang('to_next_lvl') - <span>10 000</span></p>
                                      <p>@lang('cashback')  - <span>9%</span></p>
                                      <p>@lang('points') - <span>60-69</span></p>
                                      <p>@lang('birthday_bonus')  - <span class="plus">+</span></p>
                                </div>
                            </div>
                        </section>
                        <section class="accordion_item ">
                            <div class="title_block ">
                                <img src="/assets/images/about/platinum.png" alt="">
                                <p>@lang('platinum')</p>
                            </div>
                            <div class="info dow-mob-acc" aria-hidden="false">
                                <div class="loyalty_accordeon_grid">
                                      <p>@lang('levels') - <span>70-79</span></p>
                                      <p>@lang('exch_rate') - <span>6:1</span></p>
                                      <p>@lang('points')  - <span>200 000</span></p>
                                      <p>@lang('reload_bonus')  - <span>70%</span></p>
                                      <p>@lang('to_next_lvl') - <span>30 000</span></p>
                                      <p>@lang('cashback')  - <span>9%</span></p>
                                      <p>@lang('points') - <span>70-79</span></p>
                                      <p>@lang('birthday_bonus')  - <span class="plus">+</span></p>
                                </div>
                            </div>
                        </section>
                        <section class="accordion_item ">
                            <div class="title_block ">
                                <img src="/assets/images/about/diamond.png" alt="">
                                <p>@lang('diamond')</p>
                            </div>
                            <div class="info dow-mob-acc" aria-hidden="false">
                                <div class="loyalty_accordeon_grid">
                                      <p>@lang('levels') - <span>80-89</span></p>
                                      <p>@lang('exch_rate') - <span>5:1</span></p>
                                      <p>@lang('points')  - <span>500 000</span></p>
                                      <p>@lang('reload_bonus')  - <span>80%</span></p>
                                      <p>@lang('to_next_lvl') - <span>50 000</span></p>
                                      <p>@lang('cashback')  - <span>10%</span></p>
                                      <p>@lang('points') - <span>80-89</span></p>
                                      <p>@lang('birthday_bonus')  - <span class="plus">+</span></p>
                                </div>
                            </div>
                        </section>
                        <section class="accordion_item ">
                            <div class="title_block ">
                                <img src="/assets/images/about/vip.png" alt="">
                                <p>@lang('vip')</p>
                            </div>
                            <div class="info dow-mob-acc" aria-hidden="false">
                                <div class="loyalty_accordeon_grid">
                                      <p>@lang('levels') - <span>90-99</span></p>
                                      <p>@lang('exch_rate') - <span>3:1</span></p>
                                      <p>@lang('points')  - <span>1 000 000</span></p>
                                      <p>@lang('reload_bonus')  - <span>90%</span></p>
                                      <p>@lang('to_next_lvl') - <span>100 000</span></p>
                                      <p>@lang('cashback')  - <span>12%</span></p>
                                      <p>@lang('points') - <span>90-99</span></p>
                                      <p>@lang('birthday_bonus') - <span class="plus">+</span></p>
                                </div>
                            </div>
                        </section>
                </div>
            </div>--}}
                <div class="res-table">
                <table class="r-table">
                    <thead>
                    <tr class="head-tr">
                        <th>@lang('levels')</th>
                        <th>@lang('status')</th>
                        <th>@lang('points_from')</th>
                        <th>@lang('reload_bonus')</th>
                        <th>@lang('cashback')</th>
                        <th>@lang('birthday_bonus')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($levels as $level)
                        <tr>
                            <td>{{ $level->id }}</td>
                            <td class="status-flex"><img class="status-img" src="{{ getImage(imagePath()['profile']['admin']['path'].'/'.$level->image,imagePath()['profile']['admin']['size']) }}" alt="">{{ $level->title }}</td>
                            <td>{{ $level->balls }}</td>
                            <td>{{ $level->cashback }}%</td>
                            <td>{{ $level->deposit }}%</td>
                            <td>{{ $level->birthday }}%</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            {!! $aboutdata->content_loyalty_program_bottom !!}
        </div>
    </section>
    <section class="referal_program sections_footer" id="referal_program">
        <div class="sections_footer_wrapper">
            <div class="container">
                <h1 class="title_section referal_title">
                    <span>{!! $aboutdata->title_referral_program !!}</span>
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="sections_flex">
                <img src="/assets/images/about/referral_image.png" alt="referal_image" class="referal_image">
                <div class="section_description referal_description">
                    {!! $aboutdata->content_referral_program !!}
                </div>
            </div>
        </div>
    </section>
    <section class="bonus_footer sections_footer" id="bonuses">
        <div class="sections_footer_wrapper">
            <div class="container">
                <h1 class="title_section bonus_title">
                    {!! $aboutdata->title_bonuses !!}
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="sections_flex">
                <img src="/assets/images/about/bonus_image.png" alt="bonus_image" class="bonus_image">
                <div class="section_description bonus_description">
                   {!! $aboutdata->content_bonuses !!}
                </div>
            </div>
        </div>
        <div class="container bonus_types_container">
            <p class="bonus_title_types">
                {!! $aboutdata->title_bonus_types !!}:
            </p>
            {!! $aboutdata->content_bonus_types !!}
        </div>
    </section>
    <section class="contact_us sections_footer">
        <div class="sections_footer_wrapper">
            <div class="container">
                <h1 class="title_section contact_us_title">
                    @lang('contact_us')
                </h1>
            </div>
        </div>
        <div class="container contact_us_container">
            <div class="contact_us_descr">
                <img src="/assets/images/about/contact_image_mail.png" alt="mail">
                <p> @lang('contact_us_descr') </p>
            </div>
            <form action="/contact" method="post" class="contact_form" id="zinoform">
            	@csrf
                <input type="text" name="name" placeholder="@lang('Your Name')" value="{{ auth()->check() ? auth()->user()->fullname : old('name') }}">
                <input type="email" name="email" placeholder="@lang('Enter E-Mail Address')" value="{{ auth()->check() ? auth()->user()->email : old('email') }}">

                 <input name="subject" type="hidden" class="form-control" value="From About Page" required>

                <textarea name="message" id="" cols="30" rows="10" placeholder="@lang('Write your message')...">{{old('message')}}</textarea>
                {!! ReCaptcha::htmlFormSnippet() !!}
                <button type="submit" data-callback='onSubmit' data-action='submit'>@lang('Send Message')</button>
            </form>
        </div>
    </section>
     <script src="https://www.google.com/recaptcha/api.js"></script>
     <script>
       function onSubmit(token) {
         document.getElementById("zinoform").submit();
       }
     </script>
@endsection
