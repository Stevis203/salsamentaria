<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class agreUsController extends Controller
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
        return view('agregar.agreus');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|string|max:225',
            'apellido' => 'required|string|max:225',
            'documento' => 'required|string|max:225',
            'telefono' => 'required|string|max:225',
            'direccion' => 'required|string|max:225',
            'password' => 'required|string|min:8',
            'rol' => 'required|string|max:225',
        ]);

        $user = User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'apellido' => $validateData['apellido'],
            'documento' => $validateData['documento'],
            'telefono' => $validateData['telefono'],
            'direccion' => $validateData['direccion'],
            'password' => bcrypt($validateData['password']),
            'rol' => $validateData['rol'],
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
