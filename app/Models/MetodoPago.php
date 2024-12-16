<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    use HasFactory;
    protected $table = 'cat_metodo_pagos';
    protected $fillable = [
        'metodo',
        'descripcion',
        'estatus',
    ];
}
