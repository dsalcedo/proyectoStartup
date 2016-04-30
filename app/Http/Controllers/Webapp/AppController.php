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
        dd($this->usuario);
    }
}
