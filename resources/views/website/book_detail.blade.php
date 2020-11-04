{{--@extends('website.layout')--}}



{{--@section('content')--}}
   <!DOCTYPE html>
<html lang="zxx" class="no-js">


{{--HEAD TAG--}}

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('website/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Nuel's Library</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('website/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/main.css')}}">

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eCommerce HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website/assets/img/favicon.ico')}}">

    <!-- CSS here -->

    <link rel="stylesheet" href="{{asset('website/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('website/style.css')}}">

    <style>
        * {
            box-sizing: border-box;
            /*overflow: hidden;*/
        }

        .butt {
            margin-left: 10px;
            padding-left: 60px;
            padding-right: 60px;
            padding-top: 17px;
            padding-bottom: 17px;
            background-color: transparent;
            color: limegreen;
            border-radius: 10px;
            border-style: ridge;
            border-color: limegreen;
            border-width: 1px;
        }

        .butt:hover {
            background-color: limegreen;
            color: white;
            transition: 1s;
            /*transition-delay:2s;*/
        }

        .butt2 {
            margin-left: 10px;
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 17px;
            padding-bottom: 17px;
            background-color: transparent;
            color: cornflowerblue;
            border-radius: 10px;
            border-style: ridge;
            border-color: cornflowerblue;
            border-width: 1px;
        }

        .butt2:hover {
            background-color: cornflowerblue;
            color: white;
            transition: 1s;
            /*transition-delay:2s;*/
        }

        .but {
            padding-top: 20px;
        }

        .butt3 {
            font-size: 13px;

            padding-left: 30px !important;
            padding-right: 30px !important;
            padding-top: 17px !important;
            padding-bottom: 17px !important;
            background-color: transparent;
            color: cornflowerblue !important;
            border-radius: 10px;
            border-style: ridge;
            border-color: cornflowerblue;
            border-width: 1px;
        }

        .butt3:hover {
            background-color: cornflowerblue;
            color: white !important;
            transition: 1s;
            /*transition-delay:2s;*/
        }

        .badge-primary {
            position: absolute;
            width: 25px;
            height: 25px;
            background: #00b1ff;
            color: #fff;
            line-height: 25px;
            text-align: center;
            border-radius: 30px;
            font-size: 12px;
            top: 0px;
            right: -6px;
            -webkit-transition: all 0.2s ease-out 0s;
            -moz-transition: all 0.2s ease-out 0s;
            -ms-transition: all 0.2s ease-out 0s;
            -o-transition: all 0.2s ease-out 0s;
            transition: all 0.2s ease-out 0s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        @media only screen and (max-width: 480px) {
            .butt .butt2 {
                margin-left: 10px;
                margin-top: 10px;
                padding-top: 15px !important;
                padding-bottom: 15px !important;
                padding-left: 15px !important;
                padding-right: 15px !important;

            }

        }

        @media screen and (max-width: 480px) {

            .butt3 {
                font-size: 10px;
                padding-top: 15px !important;
                padding-bottom: 15px !important;
                padding-left: 15px !important;
                padding-right: 15px !important;
            }
        }
    </style>

</head>


<body>

<!-- Preloader Start -->

<!-- Preloader Start -->


{{--HEADER--}}

<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
                <div class="container-fluid">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left d-flex">
                                <div class="flag">
                                    <img src="website/assets/img/icon/header_icon.png" alt="">
                                </div>
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">NGA</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <ul class="contact-now">
                                    <li>+234 814 676 5991</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul>
                                    @auth()
                                        <li><a href="">Welcome {{auth()->user()->firstname}}</a></li>
                                        <li><a href="/my_books">Wish List </a></li>
                                    @endauth
                                    <li><a href="/library">Shopping</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">

                            <div class="logo">
                                <a href="/"><img src="website/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-9 col-md-7 col-sm-5">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">

                                        <li><a href="/">Home</a></li>
                                        <li><a href="/catalog">Catalog</a></li>
                                        <li><a href="/admin" target="_blank">My Dashboard</a></li>
                                        <li class="hot"><a href="/library">Library</a></li>
                                        <li><a href="/contact">Contact</a></li>


                                        @auth()
                                            <span>
                                            <form action="/logout" method="post" style="display: inline-block">
                                                @csrf
                                                @method('POST')
                                                <div class="container">
                                                    <button role="submit" class="btn header-btn butt3 ">
                                                         <span class="app-menu__label">Logout</span>
                                                    </button>
                                                </div>
                                            </form>

                                            </span>
                                        @else
                                            <span><a href="/login" class="btn header-btn butt3 ">Log in</a></span>
                                        @endauth
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-2 col-md-3 col-sm-3 fix-card">

                            <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">

                                <li>
                                    <div class="shopping-card">
                                        @auth()
                                            <a href="{{auth()->user()->role == 'user'? '/my_books' : '/pending_requests'}}"><i
                                                    class="fas fa-book fa-lg"></i><span
                                                    class="badge badge-pill badge-primary">{{$num}}</span></a>
                                        @else
                                            <a href="#"><i class="fas fa-book fa-lg"> <span
                                                        class="badge badge-pill badge-primary">0</span></i></a>
                                        @endauth
                                    </div>
                                </li>

                                <li class="d-none d-xl-block">

                                    <div class="form-box f-right ">
                                        <form action="/library_search" method="post">
                                            @csrf
                                            <input type="text" name="search" placeholder="Search Library">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </form>
                                    </div>
                                </li>


                            </ul>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>


<main>

<!-- slider Area Start-->
{{--<div class="slider-area ">--}}
{{--    <!-- Mobile Menu -->--}}
{{--    <div class="single-slider slider-height2 d-flex align-items-center"--}}
{{--         data-background="website/assets/img/hero/category.jpg">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-12">--}}
{{--                    <div class="hero-cap text-center">--}}
{{--                        <h2 style="color:ghostwhite">Book Details</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- slider Area End-->

<!--================Single Product Area =================-->
@if(session()->has('error_message'))
    <div class="d-flex justify-content-center alert alert-danger col-12">
        {{session()->get('error_message')}}
    </div>

@endif
@if(session()->has('session_message'))
    <div class="d-flex justify-content-center alert alert-success col-12">
        {{session()->get('session_message')}}
    </div>

@endif


<div class="product_image_area">
    <div class="container">
        <div class="row justify-content-center">
            <!--          <div class="col-lg-12 row justify-content-center">.</div>-->
            <div class="col-lg-12 row justify-content-center">
                <img
                    src="{{asset('storage/'.$book->images)}}"
                    alt="" style="width: 290px; height: 300px; border-radius: 10px;">
                <!--          <div class="product_img_slide owl-carousel">-->
                <!--            <div class="single_product_img">-->
                <!--              <img src="assets/img/product/single_product.png" alt="#" class="img-fluid">-->
                <!--            </div>-->
                <!--            <div class="single_product_img">-->
                <!--              <img src="assets/img/product/single_product.png" alt="#" class="img-fluid">-->
                <!--            </div>-->
                <!--            <div class="single_product_img">-->
                <!--              <img src="assets/img/product/single_product.png" alt="#" class="img-fluid">-->
                <!--            </div>-->
                <!--          </div>-->
            </div>
            <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <h3>{{$book->name}}</h3>

                    <p>
                    <h5><strong><i>Synopsis:</i></strong></h5>
                    {{$book->synopsis}}
                    </p>
                    <p><strong>Author:</strong>  {{$book->author}} </p>
                    <div class="card_area">
                        <strong>Price:</strong> <a class="btn_1" href="#">&#8358;{{$book->price}}</a>

                        <form action="/requests" method="post">
                            @csrf

                            <input type="hidden" value="{{(auth()->user())? auth()->user()->id : ''}}" name="user_id" readonly>
                            <input type="hidden" value="{{$book->name}}" name="book_name" readonly>
                            <input type="hidden" value="{{$book->images}}" name="book_image" readonly>
                            <input type="hidden" value="{{$book->author}}" name="book_author" readonly>

                            <div class="add_to_cart">
                                <button class="butt2" role="submit" > Add to Dashboard </button>
                                <a href="" class="butt" >Buy</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--================End Single Product Area =================-->
<!-- suggestion part here -->
<section class="subscribe_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="subscribe_part_content">
                    <h2>Suggestion Box</h2>
                    <p>Kindly suggeest Books and their Authors you would like to read that are currently not avaliable for prompt Update .</p>
                    <div class="subscribe_form">
                        <form action="/sug_box" method="post">
                            @csrf
                            <input type="text" placeholder="Enter Book Name" name="name">
                            <button role="submit" name="sug" class="btn_1">Send</button>
                        </form>
                        @if(session()->has('session_text'))
                            <p style="color:lawngreen; font-size: 13px;">{{session('session_text')}}</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- suggestion part end -->

   <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="website/assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod
                                            tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="catalog.php"> Catalog</a></li>
                                    <li><a href="library.php"> Library</a></li>
                                    <li><a href="contact.php"> Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Genres</h4>
                                <ul>
                                    @foreach($genre as $genres)
                                        <li><a href="/library?genre={{$genres->id}}" aria-controls="nav-home"
                                               aria-selected="true"><strong>{{$genres->name}}</strong>
                                                <small>({{$genres->catNum($genres->id)}})</small>
                                            </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Footer bottom -->
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved | This template is made with <i class="ti-heart"
                                                                                    aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="footer-copy-right f-right">
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer End-->
    </footer>


    <!-- End footer Area -->

    <script src="website/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="website/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="website/js/easing.min.js"></script>
    <script src="website/js/hoverIntent.js"></script>
    <script src="website/js/superfish.min.js"></script>
    <script src="website/js/jquery.ajaxchimp.min.js"></script>
    <script src="website/js/jquery.magnific-popup.min.js"></script>
    <script src="website/js/owl.carousel.min.js"></script>
    <script src="website/js/jquery.sticky.js"></script>
    <script src="website/js/jquery.nice-select.min.js"></script>
    <script src="website/js/parallax.min.js"></script>
    <script src="website/js/waypoints.min.js"></script>
    <script src="website/js/jquery.counterup.min.js"></script>
    <script src="website/js/mail-script.js"></script>
    <script src="website/js/main.js"></script>

    <!--    estore js-->
    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="website/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="website/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="website/assets/js/popper.min.js"></script>
    <script src="website/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="website/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="website/assets/js/owl.carousel.min.js"></script>
    <script src="website/assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="website/assets/js/wow.min.js"></script>
    <script src="website/assets/js/animated.headline.js"></script>
    <script src="website/assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="website/assets/js/jquery.scrollUp.min.js"></script>
    <script src="website/assets/js/jquery.nice-select.min.js"></script>
    <script src="website/assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="website/assets/js/contact.js"></script>
    <script src="website/assets/js/jquery.form.js"></script>
    <script src="website/assets/js/jquery.validate.min.js"></script>
    <script src="website/assets/js/mail-script.js"></script>
    <script src="website/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <!--    <script src="./assets/js/plugins.js"></script>-->
    <script src="website/assets/js/main.js"></script>
</body>
</html>
{{--@endsection--}}
