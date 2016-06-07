requirejs.config({
    baseUrl: '/assets/libs',
    paths: {
        jquery: 'jquery/jquery.min',
        bootstrap: 'bootstrap/bootstrap.min',
        dataTables: 'https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js',
        accounting: 'accounting/accounting.min'
    },
    shim: {
        'jquery': {
            exports: '$'
        },
        'bootstrap':{
            deps:['jquery']
        },
        'dataTables':{
            deps:['jquery']
        }
    }
});

if (window.location.hash == '#_=_'){
    history.replaceState
        ? history.replaceState(null, null, window.location.href.split('#')[0])
        : window.location.hash = '';
}

var basicDeps = ['jquery','bootstrap'];

requirejs(basicDeps, function() {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    requirejs(customDeps);
});
