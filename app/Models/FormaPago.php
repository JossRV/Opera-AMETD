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
}
