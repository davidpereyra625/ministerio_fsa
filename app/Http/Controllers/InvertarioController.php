<?php

namespace App\Http\Controllers;

use App\Models\Invertario;
use Illuminate\Http\Request;

class InvertarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventarios = Invertario::all(); //nos trae todos los datos de la tabla inventario
        return view('inventario.index')->with('inventarios', $inventarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // para crear y obtener los datos tenemos que ir al store, no te olvides
        return view('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $inventarios = new Invertario();

        $inventarios->codigo = $request->get('codigo');
        $inventarios->descripcion = $request->get('descripcion');
        $inventarios->cantidad = $request->get('cantidad');
        $inventarios->precio = $request->get('precio');

        $inventarios->save();

        return redirect('/invertario');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invertario $invertario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        //aca necesitamos traer solo 1 y despues tenemos que ir al metodo update para actualizar los cambios
        $hola = Invertario::find($id);
        return view('inventario.edit')->with('hola', $hola);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $holas = Invertario::find($id);

        $holas->codigo = $request->get('codigo');
        $holas->descripcion = $request->get('descripcion');
        $holas->cantidad = $request->get('cantidad');
        $holas->precio = $request->get('precio');

        $holas->save();

        return redirect('/invertario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invertario $invertario)
    {
        //
    }
}
