requirejs.config({
    baseUrl: 'assets/libs',
    paths: {
        jquery: 'jquery/jquery.min',
        bootstrap: 'bootstrap/bootstrap.min'
    },
    shim: {
        'jquery': {
            exports: '$'
        },
        'bootstrap':{
            deps:['jquery']
        }
    }
});


var basicDeps = ['jquery','bootstrap'];
//var all = basicDeps.concat(customDeps);
requirejs(basicDeps, function( $ ) {
    requirejs(customDeps);
});
