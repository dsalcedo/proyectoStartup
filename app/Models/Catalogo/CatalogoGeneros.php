<?php

namespace App\Models\Catalogo;

use Illuminate\Database\Eloquent\Model;

class CatalogoGeneros extends Model
{
    protected $table = 'catalogo_generos';
    protected $fillable = [
        'titulo','clave'
    ];
}
