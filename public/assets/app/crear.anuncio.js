define(function () {
    var geocoder   = new google.maps.Geocoder(),
        infowindow = new google.maps.InfoWindow(),
        mapa       = document.getElementById('mapa'),
        marker;

        map  = new google.maps.Map( mapa, {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });

    $(document).on('click', '#ubicar-direccion', function(e){
        var direccion =  $('input[name=direccion]').val();

        if(direccion!=''){
            geocoder.geocode({'address': direccion }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    map.setZoom(18);

                    if (marker){
                        marker.setPosition(results[0].geometry.location);
                    }else{
                        marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location,
                            draggable: true,
                            animation: google.maps.Animation.DROP
                        });

                        marker.addListener('dragend',function(event) {

                            console.log(
                                event.latLng.lat(),
                                event.latLng.lng()

                            )
                        });
                    }
                    console.log(results[0].geometry.location);
                    infowindow.setContent('¡Puedes moverme!');
                    infowindow.open(map,marker);

                }else{
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }
        
        e.preventDefault();
    });



});