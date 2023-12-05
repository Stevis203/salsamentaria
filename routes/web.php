<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\clienteController;
use App\Http\Controllers\CarritoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/categorias', [App\Http\Controllers\cateController::class, 'index'])->name('cate.index');
Route::get('/iniciar', [App\Http\Controllers\ClienteController::class, 'index'])->name('iniciar');
Route::get('/index', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cat', [App\Http\Controllers\productosController::class, 'cat'])->name('cat');
Route::get('/cambiar-paginacion/{perPage}', 'productosController@cambiarPaginacion')->name('cambiarPaginacion');

Route::get('compra', [App\Http\Controllers\productosController::class, 'compra'])->name('compra');
Route::get('/cate/{id}', [App\Http\Controllers\productosController::class, 'mostrarProductosPorCategoria'])->name('categoria');
Route::get('productos', [App\Http\Controllers\productosController::class, 'index'])->name('productos.index');
Route::get('imagenes', [App\Http\Controllers\productosController::class, 'show'])->name('imagenes');

//rutas carro

Route::get('/mostrar-productos', 'ProductoController@mostrarProductos')->name('mostrar-productos');
Route::post('/agregar-al-carrito/{producto}', [CarritoController::class, 'agregarAlCarrito'])->name('agregar-al-carrito');
Route::get('/ver-carrito', [CarritoController::class, 'verCarrito'])->name('ver-carrito');


Route::get('/Contactos', function () {
    return view('Contactos');
});

Route::get('/Servicios', function () {
    return view('Servicios');
});
Route::get('/cantidad', function () {
    return view('cantidad');
});
Route::get('/mision-vision', function () {
    return view('misionvi');
});


Route::get('mscliente', [App\Http\Controllers\msclienteController::class, 'index'])->name('mscliente');
Route::get('editar/{id}', [App\Http\Controllers\msclienteController::class, 'edit'])->name('edit');
Route::get('clientes/Actualizar/{id}',[App\Http\Controllers\msclienteController::class, 'update'])->name('mscliente.update');
Route::get('clientes/Eliminar/{id}',[App\Http\Controllers\msclienteController::class, 'destroy'])->name('mscliente.destroy');

Route::get('mnvendedor', [App\Http\Controllers\msvendedorController::class, 'index'])->name('msvendedor');
Route::get('editar/{id}', [App\Http\Controllers\msvendedorController::class, 'edit'])->name('edit');
Route::get('vendedor/Actualizar/{id}',[App\Http\Controllers\msvendedorController::class, 'update'])->name('msvendedor.update');
Route::get('vendedor/Eliminar/{id}',[App\Http\Controllers\msvendedorController::class, 'destroy'])->name('msvendedor.destroy');

Route::get('msproveedor', [App\Http\Controllers\msproveedorController::class, 'index'])->name('msproveedor');
Route::get('editar/{id}', [App\Http\Controllers\msproveedorController::class, 'edit'])->name('edit');
Route::get('proveed/Actualizar/{id}',[App\Http\Controllers\msproveedorController::class, 'update'])->name('msproveedor.update');
Route::get('proveed/Eliminar/{id}',[App\Http\Controllers\msproveedorController::class, 'destroy'])->name('msproveedor.destroy');

Route::get('msadministrador', [App\Http\Controllers\msadministradorController::class, 'index'])->name('msadministrador');
Route::get('editar/{id}', [App\Http\Controllers\msadministradorController::class, 'edit'])->name('edit');
Route::get('admin/Actualizar/{id}',[App\Http\Controllers\msadministradorController::class, 'update'])->name('msadministrador.update');
Route::get('admin/Eliminar/{id}',[App\Http\Controllers\msadministradorController::class, 'destroy'])->name('msadministrador.destroy');

Route::get('nevo', [App\Http\Controllers\crearController::class, 'index'])->name('nevo');

