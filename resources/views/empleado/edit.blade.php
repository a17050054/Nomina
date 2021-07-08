@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <a href="{{ route('empleado.index') }}">Volver</a>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('empleado.update', $empleado->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">Editar Empleado</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="codigo">Código*</label>
                            <input type="text" class="form-control" name="codigo" id="codigo"
                                value="{{ $empleado->codigo }}" required>
                            <label for="nombre">Nombre*</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"
                                value="{{ $empleado->nombre }}" required>
                            <label for="apellido_paterno">Apellido Paterno*</label>
                            <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno"
                                value="{{ $empleado->apellido_paterno }}" required>
                            <label for="apellido_materno">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellido_materno" id="apellido_materno"
                                value="{{ $empleado->apellido_materno }}">
                            <label for="correo_electronico">Correo Electrónico*</label>
                            <input type="email" class="form-control" name="correo_electronico" id="correo_electronico"
                                value="{{ $empleado->correo_electronico }}" required>
                            <label for="tipo_contrado">Tipo de Contrato*</label>
                            <select class="form-control" name="tipo_contrato" id="tipo_contrato" required>
                                <option value="">Seleccione un Tipo de contrato</option>
                                <option value="BASE">Base</option>
                                <option value="Temporal">Temporal</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-header">
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
