<?php

namespace App\Http\Controllers;
use App\Models\ProductosModel;
use Illuminate\Http\Request;

class ProductosController extends Controller	
{
    public function index()
    {
        return view('productos.view', ['productos' => ProductosModel::listaProductos()]);
    }
    

}