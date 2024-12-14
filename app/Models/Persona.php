<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $fillable = [
        'nombre',
        'paterno',
        'materno',
        'telefono',
        'fecha_nac',
        'afiliado',
        'estatus',
        'cat_prefijo_id',
        'cat_genero_id',
        'cat_pais_id',
        'cat_categoria_id',
        'cat_estados_id',
    ];
}
