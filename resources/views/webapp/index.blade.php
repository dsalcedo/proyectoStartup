@extends('webapp.recursos.header')
@section('title', $titulo)

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Dashboard</h1>
    </div>
@endsection

@push("scripts")
<script>
    var customDeps = ['app/test'];
</script>
@endpush