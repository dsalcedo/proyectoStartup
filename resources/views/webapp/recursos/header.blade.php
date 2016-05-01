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
                <li><a href="#" data-toggle="modal" data-target="#myModal">Quiero buscar</a></li>
                <li><a href="./" style="background: #f6f037;">¡Crear un anuncio!</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <div class="profile-material">
                <div class="profile-image">
                    <img src="{{$usuario->avatar_imagen}}" class="image">
                    @if($usuario->verificado)
                        <span class="badge-verified text-center" data-toggle="tooltip" data-placement="left" title="Verificado">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </span>
                    @else
                        <span class="badge-no-verified text-center" data-toggle="tooltip" data-placement="left" title="No verificado">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        </span>
                    @endif
                    <div class="col-md-12 text-center profile-name">
                        <div class="row">
                            <a href="#" class="internal-link">
                                {{$usuario->nombre}}
                            </a>
                            <span class="block">
                                <a href="https://facebook.com/{{$usuario->id_social}}" target="_blank">
                                    <i class="fa fa-{{($usuario->red == 'facebook') ? $usuario->red.'-square facebook-color' : 'twitter twitter-color'}}" aria-hidden="true"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="cover-up">
                        <img src="{{$usuario->avatar_imagen}}" alt="">
                    </div>
                </div>
            </div>
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>

            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="{{route('website.acerca')}}" target="_blank">Acerca</a></li>
                <li><a href="{{route('website.tos')}}" target="_blank">Términos y condiciones</a></li>
                <li><a href="{{route('app.desconectar')}}">Desconectarme</a></li>
            </ul>
        </div>


        @yield('content')

    </div>
</div>

@stack('scripts')
<script src="{{ URL::asset('assets/require.js') }}" data-main="{{URL::asset('assets/conf.js')}}"></script>
</body>
</html>