@extends('admin.layout')

@section('content')


    <main class="app-content">

        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                <p>A free and open source Bootstrap 4 admin template</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="/" target="_blank">Website</a></li>
            </ul>
        </div>


        <div class="row">

            <div class="col-md-6 col-lg-3">
                <a href="/users" style="text-decoration: none">
                    <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                        <div class="info">
                            <h6 style="font-weight:400;">TOTAL USERS</h6>
                            <p><b><?php echo $users ?></b></p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-6 col-lg-3">
                <a href="/books" style="text-decoration: none">
                    <div class="widget-small info coloured-icon"><i class="icon fas fa-book fa-3x"></i>
                        <!--              <i class=" fa fa-thumbs-o-up  "></i>-->
                        <div class="info">
                            <h6 style="font-weight:400;">BOOKS</h6>
                            <p><b><?php echo $books ?></b></p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-6 col-lg-3">
                <a href="/pending_requests" style="text-decoration: none">
                    <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                        <div class="info">
                            <h6 style="font-weight:400;">PENDING REQUEST</h6>
                            <p><b><?php echo $pending_request ?></b></p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-6 col-lg-3">
                <a href="/accepted_request" style="text-decoration: none">
                    <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                        <div class="info">
                            <h6 style="font-weight:400;">PENDING SUBMISSION</h6>
                            <p><b><?php echo $pending_sub ?></b></p>
                        </div>
                    </div>
                </a>
            </div>


        </div>



        <div class="row">


            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Monthly Sales</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Support Requests</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
