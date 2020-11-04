
@extends('website.layout')
<?php

//include 'include/header.php';
//
//$query = mysqli_query($conn, "SELECT * FROM category ORDER BY cat_name ASC");
//if (!$query) {
//    die("Couldn't connect " . mysqli_error($conn));
//} else {
//    mysqli_fetch_assoc($query);
//}


?>
@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="website/assets/img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2 style="color: ghostwhite">LIBRARY</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- product list part start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product_sidebar">

                    <div class="single_sedebar">
                        <form action="/library_search" method="post">
                            @csrf
                            <input type="text" name="search" placeholder="Search keyword">
                            <i class="ti-search"></i>
                        </form>
                    </div>
                    <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list"><strong>Genres</strong> <i
                                    class="right fas fa-caret-down"></i></div>

                            <div class="select_option_dropdown">
                                <!-- SHOWS THE AVAILABELE GENRES AND THE NUMBER OF BOOKS -->
                                @foreach($categories as $genre)

                                <p><a href="?genre={{$genre->id}}" aria-controls="nav-home"
                                      aria-selected="true"><strong>{{$genre->name}}</strong>
                                        <small>({{$genre->catNum($genre->id)}})</small>
                                    </a></p>
                                @endforeach
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="container">



                <br> <br>
                <div class="col-md-12">
                    <div class="product_list">
                        <div class="row">
                             @foreach ($books as $book)


                            <div class="col-lg-4 col-sm-4">
                                <div class="single_product_item">
                                    <img class="img-fluid" src="{{asset('storage/'.$book->images)}}" alt=""  style=" height: 280px; border-radius: 10px;">

                                    <div class="product-caption">
                                        <h3>
                                            <small><a
                                                    href="/book_details/{{$book->name}}">{{$book->name}}</a>
                                            </small>
                                        </h3>
                                        <div class="price">
                                            <ul>
                                                <a href="/book_details/{{$book->name}}" class="genric-btn info-border circle">View Details</a>
{{--                                                <a href="book_details.php?id=<?php echo $result['id'] ?>"--}}
{{--                                                   class="genric-btn info-border circle">View Details</a>--}}
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
{{--                            <div class="container">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="load_more_btn text-center">--}}
{{--                                        <a href="#" class="btn_3">Load More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        </div>
                    </div>


    </div>

</section>
<!-- product list part end-->

<!-- client review part here -->
<section class="client_review">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="client_review_slider owl-carousel">
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="website/assets/img/client.png" alt="#">
                        </div>
                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help
                            alleviate human suffering.</p>
                        <h5>- Micky Mouse</h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="website/assets/img/client_1.png" alt="#">
                        </div>
                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help
                            alleviate human suffering.</p>
                        <h5>- Micky Mouse</h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="website/assets/img/client_2.png" alt="#">
                        </div>
                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help
                            alleviate human suffering.</p>
                        <h5>- Micky Mouse</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client review part end -->

<!-- Shop Method Start-->
<div class="shop-method-area section-padding30">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <!--                <div class="col-xl-3 col-lg-3 col-md-6">-->
            <!--                    <div class="single-method mb-40">-->
            <!--                        <i class="ti-package"></i>-->
            <!--                        <h6>Free Shipping Method</h6>-->
            <!--                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>-->
            <!--                    </div>-->
            <!--                </div>-->
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



<!--                            <div class="col-lg-6 col-sm-6">-->
<!--                                <div class="single_product_item">-->
<!--                                    <img src="assets/img/categori/product6.png" alt="" class="img-fluid">-->
<!--                                    <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>-->
<!--                                    <p>From $5</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 col-sm-6">-->
<!--                                <div class="single_product_item">-->
<!--                                    <img src="assets/img/categori/product1.png" alt="" class="img-fluid">-->
<!--                                    <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>-->
<!--                                    <p>From $5</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 col-sm-6">-->
<!--                                <div class="single_product_item">-->
<!--                                    <img src="assets/img/categori/product4.png" alt="" class="img-fluid">-->
<!--                                    <h3> <a href="single-product.html">Sleeping orthopedic sciatica Back Hip Joint Pain relief</a> </h3>-->
<!--                                    <p>From $5</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 col-sm-6">-->
<!--                                <div class="single_product_item">-->
<!--                                    <img src="assets/img/categori/product5.png" alt="" class="img-fluid">-->
<!--                                    <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>-->
<!--                                    <p>From $5</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 col-sm-6">-->
<!--                                <div class="single_product_item">-->
<!--                                    <img src="assets/img/categori/product3.png" alt="" class="img-fluid">-->
<!--                                    <h3> <a href="single-product.html">Sleeping orthopedic sciatica Back Hip Joint Pain relief</a> </h3>-->
<!--                                    <p>From $5</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 col-sm-6">-->
<!--                                <div class="single_product_item">-->
<!--                                    <img src="assets/img/categori/product2.png" alt="" class="img-fluid">-->
<!--                                    <h3> <a href="single-product.html">Geometric striped flower home classy decor</a> </h3>-->
<!--                                    <p>From $5</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 col-sm-6">-->
<!--                                <div class="single_product_item">-->
<!--                                    <img src="assets/img/categori/product1.png" alt="" class="img-fluid">-->
<!--                                    <h3> <a href="single-product.html">Geometric striped flower home classy decor</a> </h3>-->
<!--                                    <p>From $5</p>-->
<!--                                </div>-->
<!--                            </div>-->
@endsection
