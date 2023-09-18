<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\categoria;
use App\Models\producto;
use DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = session('perPage', 3);
        $currentPage = $request->input('page', 1);
    
        $firstItems = DB::table('productos')
            ->select('productos.codigoProducto as codigoProducto', 'productos.nombre as nombre', 'productos.marca as marca', 'productos.estado as estado', 'productos.precio as precio', 'productos.descripcion as descripcion', 'productos.imagen as imagen')
            ->orderBy('productos.codigoProducto', 'ASC')
            ->skip(($currentPage - 1) * $perPage)
            ->take($perPage)
            ->get();
        return view('productos', compact('firstItems', 'currentPage'));
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
        $productos = Archivo::all();
        return view('productos', compact('productos'));
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