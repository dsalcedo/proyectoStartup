@extends('webapp.recursos.header-busqueda')
@section('title', $titulo)

@section('content')
    <div class="container-fluid container-busqueda">

        <div class="col-md-6">
           <!-- <div class="row-full">-->
                <div class="row row-hack">
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
            <!--</div>-->

            <div class="row row-hack">
<!-- tarjetas -->
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail card card-margin">
                        <img data-src="holder.js/100%x200" alt="100%x200" style="height: 200px; width: 100%; display: block;" src="http://imganuncios.mitula.net/busco_roomie_para_casa_grande_6470107460494125142.jpg" data-holder-rendered="true">
                        <div class="caption">
                            <div class="profile-image">
                                <img src="https://graph.facebook.com/v2.5/10201489415234073/picture?type=normal" class="image">
                            </div>
                            <h3 class="precio">$1,500/mes</h3>
                            <p class="direccion">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> Ignacio allende, cuernavaca morelos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail card card-margin">
                        <img data-src="holder.js/100%x200" alt="100%x200" style="height: 200px; width: 100%; display: block;" src="http://img.segundamano.mx/images/25/2526784539.jpg" data-holder-rendered="true">
                        <div class="caption">
                            <div class="profile-image">
                                <img src="https://graph.facebook.com/v2.5/10201489415234073/picture?type=normal" class="image">
                            </div>
                            <h3 class="precio">$1,500/mes</h3>
                            <p class="direccion">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> Ignacio allende, cuernavaca morelos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail card card-margin">
                        <img data-src="holder.js/100%x200" alt="100%x200" style="height: 200px; width: 100%; display: block;" src="http://imganuncios.mitula.net/roomies_casa_grande_amueblada_versalles_cumbres_san_agustin_excelente_precio_8110128420080491037.jpg" data-holder-rendered="true">
                        <div class="caption">
                            <div class="profile-image">
                                <img src="https://graph.facebook.com/v2.5/10201489415234073/picture?type=normal" class="image">
                            </div>
                            <h3 class="precio">$1,500/mes</h3>
                            <p class="direccion">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> Ignacio allende, cuernavaca morelos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail card card-margin">
                        <img data-src="holder.js/100%x200" alt="100%x200" style="height: 200px; width: 100%; display: block;" src="https://c8.staticflickr.com/2/1652/24423488935_624df12500_z.jpg" data-holder-rendered="true">
                        <div class="caption">
                            <div class="profile-image">
                                <img src="https://graph.facebook.com/v2.5/10201489415234073/picture?type=normal" class="image">
                            </div>
                            <h3 class="precio">$1,500/mes</h3>
                            <p class="direccion">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> Ignacio allende, cuernavaca morelos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail card card-margin">
                        <img data-src="holder.js/100%x200" alt="100%x200" style="height: 200px; width: 100%; display: block;" src="https://s-media-cache-ak0.pinimg.com/736x/83/c6/bc/83c6bcc2981c5145965de0f2c1a395af.jpg" data-holder-rendered="true">
                        <div class="caption">
                            <div class="profile-image">
                                <img src="https://graph.facebook.com/v2.5/10201489415234073/picture?type=normal" class="image">
                            </div>
                            <h3 class="precio">$1,500/mes</h3>
                            <p class="direccion">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> Ignacio allende, cuernavaca morelos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail card card-margin">
                        <img data-src="holder.js/100%x200" alt="100%x200" style="height: 200px; width: 100%; display: block;" src="http://cdn.myfancyhouse.com/wp-content/uploads/2012/11/Apartment-Renovation-in-Manhattan-by-Suzanne-Lovell-1.jpg" data-holder-rendered="true">
                        <div class="caption">
                            <div class="profile-image">
                                <img src="https://graph.facebook.com/v2.5/10201489415234073/picture?type=normal" class="image">
                            </div>
                            <h3 class="precio">$1,500/mes</h3>
                            <p class="direccion">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> Ignacio allende, cuernavaca morelos.
                            </p>
                        </div>
                    </div>
                </div>
<!-- terminan tarjetas -->
            </div>
        </div>

        <!-- mapa -->
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