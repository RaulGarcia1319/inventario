<?php

namespace App\Http\Controllers;
use App\Models\ProductosModel;
use Illuminate\Http\Request;

class ProductosController extends Controller	
{
    //funcion que retorna la lista de los productos llamando a la funcion lista de productos del modelo ProductosModel
    public function index()
    {
        return view('productos.view', ['productos' => ProductosModel::listaProductos()]);
    }

    //retorna la vista new
    public function create()
    {
        return view('productos.new');
    }

    //funcion para insertar el producto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'marca' => 'required',
            'precio' => '',
            'descripcion' => 'required'
        ]);

        ProductosModel::insertar(
            $request->input('nombre'),
            $request->input('tipo'),
            $request->input('marca'),
            $request->input('precio'),
            $request->input('descripcion')
        );

        return redirect('productos');
    }

    //pide a travez de la funcion mostrarProducto del modelo
    public function edit($id)
    {
        $producto = ProductosModel::mostrarProducto($id);

        return view('productos.edit', compact('producto'));
    }

    //verifica y busca la funcion correspondiente dentro del modelo que se encarga de llamar la base
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'marca' => 'required',
            'precio' => '',
            'descripcion' => 'required'
        ]);

        ProductosModel::actualizarProducto(
            $id,
            $request->input('nombre'),
            $request->input('tipo'),
            $request->input('marca'),
            $request->input('precio'),
            $request->input('descripcion')
        );
    
        return redirect('productos');
    }


    public function destroy($id)
    {
        ProductosModel::eliminarProducto($id);

        return redirect('productos')->with('eliminar', 'ok');


    }


}