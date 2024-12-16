<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'cat_categorias';
    protected $fillable = [
        'categoria',
        'descripcion',
        'estatus',
    ];
}