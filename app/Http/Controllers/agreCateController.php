<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\producto;

class agreCateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
          
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('agregar.agrecate');
  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'codigoCategoria' => 'required|exists:categoria,codigoCategoria',
            'nombre' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'tipoProducto' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string',
        ]);

        $agreCate = agreCate::create([
            'codigoCategoria' => $validateData['codigoCategoria'],
            'nombre' => $validateData['nombre'],
            'marca' => $validateData['marca'],
            'tipoProducto' => $validateData['tipoProducto'],
            'estado' => $validateData['estado'],
            'precio' => $validateData['precio'],
            'descripcion' => $validateData['descripcion'],
        ]);

        return redirect()->route('administrador');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
