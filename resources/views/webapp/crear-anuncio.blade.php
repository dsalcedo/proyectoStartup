@extends('webapp.recursos.header')
@section('title', $titulo)

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <div class="col-md-12">
        <h1 class="page-header">¡Vamos a crear un anuncio!</h1>
            <div class="row">
                <div class="col-md-12">

                <div class="page-content">
                    {!! Form::open(array('url' => 'foo/bar')) !!}
                        <h3>Cuéntanos, ¿ofreces o buscas un lugar donde habitar?</h3>
                        <div class="funkyradio">
                            <div class="funkyradio-success">
                                <input type="radio" name="radio" id="radio3" />
                                <label for="radio3">Ofrezco un lugar de habitación</label>
                            </div>
                            <div class="funkyradio-success">
                                <input type="radio" name="radio" id="radio4" />
                                <label for="radio4">Busco un lugar donde habitar</label>
                            </div>
                        </div>

                        <h3>¿Dónde?</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="">
                            <p class="help-block">Puedes agregar una calle, un barrio, hasta una ciudad.</p>
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

    </div>
@endsection

@push("scripts")
<script>
    var customDeps = ['app/test'];
</script>
@endpush