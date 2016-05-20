define(function () {
    var geocoder = new google.maps.Geocoder();
    var mapa = document.getElementById('mapa');
    map  = new google.maps.Map( mapa, {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    });

    
    $(document).on('click', '#ubicar-direccion', function(e){
        e.preventDefault();

        geocoder.geocode({'address': $('input[name=direccion]').val()}, function(results, status) {
            console.log(results)
            if (status === google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                map.setZoom(18);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });


    })
});