@extends('webapp.app')
@section('title', $titulo)

@section('content')
    <div class="col-md-12">
        <h1 class="page-header">¡Vamos a crear un anuncio!</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="page-content">
                        {!! Form::open(array('url' => 'foo/bar')) !!}

                            <div class="form-group">
                                <div class="row">
                                    <h3>Cuéntanos, ¿dónde se ubica el lugar que quieres rentar?</h3>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="input-group">
                                                <input type="text" name="direccion" class="form-control" placeholder="Search for...">
                                                <span class="input-group-btn">
                                                    <button id="ubicar-direccion" class="btn btn-default" type="button">
                                                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Ubicar
                                                    </button>
                                                </span>
                                            </div>
                                            <p class="help-block">Puedes agregar calle, colonia y ciudad.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="mapa" class="mapa" style="height: 400px;"></div>
                                    </div>
                                </div>
                            </div>


                            <h3>¿Cuanto debería costar del lugar?</h3>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Precio en números cerrados">
                                    <div class="input-group-addon">.00</div>
                                </div>
                            </div>

                            <h2 class="page-header">Características</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="funkyradio">
                                        <div class="funkyradio-success">
                                            <input type="checkbox" name="caracteristicas[]" id="ch1" />
                                            <label for="ch1">
                                                <span class="badges room_casa" data-name="room_casa"></span>
                                            </label>
                                        </div>
                                        <div class="funkyradio-success">
                                            <input type="checkbox" name="caracteristicas[]" id="ch2" />
                                            <label for="ch2">Busco un lugar donde habitar</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
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