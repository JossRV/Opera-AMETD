<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;
    protected $table = 'cat_especialidades';
    protected $fillable = [
        'especialidad',
        'descripcion',
        'estatus',
    ];

    public function personas()
    {
        return $this->hasMany(Persona::class, 'cat_especialidad_id');
    }
}
