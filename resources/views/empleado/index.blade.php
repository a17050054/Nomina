@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <a href="{{ route('empleado.create') }}" class="btn btn-success">Agregar empleado</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Correo Electrónico</th>
                            <th>Tipo de Contrato</th>
                            <th>Estado</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->id }}</td>
                                <td>{{ $empleado->codigo }}</td>
                                <td>{{ $empleado->nombre }} {{ $empleado->apellido_paterno }} {{ $empleado->apellido_materno }} </td>
                                <td>{{ $empleado->correo_electronico }}</td>
                                <td>{{ $empleado->tipo_contrato }}</td>
                                <td>@if ($empleado->estado == 1)
                                        Activo
                                    @else
                                        Inactivo
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('empleado.edit', $empleado) }}" class="btn btn-info">Editar</a>
                                    <form action="{{ route('empleado.destroy', $empleado) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
