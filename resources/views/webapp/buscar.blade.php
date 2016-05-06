@extends('webapp.recursos.header')
@section('title', $titulo)

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 ">

        <div class="col-md-12">
            <h1 class="page-header">¡Vamos a crear un anuncio!</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="page-content">

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