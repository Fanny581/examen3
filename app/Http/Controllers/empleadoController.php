<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleado;

class empleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado = empleado::all();
        return view('empleado.index')->with('empleado', $empleado);}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'nombres'=> 'required',
        'apellido'=> 'required',
          'cargo'=> 'required',
           'salario'=> 'required',
         'fechaingreso'=> 'required',
          'fechasalida'=> 'nullable',
          'motivosalida'=> 'nullable',
    ]);
    empleado::create($data);

    return redirect('/empleado')->with('success', 'empleado creado correctamente.');
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
    { $e = empleado::findOrFail($id);
        return view('empleado.update')->with('empleado', $empleado);
       
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
        $data = $request->validate([
            'nombres'=> 'required',
        'apellido'=> 'required',
          'cargo'=> 'required',
           'salario'=> 'required',
         'fechaingreso'=> 'required',
          'fechasalida'=> 'nullable',
          'motivosalida'=> 'nullable',
             ]);
             Producto::whereId($id)->update($data);
    
            return redirect('/empleado')->with('success', 'empleado modificado correctamente.');
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
        
        $empleado = empleado::findOrFail($id);
        $empleado->delete(); 
        return redirect('/empleado')->with('success', 'producto eliminado correctamente.');

        //
    }
}
