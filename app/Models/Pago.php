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

    public function recibo()
    {
        return $this->hasOne(Recibo::class, 'pagos_id');
    }
    public function ordenPago()
    {
        return $this->hasOne(OrdenPago::class, 'pago_id');
    }
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id');
    }
    public function metodoPago()
    {
        return $this->belongsTo(MetodoPago::class, 'cat_metodo_pago_id');
    }
    public function formaPago()
    {
        return $this->belongsTo(FormaPago::class, 'cat_forma_pago_id');
    }
}
