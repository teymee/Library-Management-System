@extends('website.layout')




<main>

@section('content')

    <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center"
                 data-background="website/assets/img/hero/category.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2 style="color: ghostwhite">CATALOG</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Latest Products Start -->
        <section class="latest-product-area latest-padding">
            <div class="container">
                <div class="row product-btn d-flex justify-content-between">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#all-books"
                                   role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#new-book"
                                   role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#popular-books"
                                   role="tab" aria-controls="nav-contact" aria-selected="false">Popular</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last"
                                   role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                    <div class="select-this d-flex">

                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- ALL BOOKS -->
                    <div class="tab-pane fade show active" id="all-books" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            @foreach ($all as $book)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-product mb-60">
                                        <div class="product-img">
                                            <img src="{{asset('storage/'.$book->images)}}" alt=""  style="width: 270px; height: 280px; border-radius: 10px;">
                                        </div>
                                        <div class="product-caption">
                                            <h4><a href="#">{{$book->name}}</a></h4> <br>
                                            <div class="price">
                                                <ul>
                                                    <a href="/book_details/{{$book->name}}" class="genric-btn danger-border circle">View Details</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach

                        </div>
                    </div>
                    <!-- NEW BOOKS -->
                    <div class="tab-pane fade" id="new-book" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            @foreach ($new as $book)
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="{{asset('storage/'.$book->images)}}" alt=""  style="width: 270px; height: 280px; border-radius: 10px;">
                                    </div>
                                    <div class="product-caption">

                                        <h4><a href="#">{{$book->name}}</a></h4> <br>
                                        <div class="price">
                                            <ul>
                                                <a href="/book_details/{{$book->name}}" class="genric-btn danger-border circle">View Details</a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </div>
                    </div>
                    <!-- POPULAR BOOKS -->
                    <div class="tab-pane fade" id="popular-books" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                            @foreach ($popular as $book)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-product mb-60">
                                        <div class="product-img">
                                            <img src="{{asset('storage/'.$book->images)}}" alt=""  style="width: 270px; height: 280px; border-radius: 10px;">
                                        </div>
                                        <div class="product-caption">
                                            <h4><a href="#">{{$book->name}}</a></h4> <br>
                                            <div class="price">
                                                <ul>
                                                    <a href="/book_details/{{$book->name}}" class="genric-btn danger-border circle">View Details</a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach


                        </div>
                    </div>

                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->

        <!-- Latest Offers Start -->
        <div class="latest-wrapper lf-padding">
            <div class="latest-area latest-height d-flex align-items-center"
                 data-background="website/assets/img/collection/latest-offer.png">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                            <div class="latest-caption">
                                <h2>Get Our<br>Latest Offers News</h2>
                                <p>Subscribe news latter</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-6 ">
                            <div class="latest-subscribe">
                                <form action="#">
                                    <input type="email" placeholder="Your email here">
                                    <button>Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- man Shape -->
                <div class="man-shape">
                    <img src="website/assets/img/collection/latest-man.png" alt="">
                </div>
            </div>
        </div>
        <!-- Latest Offers End -->

        <!-- Shop Method Start-->
        <div class="shop-method-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->

        <!-- Gallery Start-->
        <div class="gallery-wrapper lf-padding">
            <div class="gallery-area">
                <div class="container-fluid">
                    <div class="row">


                            <div class="col-3 gallery-items">
                                <img src="website/assets/img/gallery/gallery2.jpg" alt="">
                            </div>


                            <div class="col-3 gallery-items">
                                <img src="website/assets/img/gallery/gallery5.jpg" alt="">
                            </div>


                            <div class=" col-3 gallery-items">
                                <img src="website/assets/img/gallery/gallery3.jpg" alt="">
                            </div>


                            <div class="col-3 gallery-items">
                                <img src="website/assets/img/gallery/gallery4.jpg" alt="">
                            </div>



{{--                            <div class="gallery-items">--}}
{{--                                <img src="website/assets/img/gallery/gallery1.jpg" alt="">--}}
{{--                            </div>--}}

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End-->

@endsection









</main>



