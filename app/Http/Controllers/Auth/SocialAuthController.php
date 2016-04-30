<?php

namespace App\Http\Controllers\Auth;


use Laravel\Socialite\Contracts\Factory as Socialite;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

//Models
use App\Models\Usuarios;


class SocialAuthController extends Controller
{
    protected $redirectAfterLogout = '/';
    protected $loginPath = '/';

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
            return abort('404', 'No existe el proveedor que indicaste.');
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
        if($usuario = $this->socialite->with($proveedor)->user())
        {
            $coleccion = Usuarios::where(['id_social' => $usuario->getId(), 'red' => $proveedor])->first();

            if(!is_null($coleccion))
            {
                $coleccion->nombre        = $usuario->getName();
                $coleccion->avatar_imagen = $usuario->getAvatar();
                $coleccion->update();
            } else {
                $coleccion = Usuarios::create([
                    'nombre'    => $usuario->getName(),
                    'id_social' => $usuario->getId(),
                    'red'       => $proveedor,
                    'avatar_imagen' => $usuario->getAvatar()
                ]);
            }

            return self::authenticate($coleccion);

        }else{
            return abort('404', 'Solicitud no procesada');
        }
        // $user->token;
    }

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    static function authenticate($usuario)
    {
        $auth = Auth::loginUsingId($usuario->id, true);
        if ($auth) {
            // Authentication passed...
            return redirect()->route('app.index');
        }else{
            throw new Exception('Error logging in');
        }
    }
}
