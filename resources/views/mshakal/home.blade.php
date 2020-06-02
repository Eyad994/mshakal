<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<!-- Mirrored from codezeel.com/opencart/OPC02/OPC020032/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 15:59:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mshakal Store</title>
    <base  />
    <meta name="description" content="FoodBox Store Opencart Responsive Theme is designed for  and multi purpose store. This Theme is looking good with colors combination. It is very nice with its clean and professional look.
" />

    <script src="{{ asset('catalog/view/javascript/jquery/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('catalog/view/javascript/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('catalog/view/javascript/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <link href="{{ asset('catalog/view/theme/FoodBox/stylesheet/stylesheet.css') }}" rel="stylesheet" />

    <!-- Codezeel - Start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('catalog/view/javascript/jquery/magnific/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('catalog/view/theme/FoodBox/stylesheet/codezeel/carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('catalog/view/theme/FoodBox/stylesheet/codezeel/custom.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('catalog/view/theme/FoodBox/stylesheet/codezeel/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('catalog/view/theme/FoodBox/stylesheet/codezeel/lightbox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('catalog/view/theme/FoodBox/stylesheet/codezeel/animate.css') }}" />


    <link href="style.html" type="text/css" rel="style.rel" media="style.media" />
    <link href="style.html" type="text/css" rel="style.rel" media="style.media" />


    <link href="{{ asset('catalog/view/javascript/jquery/swiper/css/swiper.min.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('catalog/view/javascript/jquery/swiper/css/opencart.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <script src="{{ asset('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js') }}" type="text/javascript"></script>

    <link href="{{ asset('image/catalog/cart.png') }}" rel="icon" />
    <!-- Codezeel - Start -->
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/codezeel/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/codezeel/jstree.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/codezeel/carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/codezeel/codezeel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/codezeel/jquery.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/codezeel/jquery.formalize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/lightbox/lightbox-2.6.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/codezeel/tabs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/codezeel/jquery.elevatezoom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/codezeel/bootstrap-notify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/codezeel/doubletaptogo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/codezeel/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/codezeel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- Codezeel - End -->

    <script src="{{ asset('catalog/view/javascript/common.js') }}" type="text/javascript"></script>
</head>


<body class="common-home layout-1">
<nav id="top">
</nav>

@include('mshakal.header.navbar')



<div class="wrap-breadcrumb parallax-breadcrumb">
    <div class="container"></div>
</div>

<!-- ======= Quick view JS ========= -->
<script>

    function quickbox(){
        if ($(window).width() > 767) {
            $('.quickview-button').magnificPopup({
                type:'iframe',
                delegate: 'a',
                preloader: true,
                tLoading: 'Loading image #%curr%...',
            });
        }
    }
    jQuery(document).ready(function() {quickbox();});
    jQuery(window).resize(function() {quickbox();});

</script>

    @yield('content')

<div style="height: 40px"></div>


<script type="text/javascript"><!--
    $(document).ready(function(){

        $('#ourcategory-carousel').owlCarousel({
            items: 7,
            singleItem: false,
            navigation: false,
            pagination: false,
            itemsDesktop : [1199,5],
            itemsDesktopSmall : [991,4],
            itemsTablet : [767,3],
            itemsTabletSmall: [500,2],
            itemsMobile : [400,1],
            pagination: true
        });
    });
    --></script>

@include('mshakal.footer.footer')

<span class="testimonial_default_width" style="display: none; visibility: hidden;"></span>
<script type="text/javascript"><!--
    $(document).ready(function(){
        $('#testimonial-carousel').owlCarousel({
            singleItem: true,
            navigation: false,
            pagination: true,
            autoPlay: true
        });
        // Custom Navigation Events
        $(".cztestimonial_next").click(function(){
            $('#testimonial-carousel').trigger('owl.next');
        })
        $(".cztestimonial_prev").click(function(){
            $('#testimonial-carousel').trigger('owl.prev');
        });
    });
    --></script>

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
</body>
<!-- Mirrored from codezeel.com/opencart/OPC02/OPC020032/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 16:01:13 GMT -->
</html>
