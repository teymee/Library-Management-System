@extends('admin.layout')
<?php
//
//include 'include/header.php';
//
//$sql = mysqli_query($conn, "SELECT * FROM category");
//if (!$sql){
//    die("Couldn't connect ".mysqli_error($conn));
//}else{
//    if(mysqli_num_rows($sql)>0){
//        mysqli_fetch_assoc($sql);
//    }
//}
//
//
//
//?>
<!--SIDEBAR-->
<!-- Sidebar menu-->
{{--<div class="app-sidebar__overlay" data-toggle="sidebar"></div>--}}
{{--<aside class="app-sidebar">--}}
{{--    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="profile_picture/<?php echo $pro_pic?>" alt="User Image" style="width: 50px; height: 50px">--}}
{{--        <div>--}}
{{--            <p class="app-sidebar__user-name"><?php echo $profile['username']?></p>--}}
{{--            <p class="app-sidebar__user-designation"><?php echo $profile['lib_id']?></p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <ul class="app-menu">--}}
{{--        <li><a class="app-menu__item " href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>--}}

{{--        <li class="treeview "><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon  fa fa-user"></i><span class="app-menu__label">Registered Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li><a class="treeview-item" href="approved_users.php"><i class="icon fa fa-circle-o"></i> Approved Users </a></li>--}}
{{--                <li><a class="treeview-item" href="unapproved_users.php"><i class="icon fa fa-circle-o"></i> Unapproved Users </a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Catalog</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li><a class="treeview-item " href="add_category.php"><i class="icon fa fa-circle-o"></i> Add Category </a></li>--}}
{{--                <li><a class="treeview-item active" href="add_book.php"><i class="icon fa fa-circle-o"></i> Add book</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a class="app-menu__item " href="display_book.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Display Books</span></a></li>--}}

{{--        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-files-o"></i><span class="app-menu__label">Requests</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li><a class="treeview-item" href="pending_request.php"><i class="icon fa fa-circle-o"></i> Pending </a></li>--}}
{{--                <li><a class="treeview-item" href="accepted_request.php"><i class="icon fa fa-circle-o"></i> Accepted</a></li>--}}
{{--                <li><a class="treeview-item " href="declined_request.php"><i class="icon fa fa-circle-o"></i> Declined</a></li>--}}

{{--            </ul>--}}
{{--        </li>--}}

{{--        <li><a class="app-menu__item " href="returned_books.php"><i class="app-menu__icon fas fa-undo-alt"></i><span class="app-menu__label">Returned Books</span></a></li>--}}


{{--        <li><a class="app-menu__item" href="profile.php"><i class="app-menu__icon fas fa-user-circle"></i><span class="app-menu__label">Profile</span></a></li>--}}

{{--        <li><a class="app-menu__item " href="logout.php"><i class="app-menu__icon fas fa-sign-out-alt"></i><span class="app-menu__label">Log out</span></a></li>--}}

{{--        <!--    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>-->--}}
{{--        <!--      <ul class="treeview-menu">-->--}}
{{--        <!--        <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>-->--}}
{{--        <!--      </ul>-->--}}
{{--        <!--    </li>-->--}}
{{--        <!---->--}}
{{--        <!--    <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>-->--}}
{{--        <!---->--}}
{{--        <!--    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i></a>-->--}}
{{--        <!--      <ul class="treeview-menu">-->--}}
{{--        <!--        <li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i> Form Components</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i> Custom Components</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>-->--}}
{{--        <!--      </ul>-->--}}
{{--        <!--    </li>-->--}}
{{--        <!---->--}}
{{--        <!--    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>-->--}}
{{--        <!--      <ul class="treeview-menu">-->--}}
{{--        <!--        <li><a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>-->--}}
{{--        <!--      </ul>-->--}}
{{--        <!--    </li>-->--}}
{{--        <!---->--}}
{{--        <!--    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>-->--}}
{{--        <!--      <ul class="treeview-menu">-->--}}
{{--        <!--        <li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>-->--}}
{{--        <!--        <li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li>-->--}}
{{--        <!--      </ul>-->--}}
{{--        <!--    </li>-->--}}
{{--        <!---->--}}
{{--        <!--    <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Docs</span></a></li>-->--}}

{{--    </ul>--}}

{{--</aside>--}}
<!--END_SIDEBAR-->

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


{{--<!-- Essential javascripts for application to work-->--}}
{{--<script src="js/jquery-3.3.1.min.js"></script>--}}
{{--<script src="js/popper.min.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<script src="js/main.js"></script>--}}
{{--<!-- The javascript plugin to display page loading on top-->--}}
{{--<script src="js/plugins/pace.min.js"></script>--}}

{{--<!-- Page specific javascripts-->--}}
{{--<script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>--}}
{{--<script type="text/javascript" src="js/plugins/select2.min.js"></script>--}}
{{--<script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>--}}
{{--<script type="text/javascript" src="js/plugins/dropzone.js"></script>--}}
{{--<script type="text/javascript">--}}
{{--    $('#sl').on('click', function () {--}}
{{--        $('#tl').loadingBtn();--}}
{{--        $('#tb').loadingBtn({text: "Signing In"});--}}
{{--    });--}}

{{--    $('#el').on('click', function () {--}}
{{--        $('#tl').loadingBtnComplete();--}}
{{--        $('#tb').loadingBtnComplete({html: "Sign In"});--}}
{{--    });--}}

{{--    $('#demoDate').datepicker({--}}
{{--        format: "dd/mm/yyyy",--}}
{{--        autoclose: true,--}}
{{--        todayHighlight: true--}}
{{--    });--}}

{{--    $('#demoSelect').select2();--}}
{{--</script>--}}
{{--<!-- Google analytics script-->--}}
{{--<script type="text/javascript">--}}
{{--    if (document.location.hostname == 'pratikborsadiya.in') {--}}
{{--        (function (i, s, o, g, r, a, m) {--}}
{{--            i['GoogleAnalyticsObject'] = r;--}}
{{--            i[r] = i[r] || function () {--}}
{{--                (i[r].q = i[r].q || []).push(arguments)--}}
{{--            }, i[r].l = 1 * new Date();--}}
{{--            a = s.createElement(o),--}}
{{--                m = s.getElementsByTagName(o)[0];--}}
{{--            a.async = 1;--}}
{{--            a.src = g;--}}
{{--            m.parentNode.insertBefore(a, m)--}}
{{--        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');--}}
{{--        ga('create', 'UA-72504830-1', 'auto');--}}
{{--        ga('send', 'pageview');--}}
{{--    }--}}
{{--</script>--}}

{{--</body>--}}
{{--</html>--}}
