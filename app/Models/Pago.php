<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $table = 'pagos';
    protected $fillable = [
        'monto',
        'referencia',
        'fecha_pago',
        'cat_metodo_pago_id',
        'cat_forma_pago_id',
        'persona_id',
        'factura',
        'estatus_pago',
        'comprobante',
        'formato',
    ];
}
