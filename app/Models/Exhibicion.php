<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibicion extends Model
{
    use HasFactory;
    protected $table = 'cat_exhibiciones';
    protected $fillable = [
        'exhibicion',
        'descripcion',
        'estatus',
    ];
}
