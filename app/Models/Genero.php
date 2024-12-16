<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    protected $table = 'cat_generos';
    protected $fillable = [
        'genero',
        'descripcion',
        'estatus',
    ];

    public function personas()
    {
        return $this->hasMany(Persona::class, 'cat_genero_id');
    }
}
