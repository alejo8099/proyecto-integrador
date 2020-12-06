<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [

            'nombre' => 'required|alpha|max:45',
            'apellidos' => 'required|string|max:45',
            'numero_identificacion' => 'numeric|required|max:10|unique:empleados',
            'direccion' => 'required|max:45',
            'telefono' => 'required|numeric|max:10|',
            'correo' => 'required|max:10|email|unique:empleados',
            'cargo' => 'required|string|max:45',
            'dotacion' => 'required|string|max:45',
            'fecha_registro' => 'required',
        ];

     
    }
    public function messages()
    {
        return [

            'nombre.required' => 'Debe escribir el nombre del empleado',
            'nombre.alpha' => 'El campo nombre debe tener solo letras',
            'apellidos.required' => 'Debe digitar  los apellidos del empleado',
            'numero_identificacion.required' => 'Debe digitar el numero de cedula del empleado',
            'numero_identificacion.unique' => 'El numero de identificación ya se encuentra registrado en el sistema',
            'direccion.required' => 'Debe digitar el campo con la dirección del empleado',
            'telefono.required' => 'Debe digitar el campo con el telefono del empleado',
            'correo.required' => 'Debe digitar el correo electronico del empleado',
            'correo.unique' => 'El correo electronico ya se encuentra registrado en el sistema',
            'cargo.required' => 'Debe digitar el cargo del empleado',
            'dotacion.required' => 'Debe digitar la informacion de dotación del empleado',
            'fecha_registro.required' => 'Debe digitar la fecha del registro',
            
        ];
    }
}
