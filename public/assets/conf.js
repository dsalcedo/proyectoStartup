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

if (window.location.hash == '#_=_'){
    history.replaceState
        ? history.replaceState(null, null, window.location.href.split('#')[0])
        : window.location.hash = '';
}

var basicDeps = ['jquery','bootstrap','leaflet'];
//var all = basicDeps.concat(customDeps);
requirejs(basicDeps, function() {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    requirejs(customDeps);
});
