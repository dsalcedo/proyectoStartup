define(function () {

    var mapa = document.getElementById('mapa'),
        mapaOSM = L.map( mapa, {
                    center: [18.927224, -99.2226925],
                    zoom: 8
                });

        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
            maxZoom: 18
        }).addTo(mapaOSM);

        var markers = L.markerClusterGroup({ spiderfyOnMaxZoom: false, showCoverageOnHover: false, zoomToBoundsOnClick: true });


        var ab = L.marker([18.921224, -99.2226925]);
        var abab = L.marker([18.925324, -99.2226925]);
        var abcabc = L.marker([18.929424, -99.2226925]);

        markers.addLayer(ab);
        markers.addLayer(abab);
        markers.addLayer(abcabc);

        mapaOSM.addLayer(markers);

});