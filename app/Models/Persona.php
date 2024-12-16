<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $fillable = [
        'nombre',
        'paterno',
        'materno',
        'telefono',
        'fecha_nac',
        'afiliado',
        'estatus',
        'cat_prefijo_id',
        'cat_genero_id',
        'cat_pais_id',
        'cat_especialidad_id',
        'cat_estados_id',
    ];

    public function persona()
    {
        return $this->hasOne(User::class, 'persona_id');
    }
    public function prefijo()
    {
        return $this->belongsTo(Prefijo::class, 'cat_prefijo_id');
    }
    public function genero()
    {
        return $this->belongsTo(Genero::class, 'cat_genero_id');
    }
    public function pais()
    {
        return $this->belongsTo(Pais::class, 'cat_pais_id');
    }
    public function categoria()
    {
        return $this->belongsTo(Especialidad::class, 'cat_especialidad_id');
    }
    public function estado()
    {
        return $this->belongsTo(Estados::class, 'cat_estados_id');
    }
}
