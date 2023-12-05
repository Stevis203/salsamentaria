<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function agregarAlCarrito(Request $request, $productoId)
    {
        // Lógica para agregar el producto al carrito
        // Puedes almacenar solo el ID del producto en la sesión
        $carrito = $request->session()->get('carrito', []);
        $carrito[] = $productoId;
        $request->session()->put('carrito', $carrito);

        return redirect()->back()->with('success', 'Producto agregado al carrito');
    }

    public function verCarrito(Request $request)
    {


        // Obtén el contenido del carrito desde la sesión
        $carritoIds = $request->session()->get('carrito', []);
                // En tu método verCarrito del controlador
                $carrito = Producto::whereIn('codigoproducto', $carritoIds)->get();

        return view('vercarrito', compact('carrito'));
    }
}
