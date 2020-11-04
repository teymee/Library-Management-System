@extends('admin.layout')

@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Settings </h1>
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
{{--                <img class="rounded-circle mx-auto d-block row" src="profile_picture/<?php echo $pro_pic ?>"--}}
{{--                     style="width: 200px; height: 200px">--}}
                <br>

                <div class="container">
                    <div class="row">
                        <form class="col-md-6" method="post" action="code.php" enctype="multipart/form-data">

                            <div>
{{--                                <input type="hidden" name="lib_id" value="<?php echo $lib_id ?>">--}}
                                <label class="control-label"> <strong>Update Profile Picture:</strong> </label>
                                <input class="form-control" type="file" name="pro_pic" required>
                            </div>
                            <br>
                            <div>
                                <label class="control-label"><strong> Password:</strong> </label>
                                <input class="form-control" type="text" name="pwd" required>
                            </div>
                            <br>
                            <button class="btn btn-primary col-md-12 " type="submit" name="update_picture">Update
                                Picture
                            </button>

                        </form>

                        <form class="col-md-6" method="post" action="code.php" enctype="multipart/form-data">

                            <div>
{{--                                <input type="hidden" name="lib_id" value="<?php echo $lib_id ?>">--}}
                                <label class="control-label"><strong> Old Password:</strong> </label>
                                <input class="form-control" type="text" name="old_pwd" required>
                            </div>
                            <br>
                            <div>
                                <label class="control-label"><strong> New Password:</strong> </label>
                                <input class="form-control" type="text" name="new_pwd" required>
                            </div>
                            <br>
                            <button class="btn btn-primary col-md-12 " type="submit" name="update_pwd">Update
                                Password
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection

<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<!-- Google analytics script-->
<script type="text/javascript">
    if (document.location.hostname == 'pratikborsadiya.in') {
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
</script>
</body>
</html>
