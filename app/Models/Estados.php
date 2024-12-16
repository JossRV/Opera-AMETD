<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    use HasFactory;
    protected $table = 'cat_estados';
    protected $fillable = [
        'estado',
        'abreviacion',
        'descripcion',
        'estatus',
    ];
    
    public function personas()
    {
        return $this->hasMany(Persona::class, 'cat_estados_id');
    }
}
