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
        $this->auth = auth();
        $this->req = $request;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $titulo  = "app dashboard";
        $usuario = $this->usuario;
        //dd($usuario);
        $args    = compact('titulo', 'usuario');
        return view('webapp.index', $args);
    }

    /**
     * @return mixed
     */
    public function desconectarme(){
        $this->auth->logout();
        return redirect('/');
    }

    /**
     * @return mixed
     */
    public function crearAnuncio()
    {
        $titulo  = "Crear anuncio";
        $usuario = $this->usuario;

        $args    = compact('titulo', 'usuario');
        return view('webapp.crear-anuncio', $args);
    }
    
    public function buscar(){
        $titulo  = "Buscar";
        $usuario = $this->usuario;

        $args    = compact('titulo', 'usuario');
        return view('webapp.buscar', $args);
    }

    public function busqueda(){
        $titulo  = "Buscar";
        $usuario = $this->usuario;

        $args    = compact('titulo', 'usuario');
        return view('webapp.buscar', $args);
    }
}
