requirejs.config({
    baseUrl: 'assets/libs',
    paths: {
        jquery: 'jquery/jquery.min',
        bootstrap: 'bootstrap/bootstrap.min',
        leaflet: "leaflet/leaflet-src"
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
        }
    }
});


var basicDeps = ['jquery','bootstrap','leaflet'];
//var all = basicDeps.concat(customDeps);
requirejs(basicDeps, function() {
    requirejs(customDeps);
});
