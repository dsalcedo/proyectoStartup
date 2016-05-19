@extends('webapp.recursos.header')
@section('title', $titulo)

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">¡Hola {{$usuario->nombre}}!</h1>
    </div>
@endsection

@push("scripts")
<script>
    var customDeps = ['app/test', 'app/mora'];
</script>
@endpush