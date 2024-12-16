<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;
    protected $table = 'cat_ordenes';
    protected $fillable = [
        'orden',
        'descripcion',
        'precio_mx',
        'precio_dl',
        'cat_tipo_orden_id',
        'anio',
        'afiliado',
        'categoria',
        'estatus',
        'cat_excibiciones',
    ];
}
