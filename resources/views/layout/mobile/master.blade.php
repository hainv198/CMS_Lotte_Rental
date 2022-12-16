<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=UA-134927072-1"
    ></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-134927072-1");
    </script>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <title>Lotte Rental</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/web/resource/css/mob/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/web/resource/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/web/css/animation/css/hover.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('assets/web/css/css_base/base.css')}}">
    <link rel="stylesheet" type="text/css"  href='{{asset("assets/web/css/css_base/animate.min.css")}}'>
    <link rel="stylesheet" type="text/css"  href='{{asset("assets/web/css/css_base/font-awesome.min.css")}}'>
    <link rel="stylesheet" type="text/css"  href='{{asset("assets/web/css/css_base/nice-select.css")}}'>
    <link rel="stylesheet" type="text/css"  href='{{asset("assets/web/css/css_base/slick.min.css")}}'>
    <link rel="stylesheet" type="text/css"  href='{{asset("assets/web/css/css_base/main-color.css")}}'>
<!--CDN-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css"/>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.lotterental.com/homepage/resource/images/favicon.ico"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <script type="text/javascript">
        var UserAgent = navigator.userAgent;
        if (
            UserAgent.match(
                /iPhone|iPod|iPad|iPad2|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i
            ) != null ||
            UserAgent.match(/LG|SAMSUNG|Samsung/) != null
        ) {
        } else {
            top.location.href = "{{route('home')}}";
        }
    </script>
</head>
<body>
<div id="biof-loading">
    <div class="biof-loading-center">
        <div class="biof-loading-center-absolute">
            <div class="dot dot-one"></div>
            <div class="dot dot-two"></div>
            <div class="dot dot-three"></div>
        </div>
    </div>
</div>
<div id="wrap">
    <!-- Header -->
    @include('layout.mobile.header')
    @yield('content-mb')
    @include('layout.mobile.footer')
    <a href="#none" class="btn_goto_top">Top</a>
</div>
    @include('layout.mobile.sub-menu')
    @include('layout.web.popup')
<style>
    .dialog_wrap {
        width: 90%;
        position: relative;
        background: #fff;
        height: 380px;
        border: 2px solid #000;
    }
    .layer-header {
        padding: 15px;
    }
    .layer-cont {
        padding: 0 15px 15px 15px;
        font-size: 11px;
        overflow-y: auto;
        height: 310px;
    }
    .declaration {
        font-size: 13px;
    }
    .declaration dt {
        font-weight: 600;
        margin-top: 5px;
    }
    .aco_txt {
        padding-left: 15px;
        font-size: 12px;
    }
</style>

<style>
    .open_layer .layer-content {
        padding: 20px 10px;
        background: #fff;
    }
</style>

<script>

    <!--  Tippy   -->
    tippy('#myButton', {
        animation: 'rubberBand',
        interactive: true,
        content: template.innerHTML,
        hideOnClick: true,
        trigger: 'click',
        allowHTML: true,
        allowDropdown: true
    });

    tippy('#popup_button', {
        content: "I'm a Tippy tooltip!",
    });

    $(document).ready(function () {
        $("#wrap").append('<div class="dimmed" tabindex="-1"></div>');
        $(".open_layer").show();
        $("body").addClass("no_scroll");
        $(".open_layer")
            .find(".dialog_close")
            .click(function () {
                $(".open_layer").hide();
                $(".dimmed").remove();
                $("body").removeClass("no_scroll");
            });

        if (getToday() > "20220709") {
            $(".open_layer").hide();
            $(".dimmed").remove();
            $("body").removeClass("no_scroll");
        }
    });

    function getToday() {
        var date = new Date();
        var year = date.getFullYear();
        var month = ("0" + (1 + date.getMonth())).slice(-2);
        var day = ("0" + date.getDate()).slice(-2);
        return year + month + day;
    }
    /*if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        document.getElementById("linkzalo").href="https://zalo.me/SĐT_Của_Bạn";
    }*/
</script>

<script src="{{asset('assets/web/resource/js/jquery-1.12.4.js')}}"></script>
<script src="{{asset('assets/web/resource/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/web/resource/js/swiper.js')}}"></script>
<script src="{{asset('assets/web/resource/js/ui.mobile.js')}}"></script>
<script src="{{asset('assets/web/resource/js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('assets/web/js/scroll.js')}}"></script>
<script src="{{asset("assets/web/js/js-base/jquery.countdown.min.js")}}"></script>
<script src="{{asset("assets/web/js/js-base/jquery.nice-select.min.js")}}"></script>
<script src="{{asset("assets/web/js/js-base/jquery.nicescroll.min.js")}}"></script>
<script src="{{asset("assets/web/js/js-base/slick.min.js")}}"></script>
<script src="{{asset("assets/web/js/js-base/biolife.framework.js")}}"></script>
<script src="{{asset("assets/web/js/js-base/functions.js")}}"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
</body>
</html>
