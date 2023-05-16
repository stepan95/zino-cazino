@php
    $ctaContent = getContent('cta.content',true);
@endphp
<!-- cta section start -->
<section class="cta-section bg_img" style="background-image: url( {{ getImage('assets/images/frontend/cta/'.@$ctaContent->data_values->background_image,'1920x780') }} );">
    <div class="container">
        <div class="row justify-content-center  pb-5">
            <div class="col-lg-12 text-center">
                <img  loading="lazy"  src="{{ asset('assets/images/frontend/cta/present_image.png')}}" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11 text-center">
                <h2>{{ __($ctaContent->data_values->heading) }}</h2>
                <a href="{{ __($ctaContent->data_values->button_url) }}"
                   class="cmn-btn mt-4">{{ __($ctaContent->data_values->button) }}</a>
            </div>
        </div>
    </div>
</section>
<!-- cta section end -->