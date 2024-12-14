<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dtpid2025ModuloVideo extends Model
{
    use HasFactory;

    protected $table = 'dtpid2025_modulos_videos';

    protected $fillable = [
        'video_id',
        'modulo_id',
    ];
}
