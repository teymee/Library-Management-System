<!DOCTYPE html>
<html lang="en">


<head>

    <meta name="description"
          content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description"
          content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminn/css1/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>


<body class="app sidebar-mini">


<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="/admin">Vali</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
                                    aria-label="Hide Sidebar"></a>

    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <li class="app-search">
            <form action="/search" method="post">
                @csrf
                <input class="app-search__input" type="search"
                       placeholder="{{(auth()->user()->role == 'user')? 'Search Book': 'Search User ID/Email'}} "
                       name="search">
                <button class="app-search__button"><i class="fa fa-search"></i></button>
            </form>
        </li>


        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i
                    class="fa fa-bell-o fa-lg"></i></a>
            <ul class="app-notification dropdown-menu dropdown-menu-right">
                <li class="app-notification__title">You have 4 new notifications.</li>
                <div class="app-notification__content">
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span
                                    class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i
                                        class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                            <div>
                                <p class="app-notification__message">Lisa sent you a mail</p>
                                <p class="app-notification__meta">2 min ago</p>
                            </div>
                        </a></li>
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span
                                    class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i
                                        class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                            <div>
                                <p class="app-notification__message">Mail server not working</p>
                                <p class="app-notification__meta">5 min ago</p>
                            </div>
                        </a></li>
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span
                                    class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i
                                        class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                            <div>
                                <p class="app-notification__message">Transaction complete</p>
                                <p class="app-notification__meta">2 days ago</p>
                            </div>
                        </a></li>
                    <div class="app-notification__content">
                        <li><a class="app-notification__item" href="javascript:;"><span
                                    class="app-notification__icon"><span class="fa-stack fa-lg"><i
                                            class="fa fa-circle fa-stack-2x text-primary"></i><i
                                            class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                                <div>
                                    <p class="app-notification__message">Lisa sent you a mail</p>
                                    <p class="app-notification__meta">2 min ago</p>
                                </div>
                            </a></li>
                        <li><a class="app-notification__item" href="javascript:;"><span
                                    class="app-notification__icon"><span class="fa-stack fa-lg"><i
                                            class="fa fa-circle fa-stack-2x text-danger"></i><i
                                            class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                                <div>
                                    <p class="app-notification__message">Mail server not working</p>
                                    <p class="app-notification__meta">5 min ago</p>
                                </div>
                            </a></li>
                        <li><a class="app-notification__item" href="javascript:;"><span
                                    class="app-notification__icon"><span class="fa-stack fa-lg"><i
                                            class="fa fa-circle fa-stack-2x text-success"></i><i
                                            class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                                <div>
                                    <p class="app-notification__message">Transaction complete</p>
                                    <p class="app-notification__meta">2 days ago</p>
                                </div>
                            </a></li>
                    </div>
                </div>
                <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
            </ul>
        </li>


        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i
                    class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</header>


<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

<aside class="app-sidebar">

    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
                                        src="{{asset('storage/'.auth()->user()->avatar)}}" alt="User Image"
                                        style="width: 30px; height: 30px">
        <div>
            <p class="app-sidebar__user-name"><small>{{auth()->user()->email}}</small></p>
            <p class="app-sidebar__user-designation"><small>{{auth()->user()->user_id}}</small></p>
        </div>
    </div>


    <ul class="app-menu">

                                            {{-- LIBARIRAN SIDEBAR--}}

        @can('allowLib')
            <li><a class="app-menu__item active" href="/admin"><i class="app-menu__icon fa fa-dashboard"></i><span
                        class="app-menu__label">Dashboard</span></a></li>

            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon  fa fa-user"></i><span class="app-menu__label">Registered Users</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/users"><i class="icon fa fa-circle-o"></i> Users </a></li>
                    <li><a class="treeview-item" href="/librarians"><i class="icon fa fa-circle-o"></i> Librarians </a>
                    </li>
                </ul>
            </li>
            <li class="treeview "><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Catalog</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item " href="/add_category"><i class="icon fa fa-circle-o"></i> Add Category
                        </a></li>
                    <li><a class="treeview-item" href="/add_book"><i class="icon fa fa-circle-o"></i> Add book</a></li>
                </ul>
            </li>
            <li><a class="app-menu__item " href="/books"><i class="app-menu__icon fa fa-th-list"></i><span
                        class="app-menu__label">Display Books</span></a></li>

            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                        class="app-menu__icon fa fa-files-o"></i><span class="app-menu__label">Requests</span><i
                        class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="/pending_requests"><i class="icon fa fa-circle-o"></i> Pending
                        </a></li>
                    <li><a class="treeview-item" href="/accepted_request"><i class="icon fa fa-circle-o"></i>
                            Accepted</a></li>
                    <li><a class="treeview-item " href="/declined_request"><i class="icon fa fa-circle-o"></i> Declined</a>
                    </li>

                </ul>
            </li>

            <li><a class="app-menu__item " href="/returned_books"><i class="app-menu__icon fas fa-undo-alt"></i><span
                        class="app-menu__label">Returned Books</span></a></li>

            <li><a class="app-menu__item " href="/sug_box"><i class="app-menu__icon fa fa-th-list"></i><span
                        class="app-menu__label">Suggestion Box</span></a></li>

        @endcan



                                                    {{-- USER SIDEBAR--}}

        @can('allowUser')

            <li><a class="app-menu__item active" href="/admin"><i class="app-menu__icon fa fa-dashboard"></i><span
                        class="app-menu__label">My Library</span></a></li>

            <li><a class="app-menu__item " href="/my_books"><i class="app-menu__icon fas fa-book"></i><span
                        class="app-menu__label">My Books</span></a></li>

            <li><a class="app-menu__item " href="/pending"><i class="app-menu__icon fa fa-files-o"></i><span
                        class="app-menu__label">Pending Books</span></a></li>

            <li><a class="app-menu__item " href="/accepted_books"><i class="app-menu__icon fas fa-vote-yea"></i><span
                        class="app-menu__label">Accepted Books</span></a></li>

            <li><a class="app-menu__item" href="/declined_books"><i class="app-menu__icon fas fa-ban"></i><span
                        class="app-menu__label">Declined Books</span></a></li>

            <li><a class="app-menu__item " href="/submitted_books"><i class="app-menu__icon fas fa-undo-alt"></i><span
                        class="app-menu__label">Submitted Books</span></a></li>
        @endcan


                                            {{--NEUTRAL SIDEBARS--}}

        <li><a class="app-menu__item" href="/profile"><i class="app-menu__icon fas fa-user-circle"></i><span
                    class="app-menu__label">Profile</span></a></li>

        <li>
            <form class="app-menu__item d-flex justify-content-start" action="/logout" method="post">
                @csrf
                @method('POST')
                <div class="container">
                    <button role="submit"
                            style=" cursor:pointer; border: none; background-color: transparent; color: ghostwhite;  font-size: 15px">
                        <i class="app-menu__icon fas fa-sign-out-alt"></i> <span class="app-menu__label">Logout</span>
                    </button>
                </div>
            </form>
        </li>
                                                    {{--END--}}
    </ul>

</aside>


@yield('content')





<!-- Essential javascripts for application to work-->
<script src="{{asset('adminn/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('adminn/js/popper.min.js')}}"></script>
<script src="{{asset('adminn/js/bootstrap.min.js')}}"></script>
<script src="{{asset('adminn/js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('adminn/js/plugins/pace.min.js')}}"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="adminn/js/plugins/chart.js"></script>
<script type="text/javascript">
    var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86]
            }
        ]
    };
    var pdata = [
        {
            value: 300,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Complete"
        },
        {
            value: 50,
            color: "#F7464A",
            highlight: "#FF5A5E",
            label: "In-Progress"
        }
    ]

    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);

    var ctxp = $("#pieChartDemo").get(0).getContext("2d");
    var pieChart = new Chart(ctxp).Pie(pdata);
</script>
<!-- Google analytics script-->
<script type="adminn/text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }

</script>


<!-- Essential javascripts for application to work-->

<!-- The javascript plugin to display page loading on top-->


<!-- Page specific javascripts-->
<script type="text/javascript" src="{{asset('adminn/js/plugins/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminn/js/plugins/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminn/js/plugins/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('adminn/js/plugins/dropzone.js')}}"></script>
<script type="text/javascript">
    $('#sl').on('click', function () {
        $('#tl').loadingBtn();
        $('#tb').loadingBtn({text: "Signing In"});
    });

    $('#el').on('click', function () {
        $('#tl').loadingBtnComplete();
        $('#tb').loadingBtnComplete({html: "Sign In"});
    });

    $('#demoDate').datepicker({
        format: "MM dd, yyyy",
        autoclose: true,
        todayHighlight: true
    });

    $('#demoSelect').select2();
</script>
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


<!-- Data table plugin-->
<script type="text/javascript" src="adminn/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="adminn/js/plugins/dataTables.bootstrap.min.js"></script>
{{--<script type="text/javascript">$('#sampleTable').DataTable();</script>--}}
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
