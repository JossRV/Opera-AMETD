<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excibicion extends Model
{
    use HasFactory;
    protected $table = 'cat_excibiciones';
    protected $fillable = [
        'excibicion',
        'descripcion',
        'estatus',
    ];
}
