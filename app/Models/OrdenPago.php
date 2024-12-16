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
}
