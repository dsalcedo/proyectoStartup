@extends('website.header')
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
    <div class="container text-center">
        <h2 class="bottom-space">Mira algunas de las ventajas de usar PROYECTO_NOMBRE</h2>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="http://www.darlinganddaisy.com/wp-content/uploads/2015/11/dorm-room-christmas-decorations.jpg" alt="...">
                <div class="caption">
                    <h3>Es tu casa y tus propias reglas</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="http://www.foreignstudents.com/sites/default/files/imagecache/blog_515/work_vs_school_blog.png" alt="...">
                <div class="caption">
                    <h3>Vive más cerca del trabajo o de la escuela</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="http://www.liveatsugarrun.com/img/cache/uploads/811861585866c8b41b1c4c5c4698d455.jpeg" alt="...">
                <div class="caption">
                    <h3>Paga tu renta de diferentes maneras y a tiempo</h3>
                </div>
            </div>
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
            <!--<a href="#" class="block-text" data-toggle="modal" data-target="#myModal">YA TENGO UNA CUENTA</a>-->
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Place sticky footer content here.</p>
        </div>
    </footer>

@endsection

@push("scripts")
    <script>
        var customDeps = ['app/websiteIndex.js'];
    </script>
@endpush