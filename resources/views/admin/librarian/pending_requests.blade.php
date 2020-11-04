@extends('admin.layout')

@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i>Pending Requests</h1>
                <p>Table to display analytical data effectively</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="/" target="_blank">Website</a></li>
            </ul>
        </div>

        @if(session()->has('session_message'))
            <div class="d-flex justify-content-center alert alert-success col-12">
                <strong><p>{{session('session_message')}}</p></strong>
            </div>
        @endif

        @if(session()->has('error_message'))
            <div class="d-flex justify-content-center alert alert-danger col-12">
                <strong><p>{{session('error_message')}}</p></strong>
            </div>
        @endif

        @if($user->count() > 0)
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
                                    @foreach ($user as $requests)



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
{{--                                                <form action="/status" method="post">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('PUT')--}}
{{--                                                    <input type="hidden" value="{{$requests->book_name}}"--}}
{{--                                                           name="book_name">--}}
{{--                                                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id">--}}
{{--                                                    <button class="btn btn-success">Accept</button>--}}
{{--                                                </form>--}}
                                                <a href="accept/{{$requests->id}}"><button class="btn btn-success">Accept</button></a>

                                            </td>
                                            <td>
                                                <a href="decline/{{$requests->id}}"><button class="btn btn-danger">Decline</button></a>
{{--                                                <form action="/delete/{{$requests->id}}" method="post">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}

{{--                                                    <button class="btn btn-danger">Decline</button>--}}
{{--                                                </form>--}}
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
    </main>
    @else
        <div class="d-flex justify-content-center col-12" style="margin: auto auto;">
            <strong><h3>No Book Currently in Dashboard</h3></strong>
        </div>
    @endif

@endsection
