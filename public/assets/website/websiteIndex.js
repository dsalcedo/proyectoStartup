define(function () {

    var mapa = document.getElementById('mapa');
        map  = new google.maps.Map(document.getElementById('mapa'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8,
            scrollwheel: false
        });

});