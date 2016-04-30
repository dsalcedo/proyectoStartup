<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebsiteController extends Controller
{
    /**
     * @return mixed
     */
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
}
