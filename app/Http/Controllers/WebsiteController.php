<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebsiteController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $titulo = "Website title";
        $args   = compact('titulo');

        return view('website.index', $args);
    }

    public function socios(){
        $titulo = "Socios";
        $args   = compact('titulo');

        return view('website.socios', $args);
    }

    public function acerca()
    {
        $titulo = "Acerca";
        $args   = compact('titulo');

        return view('website.acerca', $args);
    }

    public function terminosCondiciones()
    {
        $titulo = "Términos y condiciones del servicio";
        $args   = compact('titulo');

        return view('website.tos', $args);
    }
}
