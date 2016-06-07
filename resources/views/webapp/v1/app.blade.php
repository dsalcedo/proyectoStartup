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
    {{ Html::style('assets/css/theme/appV1.css') }}

    @yield('css')

</head>
<body>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-header">
            <a href="#" id="toggle-button" class="toggle-button navbar-brand" >
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            <i class="fa fa-compass only-mobile" aria-hidden="true" style="font-size: 64px; margin-left: 25%; color: #0b97c4; margin-top:3px;"></i>
        </div>



        <div id="navbar" class="navbar-collapse collapse">
            <div class="col-md-6">
                <div class="row">
                    <form class="navbar-form navbar-left full-width" role="search">
                        <div class="input-group full-width">
                            <span class="input-group-addon" style="color: #c4c4c4;">
                                <i class="glyphicon glyphicon-search"></i>
                            </span>
                            <input type="text"  class="form-control" placeholder="Hacer una búsqueda" />
                        </div>
                    </form>
                </div>
            </div>
            <ul class="nav navbar-nav navbar-right ">
                <li><a href="{{route('app.buscar')}}">Quiero buscar</a></li>
                <li><a href="{{route('app.crearAnuncio')}}" style="background: #f6f037;">¡Crear un anuncio!</a></li>
            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>

@yield('content')

<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="{{asset('assets/libs/slideout/js/slideout.min.js')}}"></script>
<script>
    var slideout = new Slideout({
        'panel': document.getElementById('app-container'),
        'menu': document.getElementById('sidebar'),
        'padding': 256,
        'tolerance': 76
    });
    document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
    });
</script>
<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/bootstrap.min.js')}}"></script>
@yield('js')

</body>
</html>