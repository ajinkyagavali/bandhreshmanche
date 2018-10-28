<!DOCTYPE html>
<html lang="en">
<head>
<title>Bandh-Reshmanchee</title>

<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicon -->
<link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}">

<!-- Web Fonts -->
<link rel='stylesheet' type='text/css' href="{{URL::asset('//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin')}}">


<!-- CSS Global Compulsory -->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">

<!-- CSS Header and Footer -->
<link rel="stylesheet" href="{{URL::asset('assets/css/headers/header-default.css')}}">
<link rel="stylesheet" href="assets/css/footers/footer-v1.css">

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/animate.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/line-icons/line-icons.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/parallax-slider/css/parallax-slider.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">

<!-- CSS Theme -->
<link rel="stylesheet" href="{{URL::asset('assets/css/theme-colors/default.css')}}" id="style_color">
<link rel="stylesheet" href="{{URL::asset('assets/css/theme-skins/dark.css')}}">

<!-- CSS Customization -->
<link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">

<!--login start-->
    <link rel="stylesheet" href="{{URL::asset('assets/css/pages/page_log_reg_v1.css')}}">
<!--login end-->
<!-- enroll start-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">
<!--enroll end-->

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   //$(document).ready(function () {

</script>

</head>

<body><div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="#">
                <img src="assets/img/logo1-default.jpg" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class="topbar">
                <ul class="loginbar pull-right">
                    @if (Auth::guest())
                    <li><a href="/help">Help</a></li>
                    <li class="topbar-devider"></li>
                    <li><a href="/login">Login</a></li>
                    <li class="topbar-devider"></li>
                    <li><a href="/register">Register</a></li>
                    
                      @else
                      <li><a href="/help">Help</a></li>
                      <li class="topbar-devider"></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                            </form>
                        </li>  
                 @endif                   
                </ul>
            </div>
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <!-- Home -->
                     <li class="active"><a href="/">Home</a></li>
                      <!--<li><a href="/enroll">Enroll</a></li>-->
                    <li><a href="/profile">Profile</a></li>
                     <li><a href="/matches">Matches</a></li>
                    <li ><a href="/aboutus">About Us</a></li>
                    <li ><a href="/contactus">Contact Us</a></li>
                    <li ><a href="/admin_page">admin</a></li>
                        <li ><a id="lnkreqst" href="/getrequest">Request  </a></li>
                    <li ><a href="/offers">Payment</a></li>
                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Go</button>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->
</div><!---wrapper->


<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{URL::asset('assets/plugins/back-to-top.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/smoothScroll.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/parallax-slider/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/parallax-slider/js/jquery.cslider.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('http://maps.google.com/maps/api/js?sensor=true')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/gmap/gmap.js')}}"></script>

<!-- JS Customization -->
<script type="text/javascript" src="{{URL::asset('assets/js/custom.js')}}"></script>

<!-- JS Page Level -->
<script type="text/javascript" src="{{URL::asset('assets/js/app.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/plugins/owl-carousel.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/plugins/style-switcher.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/plugins/parallax-slider.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/pages/page_contacts.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/pages/page_contact_advanced.js')}}"></script>
<script src="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/forms/reg.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/forms/login.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/forms/contact.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/forms/comment.js')}}"></script>

<script type="text/javascript">

    jQuery(document).ready(function() {
        App.init();
        OwlCarousel.initOwlCarousel();
        StyleSwitcher.initStyleSwitcher();
        ParallaxSlider.initParallaxSlider();
    });
</script>

</body>
</html>
