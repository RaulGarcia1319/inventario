<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ProductosModel
{
    //retorna todos los elementos de la tabla producto que se encuentra en nuestra base de datos 
    public static function listaProductos()
    {
        return DB::table('producto')->orderBy('producto.idProducto', 'asc')->get();
    }

    //inserta los campos dentro de la tabla productos
    public static function insertar($nombre, $tipo, $marca, $precio, $descripcion)
    {

        DB::table('producto')->insert([
            'nombre' => $nombre,
            'tipo' => $tipo,
            'marca' => $marca,
            'precio' => $precio,
            'descripcion' => $descripcion
        ]);
    }

}