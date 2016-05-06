@extends('website.header')
@section('title', $titulo)

@section('content')
    <div class="jumbotron cover-main">
        <div class="mask-cover"></div>
        <div class="container text-center">
            <span class="col-md-12 cover-main-text">
                Descubre mil y un lugares para vivir
                <br>o<br>
                ¡Comparte depa con roomies increibles!
            </span>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div id="mapa" class="mapa"></div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12 text-center">
            <h2>¿OFRECES UN DEPA, UNA CASA O UNA HABITACIÓN?</h2>
            <a href="{{route('website.partners')}}" class="btn btn-lg-custom btn-round-link btn-marketing">
                ¡ANÚNCIATE, ES GRATIS!
            </a>
            </br>
            <a href="#" class="block-text" data-toggle="modal" data-target="#myModal">YA TENGO UNA CUENTA</a>
        </div>
    </div>
@endsection

@push("scripts")
    <script>
        var customDeps = ['app/websiteIndex.js'];
    </script>
@endpush