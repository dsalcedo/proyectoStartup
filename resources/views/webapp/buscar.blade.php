@extends('webapp.recursos.header-busqueda')
@section('title', $titulo)

@section('content')
    <div class="container-fluid container-busqueda">
        <div class="col-md-6">
            <div class="row-full">
                <div class="col-md-12">
                    <div class="row">
                        <div class="jumbotron card">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Buscar</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-12 card card-pad">
                    <h4>Nombre propiedad</h4>
                </div>

        </div>
        <div class="col-md-offset-6 col-md-6 full-height">
                <div id="mapa" class="hide-mobile app-mapa"></div>
        </div>
    </div>
@endsection

@push("scripts")
<script>
    var customDeps = ['/assets/app/buscar.js'];
</script>
@endpush