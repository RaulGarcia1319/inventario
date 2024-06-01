<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ProductosModel
{
    public static function listaProductos()
    {
        return DB::table('producto')->orderBy('producto.idProducto', 'asc')->get();
    }

}