<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table='productos';
    protected $fillable=['codigoProducto','codigoCategoria','nombre','estado','tipoProducto','marca','precio','descripcion', 'imagen'];
    protected $primaryKey='codigoProducto';
}
