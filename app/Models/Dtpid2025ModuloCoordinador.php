<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dtpid2025ModuloCoordinador extends Model
{
    use HasFactory;

    protected $table = 'dtpid2025_modulos_coordinadores';

    protected $fillable = [
        'modulo_id',
        'coordinador_id',
    ];
}
