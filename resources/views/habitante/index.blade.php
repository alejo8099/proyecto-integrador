@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-8 col-xs-12">
        @include('habitante.search')
    </div>
    <div class="col-md-2">
        <a href="habitante/create" class="pull-right">
            <button class="btn btn-success">Crear Habitante</button>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Tipo de Documento</th>
                    <th>Numero de identificacion</th>
                    <th>Telefono Fijo</th>
                    <th>Telefono Celular</th>
                    <th>Correo</th>
                    <th>Fecha de Registro</th>
                    <th>Estado</th>
                    <th>Tipo Habitante</th>
                    <th>bloque</th>
                    <th>Numero Apartamento</th>
                    <th width="180">Opciones</th>
                </thead>
                <tbody>
                    @foreach($habitantes as $hab)
                    <tr>
                        <td>{{ $hab->id }}</td>
                        <td>{{ $hab->nombre}}</td>
                        <td>{{ $hab->apellidos}}</td>
                        <td>{{ $hab->tipo_documento}}</td>
                        <td>{{ $hab->numero_identificacion}}</td>
                        <td>{{ $hab->telefono_fijo}}</td>
                        <td>{{ $hab->telefono_celular}}</td>
                        <td>{{ $hab->correo}}</td>
                        <td>{{ $hab->fecha_registro}}</td>
                        <td>{{ $hab->estado_vigencia}}</td>
                        <td>{{ $hab->tipo_habitante}}</td>
                        <td>{{ $hab->bloque}}</td>
                        <td>{{ $hab->Numero_apartamento}}</td>
                        <td>
                            <a href="{{URL::action('HabitantesController@edit',$habitante->id)}}"> <button class="btn btn-primary">Actualizar</button></a>

                            <a href="" data-target="#modal-delete-{{$habitante->id}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$habitantes->links()}}
</div>

@endsection