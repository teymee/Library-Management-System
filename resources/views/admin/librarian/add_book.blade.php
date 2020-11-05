@extends('admin.layout')

@section('content')

<main class="app-content">


    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Add New Books </h1>
            <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="../../website/estore/index.php" target="_blank">Website</a></li>
        </ul>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="tile">

                <form class="row" method="post" action="/add_book" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-6">

                        <div>
                            <label class="control-label"><strong> Book Name:</strong> </label>
                            <input class="form-control" type="text" name="name" value=" " >
                        </div>
                        <br>
                        <div>
                            <label class="control-label"><strong> Author:</strong> </label>
                            <input class="form-control" type="text" name="author" value=" " >
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="exampleSelect1"><strong>Book Category:</strong></label>
                            <select class="form-control" id="exampleSelect1" name="cat_id">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}" >{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div>
                            <label class="control-label"><strong> Book Synopsis: </strong> </label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" name="synopsis" ></textarea>
                        </div>
                        <br>
                        <div>
                            <label><strong>Publication Date:</strong></label>
                            <input class="form-control" id="demoDate" name="pub_date" type="text" placeholder="Select Date" >
                        </div>
                        <br>
                        <div>
                            <label class="control-label"> <strong>Number of week(s) on lease:</strong> </label>
                            <input class="form-control" type="text" name="lease_week" value=" ">
                        </div>
                        <br>
                        <div>
                            <label class="control-label"> <strong> Number of Pages:</strong> </label>
                            <input class="form-control" type="text" name="pages" value="" >
                        </div>
                        <br>
                        <div>
                            <label class="control-label"> <strong> Avaliable Quantity:</strong> </label>
                            <input class="form-control" type="text" name="quantity" value="">
                        </div>
                        <br>

                        <div>
                            <label class="control-label"> <strong>Book Image:</strong> </label>
                            <input class="form-control" type="file" name="images" >
                        </div>
                        <br>
                        <div>
                            <label><strong>Price:</strong></label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input class="form-control" id="exampleInputAmount" name="price" type="text" placeholder="Amount" >
                                <div class="input-group-append"><span class="input-group-text">.00</span></div>
                            </div>
                        </div>
                        <br>
                        <div class="tile-footer">
                            <button class="btn btn-primary col-md-12" type="submit" name="add_book">Add Book</button>
                        </div>




                    </div>




                </form>

                <br> <br> <br>



            </div>

        </div>

    </div>


</main>
@endsection


