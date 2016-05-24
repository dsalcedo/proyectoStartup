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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
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
                <li class="active"><a href="#acerca" id="miCuenta" >Mi cuenta</a></li>
                <li><a href="#acerca" id="guarda" >Guardados   <span class="badge">4</span></a></li>
                <li><a href="#acerca" id="pagos" >Pago</a></li>
                <li><a href="#acerca" id="busquedas">Acerca</a></li>
                <li><a href="#terminos-y-condiciones">Términos y condiciones</a></li>
                <li><a href="#desconectarme">Desconectarme</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="col-md-12">
                <div id="principal" style="display: none">
                    <h1 class="page-header">Mi cuenta</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-content">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Buscar apartamento ingresa una calle, un barrio, hasta una ciudad">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-content">
                                <div class="form-horizontal">
                                    <!--<div id="map_canvas" style="width: 100%; height:500px;"></div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="busqueda" style="display: none;">
                    <div class="alert alert-warning">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Advertencia!</strong>, es necesario verificar tu identidad
                    </div>
                    <h1 class="page-header">Econtramos estos apartamentos para ti</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="page-content">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Buscar apartamento ingresa una calle, un barrio, hasta una ciudad">
                                    </div>
                                    <br>
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <div id="carousel-example-generic" style="width: 122px;" class="carousel slide" data-ride="carousel">
                                                                <!-- Wrapper for slides -->
                                                                <div class="carousel-inner" role="listbox">
                                                                    <div class="item active">
                                                                        <img src="{{URL::asset('assets/images/promoimages/promocasa.jpg')}}" style="width: 400px; height: 100px;" alt="...">
                                                                    </div>
                                                                    <div class="item">
                                                                        <img src="{{URL::asset('assets/images/promoimages/promocasa.jpg')}}" style="width: 400px; height: 100px;" alt="...">
                                                                    </div>
                                                                </div>
                                                                <!-- Controls -->
                                                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">
                                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    Hermosa casa
                                                                </a>
                                                            </h4>
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        <label for="input-3" class="control-label">Puntuación:</label>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            <button class="btn btn-info btn-sm">Agregar a favoritos</button>
                                                        </div>
                                                    </div>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <div id="carousel-example-generic2" style="width: 122px;" class="carousel slide" data-ride="carousel">
                                                                <!-- Wrapper for slides -->
                                                                <div class="carousel-inner" role="listbox">
                                                                    <div class="item active">
                                                                        <img src="{{URL::asset('assets/images/promoimages/promocasa2.jpg')}}" style="width: 400px; height: 100px;" alt="...">
                                                                    </div>
                                                                    <div class="item">
                                                                        <img src="{{URL::asset('assets/images/promoimages/promocasa2.jpg')}}" style="width: 400px; height: 100px;" alt="...">
                                                                    </div>
                                                                </div>
                                                                <!-- Controls -->
                                                                <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">
                                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                                                    Hermosa casa
                                                                </a>
                                                            </h4>
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        <label for="input-3" class="control-label">Puntuación:</label>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            <button class="btn btn-info btn-sm">Agregar a favoritos</button>
                                                        </div>
                                                    </div>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <div id="carousel-example-generic3" style="width: 122px;" class="carousel slide" data-ride="carousel">
                                                                <!-- Wrapper for slides -->
                                                                <div class="carousel-inner" role="listbox">
                                                                    <div class="item active">
                                                                        <img src="{{URL::asset('assets/images/promoimages/promocasa3.jpg')}}" style="width: 400px; height: 100px;" alt="...">
                                                                    </div>
                                                                    <div class="item">
                                                                        <img src="{{URL::asset('assets/images/promoimages/promocasa3.jpg')}}" style="width: 400px; height: 100px;" alt="...">
                                                                    </div>
                                                                </div>
                                                                <!-- Controls -->
                                                                <a class="left carousel-control" href="#carousel-example-generic3" role="button" data-slide="prev">
                                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="right carousel-control" href="#carousel-example-generic3" role="button" data-slide="next">
                                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">
                                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                                                    Hermosa casa
                                                                </a>
                                                            </h4>
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        <label for="input-3" class="control-label">Puntuación:</label>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            <button class="btn btn-info btn-sm">Agregar a favoritos</button>
                                                        </div>
                                                    </div>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="page-content">
                                <div class="form-horizontal">
                                    <div id="map_canvas" style="width: 100%; height:500px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="guardados" style="display: none;">
                    <h1 class="page-header">Mi rentas sugeridas</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-content">
                                <div class="form-horizontal">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <div id="carousel-example-generic4" style="height: 200px;;" class="carousel slide" data-ride="carousel">
                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <img src="{{URL::asset('assets/images/promoimages/promocasa.jpg')}}" style="height: 200px;" alt="...">
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{URL::asset('assets/images/promoimages/promocasa.jpg')}}" style="height: 200px;" alt="...">
                                                        </div>
                                                    </div>
                                                    <!-- Controls -->
                                                    <a class="left carousel-control" href="#carousel-example-generic4" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic4" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <!--<img src="{{URL::asset('assets/images/promoimages/promocasa.jpg')}}" style="height: 200px;" alt="...">-->
                                                <div class="caption">
                                                    <h3>Av. Universidad</h3>
                                                    <p>...</p>
                                                    <p><a href="#" class="btn btn-primary" role="button">Contactar</a> <a href="#" class="btn btn-default" role="button">Mostrar más</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <div id="carousel-example-generic5" style="height: 200px;;" class="carousel slide" data-ride="carousel">
                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <img src="{{URL::asset('assets/images/promoimages/promocasa2.jpg')}}" style="height: 200px;" alt="...">
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{URL::asset('assets/images/promoimages/promocasa2.jpg')}}" style="height: 200px;" alt="...">
                                                        </div>
                                                    </div>
                                                    <!-- Controls -->
                                                    <a class="left carousel-control" href="#carousel-example-generic5" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic5" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <!--<img src="{{URL::asset('assets/images/promoimages/promocasa.jpg')}}" style="height: 200px;" alt="...">-->
                                                <div class="caption">
                                                    <h3>Av. Universidad</h3>
                                                    <p>...</p>
                                                    <p><a href="#" class="btn btn-primary" role="button">Contactar</a> <a href="#" class="btn btn-default" role="button">Mostrar más</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                <div id="carousel-example-generic6" style="height: 200px;;" class="carousel slide" data-ride="carousel">
                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <img src="{{URL::asset('assets/images/promoimages/promocasa3.jpg')}}" style="height: 200px;" alt="...">
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{URL::asset('assets/images/promoimages/promocasa3.jpg')}}" style="height: 200px;" alt="...">
                                                        </div>
                                                    </div>
                                                    <!-- Controls -->
                                                    <a class="left carousel-control" href="#carousel-example-generic6" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic6" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <!--<img src="{{URL::asset('assets/images/promoimages/promocasa.jpg')}}" style="height: 200px;" alt="...">-->
                                                <div class="caption">
                                                    <h3>Av. Universidad</h3>
                                                    <p>...</p>
                                                    <p><a href="#" class="btn btn-primary" role="button">Contactar</a> <a href="#" class="btn btn-default" role="button">Mostrar más</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pago" style="display: none;">
                    <h1 class="page-header">Metodos de pago & pagos</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-content">
                                <div class="form-horizontal">
                                    <table id="example" class="display" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Referencia</th>
                                            <th>Apartamento No.</th>
                                            <th>Metodo de pago</th>
                                            <th>Número de mes</th>
                                            <th>Fecha de pago</th>
                                            <th>Monto</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Referencia</th>
                                            <th>Apartamento No.</th>
                                            <th>Metodo de pago</th>
                                            <th>Número de mes</th>
                                            <th>Fecha de pago</th>
                                            <th>Monto</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td><a href="#">R001-0012</a></td>
                                            <td>Tarjeta credito 3650</td>
                                            <td>01</td>
                                            <td>2008/11/13</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td><a href="#">R001-1012</a></td>
                                            <td>Tarjeta de debito 0420</td>
                                            <td>04</td>
                                            <td>2011/06/27</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td><a href="#">R001-0442</a></td>
                                            <td>OXXO</td>
                                            <td>12</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-content">
                                <div class="form-horizontal">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img class="media-object" src="{{URL::asset('assets/images/promoimages/mastercard.png')}}" style="height: 50px;" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <p class="lead">Daniel Isaac Mora Osorio</p>
                                            Nº tarjeta: **** **** **** 5211
                                        </div>
                                        <div class="media-right media-middle">
                                            <button class="btn btn-info">Editar tarjeta</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-content">
                                <div class="form-horizontal">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img class="media-object" src="{{URL::asset('assets/images/promoimages/visa.png')}}" style="height: 50px;" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <p class="lead">Daniel Isaac Mora Osorio</p>
                                            Nº tarjeta: **** **** **** 2122
                                        </div>
                                        <div class="media-right media-middle">
                                            <button class="btn btn-info">Editar tarjeta</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')

    </div>
</div>

@stack('scripts')

<script src="https://maps.googleapis.com/maps/api/js?v=3.11&sensor=false" type="text/javascript"></script>
<script src="{{ URL::asset('assets/require.js') }}" data-main="{{URL::asset('assets/conf.js')}}"></script>
<script>
    $('#guarda').on('click',function(){
        document.getElementById('principal').style.display="none";
        document.getElementById('busqueda').style.display="none";
        document.getElementById('guardados').style.display="block";
        document.getElementById('pago').style.display="none";
    });
    $('#pagos').on('click',function(){
        document.getElementById('principal').style.display="none";
        document.getElementById('busqueda').style.display="none";
        document.getElementById('guardados').style.display="none";
        document.getElementById('pago').style.display="block";
    });
    $('#miCuenta').on('click',function(){
        document.getElementById('principal').style.display="block";
        document.getElementById('busqueda').style.display="none";
        document.getElementById('guardados').style.display="none";
        document.getElementById('pago').style.display="none";
    });
    $('#busquedas').on('click',function(){
        document.getElementById('principal').style.display="none";
        document.getElementById('busqueda').style.display="block";
        document.getElementById('guardados').style.display="none";
        document.getElementById('pago').style.display="none";
    });
</script>
</body>
</html>