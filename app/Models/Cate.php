<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    use HasFactory;
    protected $fillable = ['codigoCategoria', 'nombre' ];
    protected $primaryKey = 'codigoCategoria';
    protected $table = 'categoria';
}
