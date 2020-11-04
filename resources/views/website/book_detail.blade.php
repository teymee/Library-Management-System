@extends('website.layout')



@section('content')

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

@endsection
