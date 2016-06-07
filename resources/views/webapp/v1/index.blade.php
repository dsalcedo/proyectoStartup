@extends('webapp.v1.app')
@section('title', $titulo)

@section("css")
@endsection

@section('content')


            <div id="sidebar" class="col-sm-3 col-md-2 sidebar" >
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">Export</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="">Nav item</a></li>
                    <li><a href="">Nav item again</a></li>
                    <li><a href="">One more nav</a></li>
                    <li><a href="">Another nav item</a></li>
                    <li><a href="">More navigation</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="">Nav item again</a></li>
                    <li><a href="">One more nav</a></li>
                    <li><a href="">Another nav item</a></li>
                </ul>
            </div>

            <div id="app-container" class="app-content col-sm-9 col-md-12">
                <h1 class="page-header">¡Hola {{$usuario->nombre}}!</h1>
            </div>



@endsection

@section("js")
@endsection