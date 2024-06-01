@extends('layout.app')

@section('title', 'Nuevo Producto')
    

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

    <div class="col-4">

      <h4 class="text-center">Nuevo Producto</h1>
      <hr>

      <form action="{{ url('productos') }}" method="post">


          @csrf

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del producto" value="{{ old('nombre') }}">
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Ingresa el tipo de producto" value="{{ old('tipo') }}">
            </div>

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingresa la marca" value="{{ old('marca') }}">
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingresa el precio" value="{{ old('precio') }}">
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion:</label>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5" value="{{ old('descripcion') }}">
                </textarea>
            </div>

            <a href="{{ url('productos') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>

      </form>
      

  </div>

  </div>
    

    

</div>