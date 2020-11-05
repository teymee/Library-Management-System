@extends('admin.layout')


@section('content')
    <main class="app-content">

        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Add Book Category</h1>
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
                    <form class="row" method="post" action="/add_category">
                        @csrf
                        <div class="form-group col-md-6">
                            <label class="control-label">Category: </label>
                            <input class="form-control" type="text" name="name" placeholder="Enter Category name">
                        </div>

                        <div class="form-group col-md-4 align-self-end">
                            <button class="btn btn-primary" name="add_cat" type="submit"><i
                                    class="fa fa-fw fa-lg fa-check-circle"></i>Add Category
                            </button>
                        </div>
                    </form>

                    <br> <br> <br>


                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Number of Books</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->catNum($category->id)}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>


    </main>

@endsection





<!-- Essential javascripts for application to work-->
{{--<script src="js/jquery-3.3.1.min.js"></script>--}}
{{--<script src="js/popper.min.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<script src="js/main.js"></script>--}}
{{--<!-- The javascript plugin to display page loading on top-->--}}
{{--<script src="js/plugins/pace.min.js"></script>--}}
{{--<!-- Page specific javascripts-->--}}
{{--<!-- Google analytics script-->--}}
{{--<script type="text/javascript">--}}
{{--    if(document.location.hostname == 'pratikborsadiya.in') {--}}
{{--        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
{{--            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
{{--            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
{{--        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');--}}
{{--        ga('create', 'UA-72504830-1', 'auto');--}}
{{--        ga('send', 'pageview');--}}
{{--    }--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
