
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
                                <input type="text" name="search" placeholder="Search keyword" value="{{request('search')}}">
                                <i class="ti-search"></i>
                            </form>
                        </div>



                    </div>
                </div>

                <div class="container">

<h2 class="text-center" style="font-family: Helvetica"> {{$books->count()}} result <span>(s)</span>  found</h2>

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



    <!-- suggestion part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Suggestion Box</h2>
                        <p>Kindly suggeest Books and their Authors you would like to read that are currently not avaliable for prompt Update .</p>
                        <div class="subscribe_form">
                            <form action="code.php" method="post">
                                <input type="text" placeholder="Enter Book Name" name="sug_name">
                                <button role="submit" name="sug" class="btn_1">Send</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- suggestion part end -->


@endsection
