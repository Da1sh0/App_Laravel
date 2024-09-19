<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaturalezaJuridica extends Model
{
    use HasFactory;

    protected $table = 'naturaleza_juridica';
    protected $primaryKey = 'id_naturaleza_juridica';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_naturaleza_juridica',
        'nombre_naturaleza_juridica',
    ];
}
