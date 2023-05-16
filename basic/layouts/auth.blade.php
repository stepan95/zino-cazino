<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ $general->sitename(__($pageTitle)) }}</title>
    @include('partials.seo')
    
     <link rel="shortcut icon" href="{{ getImage(imagePath()['logoIcon']['path'] .'/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="/assets/global/css/all.min.css">
    <link rel="stylesheet" href="/assets/global/css/line-awesome.min.css">

    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="/assets/global/css/bootstrap.min.css">
    <!-- image and videos view on page plugin -->
    <link rel="stylesheet" href="/{{$activeTemplateTrue}}css/lightcase.css">
    <link rel="stylesheet" href="/{{$activeTemplateTrue}}css/vendor/animate.min.css">
    <!-- custom select css -->
    <link rel="stylesheet" href="/{{$activeTemplateTrue}}css/vendor/nice-select.css">
    <!-- slick slider css -->
    <link rel="stylesheet" href="/{{$activeTemplateTrue}}css/vendor/slick.css">
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="/{{$activeTemplateTrue}}css/main.css?120">

    <link rel="stylesheet" href="/{{$activeTemplateTrue}}css/bootstrap-fileinput.css">
    <link rel="stylesheet" href="/{{$activeTemplateTrue}}css/custom.css">

    <link rel="stylesheet"
          href="/{{$activeTemplateTrue}}css/color.php?color='.$general->base_color.'&secondColor='.$general->secondary_color)">

    @stack('style-lib')

    @stack('style')
    <style>
        .container-full {
            margin: 0 auto;
            width: 100%;
            min-height:100%;
            background: url('http://www.desktopwallpaperhd.net/wallpapers/7/6/background-homepage-web-wood-opera-media-images-79414.jpg');
            color:#eee;
            overflow:hidden;
        }
        /* Preloader with Bootstrap Progress Bar
        -----------------------------------------------*/
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
            background: #181818;
        }
        .loader-container {
            width: 600px;
            height: 200px;
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;

            margin: auto;
            text-align: center;
        }
        .progress-bar {
            background-color: #ff0000;
            height: 10px;
        }
        .progress {
            height: 4px;
            font-size: 0;
        }
        @media (max-width: 768px) {
            .loader-container {
                width: 75%;
            }
        }
    </style>
        <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XQZ0WCR146"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-XQZ0WCR146');
	</script>
</head>
<body>

@stack('fbComment')

{{--<div class="preloader">
    <div class="preloader__inner">
        <div class="preloader__thumb">
            <img src="/assets/images/logoIcon/logo.png" alt="imge" class="mt-3 loaderLogo">
            <img src="/{{$activeTemplateTrue}}/images/preloader-dice.png" alt="image" class="loadercircle">
        </div>
    </div>
</div>--}}

<div class='loader'>
    <div class='loader-container'>
        <img style="margin-bottom: 35px" src="https://test.zino-game.com/assets/images/logoIcon/logo.png" alt=""/>
        <div class='progress progress-striped active'>
            <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
        </div>
    </div>
</div>

<div class="page-wrapper" id="main-scrollbar" data-scrollbar>


@yield('content')


</div>
<!-- page-wrapper end -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/assets/global/js/jquery-3.6.0.min.js"></script>
<!-- bootstrap js -->
<script src="/assets/global/js/bootstrap.bundle.min.js"></script>
<!-- lightcase plugin -->
<script src="/{{$activeTemplateTrue}}/js/vendor/lightcase.js"></script>
<!-- custom select js -->
<script src="/{{$activeTemplateTrue}}/js/vendor/jquery.nice-select.min.js"></script>
<!-- slick slider js -->
<script src="/{{$activeTemplateTrue}}/js/vendor/slick.min.js"></script>
<!-- scroll animation -->
<script src="/{{$activeTemplateTrue}}/js/vendor/wow.min.js"></script>
<!-- dashboard custom js -->
<script src="/{{$activeTemplateTrue}}/js/app.js"></script>
<script src="/{{$activeTemplateTrue}}js/jquery.fullscreen.min.js"></script>

@stack('script-lib')

@stack('script')

@include('partials.plugins')

@include('partials.notify')

<script>
    (function ($) {
        "use strict";

        $(document).on("change", ".langSel", function () {
            window.location.href = "{{url('/')}}/change/" + $(this).val();

        });

        //Cookie
        $(document).on('click', '.acceptPolicy', function () {
            $.ajax({
                url: "{{ route('cookie.accept') }}",
                method:'GET',
                success:function(data){
                    if (data.success){
                        $('.cookie__wrapper').addClass('d-none');
                        notify('success', data.success)
                    }
                },
            });
        });

        //Subscribe
        $(document).on('submit', '.subscribe-form', function (e) {

            e.preventDefault();

            var url = '{{ route("subscribe") }}';
            var data = $(this).serialize();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                method: "POST",
                data: data,
                success: function (data) {
                    if (data.success) {
                        notify('success', data.message);
                        $('.subscribe-form').trigger('reset');
                    }

                    if (data.errors) {
                        notify('error', data.errors);
                    }
                },
            });
        });
    })(jQuery);

</script>

<script>
    var progress = setInterval(function () {
        var $bar = $("#bar");

        if ($bar.width() >= 599) {
            clearInterval(progress);
        } else {
            $bar.width($bar.width() + 60);
        }
        $bar.text($bar.width() / 6 + "%");
        if ($bar.width() / 6 == 100){
            $bar.text("Still working ... " + $bar.width() / 6 + "%");
        }
    }, 800);

    $(window).on('load', function() {
        $("#bar").width(600);
        $(".loader").fadeOut(1000);
    });
</script>

</body>
</html>
