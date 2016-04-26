<?php

namespace App\Http\Controllers\Auth;


use Laravel\Socialite\Contracts\Factory as Socialite;
//use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class SocialAuthController extends Controller
{
    public function __construct(Socialite $socialite){
        $this->socialite = $socialite;
    }
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function proveedor($proveedor = null)
    {
        if(!config("services.$proveedor")){
            return abort('404', 'BAD');
        }

        return $this->socialite->with($proveedor)->redirect();

    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function callbackProveedor($proveedor = null)
    {
        if($user = $this->socialite->with($proveedor)->user()){
            dd($user);
        }else{
            return 'something went wrong';
        }
        // $user->token;
    }

    public function proveedorFB(){
        dd(1);
    }
}
