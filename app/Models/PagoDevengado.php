<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoDevengado extends Model
{
    use HasFactory;

    protected $table = 'pago_devengado';
    protected $primaryKey = 'id_pago_devengado';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_pago_devengado',
        'nro_documento_empleado',
        'tipo_pago',
        'monto',
        'fecha_pago',
    ];
}
