@extends('admin.layout')

@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i>Search Result</h1>
                <p>Table to display analytical data effectively</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="/" target="_blank">Website</a></li>
            </ul>
        </div>




        @if(auth()->user()->role == 'librarian')

            <h3 class="text-center">{{$results->lastname. ' '. $results->firstname}}</h3> <br>
            <h5 class="text-center">{{$results->email}} , {{$results->user_id}}</h5> <br> <br>

{{--            @if($pendingBooks->count() == 0)--}}
{{--                <div class="d-flex justify-content-center alert alert-secondary col-12">--}}
{{--                    <strong><p>No Pending Request for {{$results->lastname. ' '. $results->firstname}}</p></strong>--}}
{{--                </div>--}}
{{--            @endif--}}


{{--            @if(!($pendingReturn->count() == 0 && $returned->count() == 0))--}}
{{--                @if($pendingReturn->count() == 0)--}}
{{--                    <div class="d-flex justify-content-center alert alert-success col-12">--}}
{{--                        <strong><p>No Pending Books waiting to be Returned--}}
{{--                                by {{$results->lastname. ' '. $results->firstname}}</p></strong>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            @endif--}}

            @if($pendingReturn->count() == 0 && $returned->count() == 0)
                <div class="d-flex justify-content-center alert alert-info col-12">
                    <strong><p>{{$results->lastname. ' '. $results->firstname}} hasn't borrowed any book from the
                            Library yet</p></strong>
                </div>
            @endif



            {{-- PENDING REQUESTS TABLE--}}
            @if($pendingBooks->count() > 0)
                <h5 class="text-center">PENDING REQUESTS</h5>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="tile-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="sampleTable">

                                        <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Book Image</th>
                                            <th>Book name</th>
                                            <th>Author</th>
                                            <th>Accept</th>
                                            <th>Decline</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($pendingBooks as $requests)



                                            <tr>
                                                <td>{{$requests->user->user_id}}</td>
                                                <td>{{$requests->user->lastname. ' '. $requests->user->firstname}}</td>
                                                <td>{{$requests->user->phone}}</td>
                                                <td class="justify-content-center"><img
                                                        src="{{asset('storage/'.$requests->book_image)}}" alt=""
                                                        height="100" width="100" style="border-radius: 10px"></td>

                                                <td>{{$requests->book_name}}</td>
                                                <td>{{$requests->book_author}}</td>
                                                <td>

                                                    <a href="accept/{{$requests->id}}">
                                                        <button class="btn btn-success">Accept</button>
                                                    </a>

                                                </td>
                                                <td>
                                                    <a href="decline/{{$requests->id}}">
                                                        <button class="btn btn-danger">Decline</button>
                                                    </a>

                                                </td>


                                            </tr>

                                        </tbody>
                                        @endforeach


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            @endif

            {{-- PENDING RETURNED BOOKS TABLE--}}
            @if($pendingReturn->count() > 0)
                <h5 class="text-center">PENDING BOOKS TO BE RETURNED</h5> <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="tile-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="sampleTable">

                                        <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Contact</th>
                                            <th>Book name</th>
                                            <th>Author</th>
                                            <th>Submit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($pendingReturn as $request)


                                            <tr>
                                                <td>{{$request->user->user_id}}</td>
                                                <td>{{$request->user->lastname}}</td>
                                                <td>{{$request->user->firstname}}</td>
                                                <td>{{$request->user->phone}}</td>
                                                <td>{{$request->book_name}}</td>
                                                <td>{{$request->book_author}}</td>
                                                <td><a href="/return/{{$request->id}}">
                                                        <button class="btn btn-success">Return</button>
                                                    </a></td>

                                            </tr>

                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{--  RETURNED BOOKS TABLE--}}
            @if($returned->count() > 0)
                <h5 class="text-center">RETURNED BOOKS</h5> <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="tile-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="sampleTable">

                                        <thead>
                                        <tr>
                                            <th>Book Image</th>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Contact</th>
                                            <th>Book name</th>
                                            <th>Author</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($returned as $request)


                                            <tr>
                                                <td class="justify-content-center"><img
                                                        src="{{asset('storage/'.$request->book_image)}}" alt=""
                                                        height="100" width="100" style="border-radius: 10px"></td>
                                                <td>{{$request->user->user_id}}</td>
                                                <td>{{$request->user->lastname. ' '. $request->user->firstname}}</td>
                                                <td>{{$request->user->phone}}</td>
                                                <td>{{$request->book_name}}</td>
                                                <td>{{$request->book_author}}</td>
                                                <td>
                                                    <form action="/delete/{{$request->id}}" method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        @endif


        @if(auth()->user()->role == 'user')

            <h3 class="text-center">{{auth()->user()->lastname. ' '. auth()->user()->firstname}}</h3> <br>
            <h5 class="text-center">{{auth()->user()->email}} , {{auth()->user()->user_id}}</h5> <br> <br>

            {{-- PENDING REQUESTS TABLE--}}
            @if($pendingBooks->count() > 0)
                <h5 class="text-center">PENDING REQUESTS</h5>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="tile-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="sampleTable">

                                        <thead>
                                        <tr>
                                            <th>Book Image</th>
                                            <th>Book name</th>
                                            <th>Author</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($pendingBooks as $requests)



                                            <tr>
                                                <td class="justify-content-center"><img src="{{asset('storage/'.$requests->book_image)}}" alt="" height="100" width="100" style="border-radius: 10px"></td>

                                                <td>{{$requests->book_name}}</td>
                                                <td>{{$requests->book_author}}</td>


                                            </tr>

                                        </tbody>
                                        @endforeach


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            @endif


            {{-- PENDING RETURNED BOOKS TABLE--}}
            @if($pendingReturn->count() > 0)
                <h5 class="text-center">PENDING BOOKS TO BE RETURNED</h5> <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="tile-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="sampleTable">

                                        <thead>
                                        <tr>
                                            <th>Book Image</th>
                                            <th>Book name</th>
                                            <th>Author</th>
                                            <th>Issued Date</th>
                                            <th>Submission Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($pendingReturn as $requests)


                                            <tr>
                                                <td class="justify-content-center"><img
                                                        src="{{asset('storage/'.$requests->book_image)}}" alt=""
                                                        height="100" width="100" style="border-radius: 10px"></td>
                                                <td>{{$requests->book_name}}</td>
                                                <td>{{$requests->book_author}}</td>

                                                <td>{{$requests->issued_date}}</td>
                                                <td>{{$requests->sub_date}}</td>
                                            </tr>

                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif


            {{--  RETURNED BOOKS TABLE--}}
            @if($returned->count() > 0)
                <h5 class="text-center">RETURNED BOOKS</h5> <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <div class="tile-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered" id="sampleTable">

                                        <thead>
                                        <tr>
                                            <th>Book Image</th>
                                            <th>Book name</th>
                                            <th>Author</th>
                                            <th>Date Returned</th>
                                            <th >Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($returned as $requests)


                                            <tr>
                                                <td class="justify-content-center"><img
                                                        src="{{asset('storage/'.$requests->book_image)}}" alt=""
                                                        height="100" width="100" style="border-radius: 10px"></td>
                                                <td>{{$requests->book_name}}</td>
                                                <td>{{$requests->book_author}}</td>

                                                <td>{{$requests->date_returned}}</td>
                                                <td>
                                                    <form action="/delete/{{$requests->id}}" method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button class="btn btn-danger">Delete</button>
                                                    </form>

                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        @endif
    </main>


@endsection
