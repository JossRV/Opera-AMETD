<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoOrden extends Model
{
    use HasFactory;
    protected $table = 'cat_tipo_ordenes';
    protected $fillable = [
        'tipo',
        'descripcion',
        'estatus',
    ];
}
