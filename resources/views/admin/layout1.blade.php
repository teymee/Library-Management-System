<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="adminn/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Vali Admin</title>
    <style>
        .login-box{

        }
    </style>
</head>
<body>


@yield('content')




<!-- Essential javascripts for application to work-->
<script src="adminn/js/jquery-3.3.1.min.js"></script>
<script src="adminn/js/popper.min.js"></script>
<script src="adminn/js/bootstrap.min.js"></script>
<script src="adminn/js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="adminn/js/plugins/pace.min.js"></script>
<script type="text/javascript">
    // Login Page Flipbox control
    $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
    });
</script>
</body>
</html>
