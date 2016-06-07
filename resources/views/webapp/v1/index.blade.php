@extends('webapp.v1.app')
@section('title', $titulo)

@section("css")
@endsection

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">¡Hola {{$usuario->nombre}}!</h1>
    </div>
@endsection

@section("js")
@endsection