<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">

    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    {{ Html::style('assets/css/font-awesome.css') }}
    {{ Html::style('assets/css/bootstrap.min.css') }}
    {{ Html::style('assets/css/bootstrap-social.css') }}
    {{ Html::style('assets/css/theme/website.css') }}

</head>
<body>
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-custom navbar-static-top">
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
                <li><a href="#" data-toggle="modal" data-target="#myModal">Iniciar sesión</a></li>
                <li><a href="" style="background: #f6f037;">¡Quiero unirme!</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

@yield('content')

<footer class="footer">
    <div class="container">
        <p class="text-muted">
            <span class="pull-right">
                Hecho con <i class="fa fa-heart" aria-hidden="true" style="color:#F13779;"></i> en México.
            </span>
        </p>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade modal-login" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="myModalLabel">
                    LOREM
                </h4>
                <div class="cover"></div>
                <img src="https://35ht6t2ynx0p1ztf961h81r1-wpengine.netdna-ssl.com/wp-content/uploads/2014/12/HERO-Housing-photos-with-students-118.jpg" class="img-responsive">
            </div>
            <div class="modal-body text-center">
                Inicia sesión con alguna de las redes sociales
                <div class="row social-network-block" style="margin-top: 30px;">
                    <div class="col-md-6">
                        <a href="{{route('auth.social')}}/facebook" class="btn btn-lg-custom btn-round-link btn-fb">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            Facebook
                        </a></div>
                    <div class="col-md-6">
                        <a href="{{route('auth.social')}}/twitter" class="btn btn-lg-custom btn-round-link btn-twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            Twitter
                        </a>
                    </div>
                    <div class="col-md-12" style="margin-top: 30px;">
                        <p>NO COMPARTIREMOS NADA SIN TU AUTORIZACIÓN.</br>
                            AL CONTINUAR ACEPTAS NUESTROS TÉRMINOS Y CONDICIONES.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

@stack('scripts')

<script src="https://maps.googleapis.com/maps/api/js?sensor=false" async defer></script>
<script src="{{ URL::asset('assets/require.js') }}" data-main="{{URL::asset('assets/conf.js')}}"></script>
</body>
</html>