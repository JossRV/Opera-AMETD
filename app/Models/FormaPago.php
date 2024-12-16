<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    use HasFactory;
    protected $table = 'cat_forma_pagos';
    protected $fillable = [
        'forma',
        'descripcion',
        'estatus',
    ];

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'cat_forma_pago_id');
    }
}
