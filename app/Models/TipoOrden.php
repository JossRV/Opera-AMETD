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

    public function ordenPago()
    {
        return $this->hasMany(OrdenPago::class, 'cat_tipo_orden');
    }
    public function ordenes()
    {
        return $this->hasMany(Orden::class, 'cat_tipo_orden_id');
    }
}
