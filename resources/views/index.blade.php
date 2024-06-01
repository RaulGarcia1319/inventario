@extends('layout.app')

@section('title', 'Dashboard')


@section('nav')

<div class="container">

    <ul class="nav justify-content-center py-4">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('productos') }}">Productos</a>
        </li>

    </ul>


</div>

@section('contenido')

<div class="greet">

    <h1 class="text-center fs-1">Welcome</h1>    


</div>



