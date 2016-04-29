define(function () {
    var mapa = document.getElementById('mapa');
    var map = L.map(mapa, {
        center: [51.505, -0.09],
        zoom: 13,
    });
    console.log(map)
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png?{foo}', {
        foo: 'bar',
        noWrap: true,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18
    }).addTo(map);
    L.noConflict();
});

