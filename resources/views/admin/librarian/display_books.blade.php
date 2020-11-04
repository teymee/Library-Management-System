@extends('admin.layout')

<?php
//include 'db_connect.php';
//include 'include/header.php';
//include 'include/sidebar.php';
//include 'code.php';
//
//$sql = "SELECT * FROM add_books  ORDER BY book_name ASC";
//$results = mysqli_query($conn, $sql);
//if (!$results){
//    die("Couldn't connect ".mysqli_error($conn));
//}else{
//    if(mysqli_num_rows($results)>0){
//        mysqli_fetch_assoc($results);
//    }
//
//}
//?>


@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Books</h1>
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
                                <th>Book Image</th>
                                <th>Book name</th>
                                <th>Author</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Lease Length</th>
                                <th>Avaliable Quantity</th>
                                <th>Pages</th>
                                <th>Price</th>
                                <th>Edit Book</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                             @foreach ($books as $book)


                            <tr>
                                <td><img src="{{asset('storage/'.$book->images)}} " alt="" height="100" width="100" style="border-radius: 10px"></td>
                                <td>{{$book->name}} </td>
                                <td>{{$book->author}} </td>
                                <td>{{$book->synopsis}}</td>
                                <td>{{$book->cat_id}}</td>
                                <td>{{$book->lease_week}}</td>
                                <td>{{$book->quantity}}</td>
                                <td>{{$book->pages}}</td>
                                <td>{{$book->price}}</td>
                                <td><a href="{{$book->id}}"><button class="btn btn-success">Edit</button></a>

                                </td>
                                <td><a  href="?delete_book={{$book->id}} ?>"><button class="btn btn-danger" >Delete</button></a></td>
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





