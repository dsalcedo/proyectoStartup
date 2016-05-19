@extends('website.app')
@section('title', $titulo)

@section('content')
    <div class="jumbotron cover-main">
        <div class="mask-cover"></div>
        <div class="container text-center">
            <span class="col-md-12 cover-main-text">
               ¡Descubre mil y un lugares para vivir!
            </span>
        </div>
    </div>
    <div class="container text-center bottom-space ventajas">
        <h2 class="bottom-space">Mira algunas de las ventajas de usar PROYECTO_NOMBRE</h2>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{URL::asset('assets/images/website/room-decorations.jpg')}}" alt="...">
                <div class="caption">
                    <h3>Es tu casa y tus propias reglas</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{URL::asset('assets/images/website/work-school.png')}}" alt="...">
                <div class="caption">
                    <h3>Vive más cerca del trabajo o de la escuela</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{URL::asset('assets/images/website/payment.jpeg')}}" alt="...">
                <div class="caption">
                    <h3>Paga tu renta a tiempo y de diferentes maneras</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bottom-space">
        <div class="row">
            <div id="mapa" class="mapa"></div>
        </div>
    </div>
    <div class="container bottom-space">
        <div class="col-md-12 text-center">
            <h2>¿OFRECES UN DEPA, UNA CASA O UNA HABITACIÓN?</h2>
            <a href="{{route('website.socios')}}" class="btn btn-lg-custom btn-round-link btn-marketing">
                ¡ANÚNCIATE, ES GRATIS!
            </a>
            </br>
            <!--<a href="#" class="block-text" data-toggle="modal" data-target="#myModal">YA TENGO UNA CUENTA</a>-->
        </div>
    </div>

@endsection

@push("scripts")
    <script>
        var customDeps = ['assets/website/websiteIndex.js'];
    </script>
@endpush