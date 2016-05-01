<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class UsuarioEmails extends Model
{
    protected $table    = 'usuario_emails';
    protected $fillable = [
        'id_usuario', 'email'
    ];

    /**
     * The roles that belong to the user.
     */
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuarios');
    }
}
