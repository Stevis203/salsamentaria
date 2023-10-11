<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class crearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('creaus.nevo');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('creaus/nevo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Productos::create([
            'name'=>$request['name'],
            'apellido'=>$request['apellido'],
            'documento'=>$request['documento'],
            'telefono'=>$request['telefono'],
            'direccion'=>$request['direccion'],
            'email'=>$request['email']
        ]);
        return redirect()->route('creaus.nevo');
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
