<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoNovedad extends Model
{
    use HasFactory;

    protected $table = 'tipo_novedad';
    protected $primaryKey = 'id_tipo_novedad';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_tipo_novedad',
        'nombre_tipo_novedad',
        'descripcion_tipo',
    ];
}
