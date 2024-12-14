<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dtpid2025PersonaVideo extends Model
{
    use HasFactory;

    protected $table = 'dtpid2025_personas_videos';

    protected $fillable = [
        'persona_id',
        'video_id',
        'donde_se_quedo',
        'estatus_like'
    ];
}
