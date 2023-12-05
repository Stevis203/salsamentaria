<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class msadministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('rol', 'ASC')->where('rol', '=', 'Administrador')->get();
        return view('administra.msadministrador', ['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.administrador');
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
        $user = User::findOrFail($id);
        return view('administra.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::findOrFail($id);
        $user->update([
                
            'name'=>$request['NOMBRE'],
            'apellido'=>$request['APELLIDO'],
            'documento'=>$request['DOCUMENTO'],
            'telefono'=>$request['TELEFONO'],
            'direccion'=>$request['DIRECCION'],
            'email'=>$request['CORREO'],
            'estado'=>$request['ESTADO']
        ]);
        return redirect()->route('msadministrador');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('msadministrador');
    }
}
