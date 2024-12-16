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

    public function ordenPago()
    {
        return $this->hasOne(OrdenPago::class, 'cat_ordenes_id');
    }
    public function tipoOrden()
    {
        return $this->belongsTo(TipoOrden::class, 'cat_tipo_orden_id');
    }
    public function exhibicion()
    {
        return $this->belongsTo(Exhibicion::class, 'cat_excibiciones');
    }
}
