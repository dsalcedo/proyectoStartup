<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Page 1</title>
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
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#myModal">Iniciar sesión</a></li>
                    <li><a href="./" style="background: #f6f037;">¡Quiero unirme!</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Navbar example</h1>
            <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
            <p>To see the difference between static and fixed top navbars, just scroll.</p>
            <p>
                <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
            </p>
        </div>

    </div> <!-- /container -->
    <style>
        .modal-login .modal-header{
            padding: 0;
        }
        .modal-login .modal-header .cover{
            position: absolute;
            width: 100%;
            height: 218px;
            background: rgba(0, 0, 0, 0.48);
        }
        .modal-login .modal-header img{
            border-radius: 5px 5px 0 0;
        }
        .modal-login .modal-header h4{
            position: absolute;
            width: 100%;
            margin-top: 80px;
            color: #ffffff;
            z-index: 9999;
            text-transform: uppercase;
        }
    </style>
    <div class="modal fade modal-login" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="myModalLabel">
                        Descubre mil y un lugares para vivir</br>
                        ó</br>
                        comparte depa con roomies increíbles
                    </h4>
                    <div class="cover"></div>
                    <img src="https://35ht6t2ynx0p1ztf961h81r1-wpengine.netdna-ssl.com/wp-content/uploads/2014/12/HERO-Housing-photos-with-students-118.jpg" class="img-responsive">
                    <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                </div>
                <div class="modal-body text-center">
                    PARA CONTINUAR DEBES INICIAR SESIÓN CON
                    <br>
                    <a href="" class="btn btn-round-link btn-fb">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        Facebook
                    </a>
                    <a href="" class="btn btn-round-link btn-twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        Twitter
                    </a>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var customDeps = ['app/test'];
    </script>
    <script src="{{ URL::asset('assets/require.js') }}" data-main="{{URL::asset('assets/conf.js')}}"></script>
    </body>
</html>