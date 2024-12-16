<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefijo extends Model
{
    use HasFactory;
    protected $table = 'cat_prefijos';
    protected $fillable = [
        'prefijo',
        'descripcion',
        'estatus',
    ];

    public function personas()
    {
        return $this->hasMany(Persona::class, 'cat_prefijo_id');
    }
}
