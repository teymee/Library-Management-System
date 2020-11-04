@extends('admin.layout')


@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Accepted Request </h1>
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

        @if($requests->count() > 0)
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
                                @foreach ($requests as $request)


                                <tr>
                                    <td>{{$request->user->user_id}}</td>
                                    <td>{{$request->user->lastname}}</td>
                                    <td>{{$request->user->firstname}}</td>
                                    <td>{{$request->user->phone}}</td>
                                    <td>{{$request->book_name}}</td>
                                    <td>{{$request->book_author}}</td>
                                    <td><a  href="/return/{{$request->id}}"><button class="btn btn-success" >Return</button></a></td>

                                </tr>

                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="d-flex justify-content-center col-12" style="margin: auto auto;">
                <strong><h3>No Accepted Requests Currently in Dashboard</h3></strong>
            </div>
        @endif
    </main>
@endsection
