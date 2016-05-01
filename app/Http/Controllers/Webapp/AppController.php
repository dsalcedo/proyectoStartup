<?php

namespace App\Http\Controllers\Webapp;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    function __construct(Request $request)
    {
        $this->usuario = auth()->user();
        $this->req = $request;
    }

    public function index()
    {
        $titulo  = "app dashboard";
        $usuario = $this->usuario;
        //dd($usuario);
        $args    = compact('titulo', 'usuario');
        return view('webapp.index', $args);
    }
}
