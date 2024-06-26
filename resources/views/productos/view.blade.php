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

        <a href="{{ url('productos/new') }}" class="btn btn-success">+ Agregar</a>

      </div>
      <br>
      {{-- tabla vista productos --}}
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

                    <form action="{{ route('productos.destroy', ['id' => $producto->idProducto]) }}" method="post" id="form-eliminar">
                  
                    <a href="{{ route('productos.editar', ['id' => $producto->idProducto]) }}"
                        class="btn btn-warning"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAWdJREFUSEvFlLlKRDEUhr9pLOwEcQoFwUJRcasVt9Z3EsX38QnGfXkDC/cFRRQLtXCpND+cyJ0xud7ccZg0uWSG7zv5c5IKLR6VFvNpRtABLAGdwDrwHiq2rKAL2AQmDXoJzAM3jZIyAsG3gAngHngFhux7CnjISlIF3cCGi2QcOAMWgQ+gZmurDr5SVtDjYtgGhg1wbrF8mnQMWAOWywiqFovgj8AzMAjcAm/2rXVJNP+MIhEJfggMAHfucGeBFxfPLjBiJL9+kXrIjfBp4BrIdpHgfv1Xp+btoNeq9JVn4XvAqMnmbA7e2ZhA8AOg32KJwbWuHURHSCDozn/AZQ0JrgyuWbdTmav/dXPVJaeugIW/KvdbCgm+7Mc+gwiu/lfmJ9ZFdbc1NSIvkFzwfXsKjt1d0IEWhsci8oJsYYLPAE+pz3teRJ51ZGeRDI/tILXI3P8XeSqaEhaJKFVQx2yLILXi9p7BNyiKUBlj03X8AAAAAElFTkSuQmCC" /></a>
                    
                            @method('DELETE') 
                            @csrf
                               
                            <button type="submit" class="btn btn-danger">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKRJREFUSEvtlUEKgCAQRV93CYK6TsdpGXSZrlPQaYpAXVjDt8xd7mR03v8z6FQUXlXh/ChAD4xAYwjZgAGYLaEKsACtcLkC3VvA7i5aQlRclkglUPELwF/I7X1wHFsvDvDKpfXIonn+dfO+BsQK1T7wUx2ohNkl+gGXd/W0JH8P5NeUXSJFeAxIGTQx9HbwWC/5HJUTUCvpLm6OTjUyE/Pbx4oDDlBhOBmYaWrOAAAAAElFTkSuQmCC"
                                    alt="Eliminar">
                            </button>
                    </form>
                   
                </td>

              </tr>
                @endforeach
            </tbody>
          </table>

    </div>

  </div>
    
    

 </div>


 @section('js')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @if(session('eliminar') == 'ok')
        <script>
             Swal.fire({
                    title: "Eliminado!",
                    text: "El Producto ha sido eliminado",
                    icon: "success"
                    });
        
        </script>
    @endif

