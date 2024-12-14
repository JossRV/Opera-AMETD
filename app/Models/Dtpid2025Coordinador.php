<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dtpid2025Coordinador extends Model
{
    use HasFactory;

    protected $table = 'dtpid2025_coordinador';

    protected $fillable = [
        'prefijo',
        'nombre',
        'url'
    ];


    public function modulos()
    {
        return $this->belongsToMany(Dtpid2025Modulo::class, 'dtpid2025_modulos_coordinadores','coordinador_id','modulo_id');
    }
}
