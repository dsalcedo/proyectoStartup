<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebsiteController extends Controller
{
    public function index(){
        $titulo = "Website title";
        $args   = compact('titulo');

        return view('website.index', $args);
    }

    public function partners(){
        $titulo = "Partners";
        $args   = compact('titulo');

        return view('website.partners', $args);
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
