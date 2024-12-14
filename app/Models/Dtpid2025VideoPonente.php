<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dtpid2025VideoPonente extends Model
{
    use HasFactory;

    protected $table = 'dtpid2025_videos_ponentes';

    protected $fillable = [
        'video_id',
        'ponente_id',
    ];


    
}
