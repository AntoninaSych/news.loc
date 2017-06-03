<!DOCTYPE html>
<html lang="êã">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>News</title>

    <!-- Bootstrap -->
    {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}

    <link rel="stylesheet" type="text/css" href="{{ asset(env('THEME')) }}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset(env('THEME')) }}/css/main.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <? $actual_link = "http://$_SERVER[HTTP_HOST]";?>
            <a class="navbar-brand"  href="<?php echo $actual_link;?>">News web site</a>
        </div>

    </div>
</nav>


<div class="container main">
    <div class="row">
    <div class="col-md-10">
        @yield('content')

    </div>
     @yield('bar')

    <footer class="col-md-12">

        <p>&copy; 2017 Test work for Andrey Grinchak from AntoninaSych</p>
    </footer>
</div>
</div>

<script src="{{ asset(env('THEME')) }}/js/jquery-3.2.1.min.js"></script>
<script src="{{ asset(env('THEME')) }}/js/bootstrap.min.js"></script>
</body>
</html>