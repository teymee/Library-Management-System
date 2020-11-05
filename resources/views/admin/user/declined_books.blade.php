@extends('admin.layout')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Declined Books</h1>
                <p>Table to display analytical data effectively</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="../../website/estore/index.php" target="_blank">Website</a></li>
            </ul>
        </div>


        @if($user->count() > 0)
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
                                        <th>Reason</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($user as $requests)

                                        <tr>
                                            <td class="justify-content-center"><img
                                                    src="{{asset('storage/'.$requests->book_image)}}" alt=""
                                                    height="100" width="100" style="border-radius: 10px"></td>
                                            <td>{{$requests->book_name}}</td>
                                            <td>{{$requests->book_author}}</td>
                                            <td>{{$requests->reason}}</td>
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
        </main>
@endsection
