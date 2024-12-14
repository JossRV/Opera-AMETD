<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dtpid2025Ponente extends Model
{
    use HasFactory;

    protected $table = 'dtpid2025_ponente';

    protected $fillable = [
        'prefijo',
        'nombre',
        'url'
    ];

    public function videos()
    {
        return $this->belongsToMany(Dtpid2025Video::class, 'dtpid2025_videos_ponentes','ponente_id','video_id');
    }


}
