@extends('admin.layout')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Librarians</h1>
                <p>Table to display analytical data effectively</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="/" target="_blank">Website</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="sampleTable">

                                <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>User_id</th>
                                    <th>Email</th>
                                    <th>Phone.no</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($libs as $lib)

                                    <tr>
                                        <td>{{$lib->firstname}}</td>
                                        <td>{{$lib->lastname}}</td>
                                        <td>{{$lib->user_id}}</td>
                                        <td>{{$lib->email}}</td>
                                        <td>{{$lib->phone}}</td>
                                        <td>{{$lib->address}}</td>
                                        <td>
                                            <form action="/changeStatus/{{$lib->id}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <button class="btn btn-success" >Change Status</button>
                                            </form>
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
@endsection
