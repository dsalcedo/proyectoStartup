requirejs.config({
    baseUrl: 'assets/libs',
    paths: {
        jquery: 'jquery/jquery.min',
        bootstrap: 'bootstrap/bootstrap.min',
        leaflet: "leaflet/leaflet-src",
        leafletCluster: "leaflet/marker-cluster/leaflet.markercluster-src",
        dataTables: 'https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js'
    },
    shim: {
        'jquery': {
            exports: '$'
        },
        'bootstrap':{
            deps:['jquery']
        },
        leaflet: {
            exports: 'L'
        },
        leafletCluster:{
            exports : 'L',
            deps : ['leaflet']
        },
        dataTables:{
            deps:['jquery']
        }
    }
});

if (window.location.hash == '#_=_'){
    history.replaceState
        ? history.replaceState(null, null, window.location.href.split('#')[0])
        : window.location.hash = '';
}

//var basicDeps = ['jquery','bootstrap','leaflet'];
var basicDeps = ['jquery','bootstrap','leaflet', 'leafletCluster'];
//var all = basicDeps.concat(customDeps);
requirejs(basicDeps, function() {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    requirejs(customDeps);
});
