@extends('welcome')
@section('contenido')

<div class="container">
<h1>inicio Libros Existentes</h1>
<table class="table caption-top">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Fecha de publicacion</th>
        <th scope="col">Numero de Paginas</th>
      </tr>
    </thead>
    <tbody>
@foreach ($libro as $lib)

      <tr>
        <th scope="row">{{$lib->id}}</th>
        <td>{{$lib->titulo}}</td>
        <td>{{$lib->autor}}</td>
        <td>{{$lib->editorial}}</td>
        <td>{{$lib->Fecha_de_publicacion}}</td>
        <td>{{$lib->n_paginas}}</td>

        <td><a href="{{route('libro.edit', $lib->id)}}" type="button" class="btn btn-info">Actualizar</a></td>

        <form action="{{route('libro.destroy', $lib->id)}}" method="POST">
        @csrf
        @method('delete')
        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
        </form>

      </tr>
    </tbody>
    @endforeach
  </table>
    <!--Paginacion-->
   <a style="align-content: center"> {{$libro->links()}} </a>
</div>
@endsection
