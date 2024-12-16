<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenPago extends Model
{
    use HasFactory;
    protected $table = 'orden_pagos';
    protected $fillable = [
        'pago_id',
        'cat_ordenes_id',
        'cat_tipo_orden',
    ];

    public function pago()
    {
        return $this->belongsTo(Pago::class, 'pago_id');
    }
    public function orden()
    {
        return $this->belongsTo(Orden::class, 'cat_ordenes_id');
    }
    public function tipoOrden()
    {
        return $this->belongsTo(TipoOrden::class, 'cat_tipo_orden');
    }
}
