@extends('admin.layout')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Accept Request </h1>
                <p>Start a beautiful journey here</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="/pending_requests">Go Back</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">

                    <form class="row" method="post" action="/accept_request/{{$request->id}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group col-md-6">

                            <div>

                                <div>
                                    <label class="control-label"><strong> User ID :</strong> </label>
                                    <input class="form-control" type="text" name="user_id" value="{{$request->user->user_id}}" readonly>
                                </div>
                                <br>
                                <div>
                                    <label class="control-label"><strong> Name:</strong> </label>
                                    <input class="form-control" type="text" name="name" value="{{$request->user->lastname. ' '. $request->user->firstname}}" readonly>
                                </div>
                                <br>
                                <div>
                                    <label class="control-label"><strong> Contact:</strong> </label>
                                    <input class="form-control" type="text" name="phone" value="{{$request->user->phone}}" readonly>
                                </div>
                                <br>
                                <div>
                                    <label class="control-label"><strong> Book Name:</strong> </label>
                                    <input class="form-control" type="text" name="book_name" value="{{$request->book_name}}" readonly>

                                </div>
                                <br>

                                <div>
                                    <label class="control-label"><strong> Author:</strong> </label>
                                    <input class="form-control" type="text" name="author" value="{{$request->book_author}}" readonly>
                                </div>
                                <br>


                                <br>
                                <div>
                                    <label class="control-label"> <strong>Number of week(s) on lease:</strong> </label>
                                    <input class="form-control" type="text" name="lease_week" value="{{$request->findBook($request->book_name)->lease_week}}" readonly>
                                </div>
                                <br>

                                <div>
                                    <label class="control-label"> <strong> Avaliable Quantity:</strong> </label>
                                    <input class="form-control" type="text" name="quantity" value="{{$request->findBook($request->book_name)->quantity}}" readonly>
                                </div>
                                <br>
                                <div>
                                    <label class="control-label"> <strong> Issued Date:</strong> </label>
                                    <input class="form-control" type="text" name="issued_date" value="<?php echo date(" F d, Y")?>" >
                                    @error('issued_date')
                                    <p>{{$message}}</p>
                                    @enderror
                                </div>
                                <br>
                                <div>
                                    <label><strong>Submission Date:</strong></label>
                                    <input class="form-control" id="demoDate" name="sub_date" type="text" placeholder="Select Date"
                                    style="@error('sub_date') border-color:red; @enderror">
                                    @error('sub_date')
                                       <strong><p style="color: red">{{$message}}</p></strong>
                                    @enderror
                                </div>
                                <br>
                                <img src="{{asset('storage/'.$request->book_image)}}" alt=""  style="width: 170px; height: 180px; border-radius: 10px;">
{{--                                <input type="text" value="<?php echo $result['book_image']?>" name="book_image">--}}
                                <br>
                                <br>

                                <div class="tile-footer">
                                    <button class="btn btn-primary col-md-12" type="submit" name="issue_book">Issue Book </button>
                                </div>

                            </div>









                        </div>




                    </form>
                    <br> <br> <br>



                </div>

            </div>

        </div>

        </div>
    </main>
@endsection
