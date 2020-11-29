<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitante extends Model
{
   
    protected $fillable = [
        'nombre', 
        'apellidos',
        'tipo_documento', 
        'numero_identificacion', 
        'telefono',
        'correo',
        'fecha_registro'
    ];
    public $timestamps = false;

    //Relacion con la tabla detalle_habitante

    public function detalle_habitantes()
    {
        return $this->belongsTo('App\detalle_habitantes');
    }

}

