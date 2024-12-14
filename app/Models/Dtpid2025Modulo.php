<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dtpid2025Modulo extends Model
{
    use HasFactory;

    protected $table = 'dtpid2025_modulos';

    protected $fillable = [
        'nombre'
    ];

    public function videos()
    {
        return $this->belongsToMany(Dtpid2025Video::class, 'dtpid2025_modulos_videos','modulo_id','video_id');
    }

    public function coordinadores()
    {
        return $this->belongsToMany(Dtpid2025Coordinador::class, 'dtpid2025_modulos_coordinadores','modulo_id','coordinador_id');
    }
}
