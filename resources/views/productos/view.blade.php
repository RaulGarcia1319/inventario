@extends('layout.app')

@section('title', 'Lista Productos')
 
@section('nav')

<div class="container">

  <ul class="nav justify-content-end py-4">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('productos') }}">Productos</a>
    </li>

</div>


@section('contenido')

 <div class="container">


  <div class="row justify-content-center">
    
    <div class="col-10">

      <h4 class="text-center">Lista de Productos</h1>
      <hr>

      <div class="col">
        
      </div>
      <br>
        <table class="table table-hover">
            <thead class="table-dark">
              <tr>
                <th class="text-center" scope="col">Cod</th>
                <th class="text-center" scope="col">Nombre</th>
                <th class="text-center" scope="col">Tipo</th>
                <th class="text-center" scope="col">Marca</th>
                <th class="text-center" scope="col">Precio</th>
                <th class="text-center" scope="col">Descripcion</th>
                <th class="text-center" scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($productos as $producto)
              <tr>
                <th class="text-center">{{ $producto->idProducto}}</th>
                <td>{{ $producto->nombre}}</td>
                <td>{{ $producto->tipo}}</td>
                <td>{{ $producto->marca}}</td>
                <td class="text-center">{{ $producto->precio}}</td>
                <td>{{ $producto->descripcion}}</td>

                <td class="text-center">
                  

                   
                </td>

              </tr>
                @endforeach
            </tbody>
          </table>

    </div>

  </div>
    
    

 </div>

