@extends('admin.layout')

@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i>Suggested Books</h1>
                <p>Table to display analytical data effectively</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="/" target="_blank">Website</a></li>
            </ul>
        </div>

        @if($sug->count() > 0)
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="sampleTable">

                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Date sent</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($sug as $requests)



                                        <tr>
                                            <td></td>
                                            <td>{{$requests->name}}</td>
                                            <td>{{$requests->created_at->format('M d, Y')}}</td>


                                            <td>
                                                <form action="/delete/{{$requests->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger">Delete</button>
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
    @else
        <div class="d-flex justify-content-center col-12" style="margin: auto auto;">
            <strong><h3>No Suggestion Available Currently</h3></strong>
        </div>
    @endif

@endsection
