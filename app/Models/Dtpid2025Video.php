<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dtpid2025Video extends Model
{
    use HasFactory;

    protected $table = 'dtpid2025_video';

    protected $fillable = [
        'nombre',
        'enlace',
        'miniatura',
        'visualizaciones',
        'likes',
        'tipo_id'

    ];

    public function ponentes()
    {
        return $this->belongsToMany(Dtpid2025Ponente::class, 'dtpid2025_videos_ponentes','video_id','ponente_id');
    }

    public function modulos()
    {
        return $this->belongsToMany(Dtpid2025Modulo::class, 'dtpid2025_modulos_videos','video_id','modulo_id');
    }

    public function personas()
    {
        return $this->belongsToMany(Dtpid2025PersonaVideo::class, 'dtpid2025_videos_personas','video_id' ,'persona_id');
    }


}
