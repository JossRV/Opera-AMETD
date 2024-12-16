<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    use HasFactory;
    protected $table = 'recibos';
    protected $fillable = [
        'numero',
        'folio',
        'persona_id',
        'pagos_id',
        'estatus',
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id');
    }
    public function pago()
    {
        return $this->belongsTo(Pago::class, 'pagos_id');
    }
}
