@extends('webapp.recursos.header-busqueda')
@section('title', $titulo)

@section('content')
    <div class="col-md-6">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, aut beatae culpa delectus, dolor dolorem doloremque expedita facilis ipsa ipsam libero maiores maxime pariatur quas, qui reiciendis saepe sequi voluptas?
    </div>
    <div class="col-md-6">right</div>
@endsection

@push("scripts")
<script>
    var customDeps = ['app/test'];
</script>
@endpush