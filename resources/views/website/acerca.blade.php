@extends('website.app')
@section('title', $titulo)

@section('content')
    HOLA ACERCA
@endsection

@push("scripts")
<script>
    var customDeps = ['app/test'];
</script>
@endpush