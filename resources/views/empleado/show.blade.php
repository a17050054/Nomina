@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <a href="{{ route('empleado.index') }}"></a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <label for="">Código</label>
            <input type="text" class="form-control" value="{{ $empleado->codigo }}" readonly>
            <label for="">Nombre</label>
            <input type="text" class="form-control" value="{{ $empleado->nombre }} {{ $empleado->apellido_paterno }} {{ $empleado->apellido_materno }}" readonly>
            <label for="">Correo Electrónico</label>
            <input type="text" class="form-control" value="{{ $empleado->correo_electronico }}" readonly>
        </div>
    </div>
@endsection