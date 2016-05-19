@extends('webapp.recursos.header-busqueda')
@section('title', $titulo)

@section('content')
    <div class="container container-app">
        <div class="col-md-12">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis deleniti deserunt expedita hic, inventore mollitia quam sunt voluptatem. Alias aut dolor dolores expedita nesciunt, odio possimus quidem quo voluptas.
            </div>
            <div class="col-md-6">
                <div id="mapa" style="width: 100%;
                height: 100px;"></div>
            </div>
        </div>
    </div>
@endsection

@push("scripts")
<script>
    var customDeps = ['/assets/app/buscar.js'];
</script>
@endpush