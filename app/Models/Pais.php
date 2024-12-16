<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'cat_pais';
    protected $fillable = [
        'pais',
        'descripcion',
        'codigo',
        'estatus',
    ];
}