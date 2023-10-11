<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class msvendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('rol', 'ASC')->where('rol', '=', 'Vendedor')->get();
        return view('vende.msvendedor', ['user'=>$user]);
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
        return view('vende.edit',['user'=>$user]);
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
            'email'=>$request['CORREO']
        ]);
        return redirect()->route('msvendedor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('msvendedor');
    }
}
