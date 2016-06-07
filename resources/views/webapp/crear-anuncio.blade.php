@extends('webapp.app')
@section('title', $titulo)

@section('content')
    <div class="col-md-12">
        <h1 class="page-header">¡Vamos a crear un anuncio!</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="page-content">
                        {!! Form::open(array('url' => 'foo/bar')) !!}

                                <div class="row">
                            <div class="form-group">
                                    <h3>Cuéntanos, ¿dónde se ubica el lugar que quieres rentar?</h3>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="input-group">
                                                <input type="text" name="direccion" class="form-control" placeholder="">
                                                <span class="input-group-btn">
                                                    <button id="ubicar-direccion" class="btn btn-default" type="button">
                                                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Buscar ubicación
                                                    </button>
                                                </span>
                                            </div>
                                            <p class="help-block">Puedes agregar calle, colonia y ciudad</p>

                                            <div id="mapa" class="mapa" style="height: 400px;"></div>
                                        </div>
                                    </div>
                            </div>

                            <h3>¿Cual es el costo mensual?</h3>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="input-group">
                                            <div class="input-group-addon">$</div>
                                            <input type="text" class="form-control" id="exampleInputAmount" placeholder="Precio en números cerrados">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                        <p class="help-block">Ej: 3000</p>
                                    </div>
                                </div>
                            </div>
                                </div>

                            <h2 class="page-header">Características</h2>
                            <div class="row">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <i class="fa fa-wifi" aria-hidden="true"></i>
                                            Internet
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            Teléfono
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <i class="fa fa-car" aria-hidden="true"></i>
                                            Estacionamiento
                                        </label>
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            Amueblado
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <i class="fa fa-paw" aria-hidden="true"></i>
                                            Mascotas
                                        </label>
                                    </div>
                            </div>

                        <h2 class="page-header">Restricciones</h2>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                <i class="fa fa-paw" aria-hidden="true"></i>
                                Mascotas
                            </label>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection

@push("scripts")
<script>
    var customDeps = ['/assets/app/crear.anuncio.js'];
</script>
@endpush