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
                    <li><a href="../navbar/">Ingresar</a></li>
                    <li><a href="./" style="background: #f6f037;">Ofrezco una habitación</a></li>

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


    <script>
        var customDeps = ['app/test'];
    </script>
    <script src="{{ URL::asset('assets/require.js') }}" data-main="{{URL::asset('assets/conf.js')}}"></script>
    </body>
</html>