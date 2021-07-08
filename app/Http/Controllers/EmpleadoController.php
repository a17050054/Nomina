<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $empleados = Empleado::where('estado', 1)->get();
        return view('empleado.index', compact('empleados'));
    }

    public function show(Empleado $empleado)
    {
        return view('empleado.show', compact('empleado'));
    }

    public function create()
    {
        return view('empleado.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'codigo' => 'required|unique:empleados',
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'correo_electronico' => 'required|email',
            'tipo_contrato' => 'required'
        ];
        $request->validate($rules);
        $empleado = new Empleado();
        $empleado->codigo = $request->codigo;
        $empleado->nombre = $request->nombre;
        $empleado->apellido_paterno = $request->apellido_paterno;
        $empleado->apellido_materno = $request->apellido_materno;
        $empleado->correo_electronico = $request->correo_electronico;
        $empleado->tipo_contrato = $request->tipo_contrato;
        $empleado->save();
        return redirect()->route('empleado.index');
    }

    public function edit(Empleado $empleado)
    {
        return view('empleado.edit', compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado)
    {
        $rules = [
            'codigo' => 'required|unique:empleados',
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'correo_electronico' => 'required|email',
            'tipo_contrato' => 'required'
        ];
        $request->validate($rules);
        
        $empleado->codigo = $request->codigo;
        $empleado->nombre = $request->nombre;
        $empleado->apellido_paterno = $request->apellido_paterno;
        $empleado->apellido_materno = $request->apellido_materno;
        $empleado->correo_electronico = $request->correo_electronico;
        $empleado->tipo_contrato = $request->tipo_contrato;
        $empleado->save();
        return redirect()->route('empleado.index');
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->estado = 0;
        $empleado->save();
        return redirect()->route('empleado.index');
    }
}
