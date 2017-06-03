<!DOCTYPE html>
<html lang="кг">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>News - Admin panel</title>

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
    <script src="{{ asset(env('THEME')) }}/js/ckeditor/ckeditor.js"></script>
</head>
             @yield('navigation')
@if(count($errors)>0)
     <div>
         @foreach($errors->all() as $error)
         <p>{{$error}}</p>
         @endforeach
     </div>
@endif

@if(session('status'))
    <div>
        {{session('status')}}
    </div>
@endif

@if(session('error'))
    <div>
        {{session('error')}}
    </div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
        <footer class="col-md-12">

            <p>&copy; 2017 Test work for Andrey Grinchak from AntoninaSych</p>
        </footer>
    </div>
</div>

<script src="{{ asset(env('THEME')) }}/js/jquery-3.2.1.min.js"></script>


<script src="{{ asset(env('THEME')) }}/js/bootstrap.min.js"></script>
<script src="{{ asset(env('THEME')) }}/js/bootstrap-filestyle.js"></script>{{--https://github.com/markusslima/bootstrap-filestyle для красивой кнопки загрузки файлов--}}
</body>
</html>