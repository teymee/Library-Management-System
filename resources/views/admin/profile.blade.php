@extends('admin.layout')





@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Profile</h1>
            <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="/" target="_blank">Website</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">


                <form  method="post" action="/update_profile/{{auth()->user()->id}}" >
                    @csrf
                    @method('PUT')

                    <div class="alert alert-success col-md-6 mx-auto d-block">
                        <p> To update your Profile picture and Password go to  <a href="/settings" class="alert-link">Settings</a>  page.</p>
                    </div>
                    <img class="rounded-circle mx-auto d-block" src="{{asset('storage/'.auth()->user()->avatar)}}" style="width: 200px; height: 200px">
                    <br>

                    <div class="container align-content-center">
                        <div>
                            <label class="control-label"><strong> User ID  <small>(Very Important )</small>:</strong> </label>
                            <input class="form-control" style="width: 250px" type="text" name="lib_id"  value="{{auth()->user()->user_id}}" readonly>
                        </div>
                        <br>

                        <div>
                            <label class="control-label"><strong> Lastname:</strong> </label>
                            <input class="form-control" style="width: 250px" type="text" name="lastname"  value="{{auth()->user()->lastname}}" >

                            @error('lastname')
                            <p class="text-danger"><small>{{$message}}</small></p>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label class="control-label"><strong> Firstname:</strong> </label>
                            <input class="form-control" style="width: 250px" type="text" name="firstname" value="{{ auth()->user()->firstname }}">

                            @error('firstname')
                            <p class="text-danger"><small>{{$message}}</small></p>
                            @enderror
                        </div>
                        <br>

                        <div>
                            <label class="control-label"><strong> Phone:</strong> </label>
                            <input class="form-control" style="width: 250px" type="text" name="phone"  value="{{auth()->user()->phone}}" >

                            @error('phone')
                            <p class="text-danger"><small>{{$message}}</small></p>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label class="control-label"><strong> Address:</strong> </label>
                            <textarea class="form-control" name="address"  name="" id="" cols="3" rows="2">{{auth()->user()->address}}</textarea>
{{--                            <input class="form-control" style="width: 250px" type="text" name="username"  value="<?php echo $profile['username']?>" >--}}

                            @error('address')
                            <p  class="text-danger"><small>{{$message}}</small></p>
                            @enderror
                        </div>
                        <br>

                        <div class="tile-footer">
                            <button class="btn btn-primary col-md-4 " type="submit" name="update_profile">Update Profile</button>
                        </div>
                    </div>

                </form>
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
    if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
</script>
</body>
</html>
