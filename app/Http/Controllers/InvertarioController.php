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
        $inventario = Invertario::all(); //nos trae todos los datos de la tabla inventario
        return view('inventario.index')->with('inventario', $inventario);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Invertario $invertario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invertario $invertario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invertario $invertario)
    {
        //
    }
}
