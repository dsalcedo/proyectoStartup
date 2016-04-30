@extends('website.header')
@section('title', $titulo)

    @section('content')
        HOLA MUNDO
    @endsection

@push("scripts")
<script>
    var customDeps = ['app/test'];
</script>
@endpush