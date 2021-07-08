<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    /**
     * Atributos asignados masivamente.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'nombre', 'apellido_paterno', 
        'apellido_materno', 'correo_electronico',
        'tipo_contrato', 'estado'
    ];

    public $timestamps = false;
}
