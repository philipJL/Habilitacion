<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente'; // Nombre de la tabla en la base de datos

    protected $primaryKey='idCliente';
    // Si la clave primaria no es 'id', especifícala aquí
    // protected $primaryKey = 'id_empleado';

    // Definir campos fillable o guardados
    protected $fillable = [
        'idCliente',
        'nom_empresa',
        'per_contacto',
        'direccion',
        'telefono',
        // Otros campos de la tabla
    ];
    public $timestamps = false;

}
