<?php

namespace App\Http\Controllers;

use App\apartamento;
use App\detalle_habitantes;
use Illuminate\Http\Request;
use App\Habitante;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\Variable;

class HabitantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitantes=Habitante::orderBy('id','DESC')->paginate(3);
        return view('habitante.index', compact('habitantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habitante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $habitante = new Habitante;
        $habitante->nombre = $request->get('nombre');
        $habitante->apellidos = $request->get('apellidos');
        $habitante->tipo_documento = $request->get('tipo_documento');
        $habitante->numero_identificacion = $request->get('numero_identificacion');
        $habitante->telefono_fijo = $request->get('telefono_fijo');
        $habitante->telefono_celular = $request->get('telefono_celular');
        $habitante->correo = $request->get('correo');
        $habitante->fecha_registro = $request->get('fecha_registro');
        $habitante->estado_vigencia = $request->get('estado_vigencia');
        $habitante->save();
        return Redirect::to('habitante');

        

        $dh=Habitante::select('id')
        ->where('numero_identificacion', '=', $request->get('documento'))->first();
        //->where('fecha_registro', '=', $request->get('fecha_registro'))->first();
        $hb= $dh;
        

        $ap= Apartamento::select('id')
        ->where('numero_apartamento', '=', $request->get('numero_apartamento'))->first();
        $apartamento= $ap;
        
       
        $detalle = new detalle_habitantes;
        $detalle->tipo_habitante = $request->get('tipo_habitante');
        $detalle->habitantes_id = $hb->id;
        $detalle->apartamento_id= $apartamento->id;
        $detalle->save();
        //return Redirect::to('detalle_habitantes');
        
       
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
