<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    {{ Html::style('assets/css/bootstrap.min.css') }}

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    {{ Html::style('assets/css/font-awesome.css') }}
    {{ Html::style('assets/css/theme/app.css') }}
</head>
<body>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('website.index')}}">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('app.buscar')}}">Quiero buscar</a></li>
                <li><a href="{{route('app.crearAnuncio')}}" style="background: #f6f037;">¡Crear un anuncio!</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

@yield('content')

@stack('scripts')
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="{{ URL::asset('assets/require.js') }}" data-main="{{URL::asset('assets/conf.js')}}"></script>
</body>
</html>