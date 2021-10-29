@extends('welcome')
@section('contenido')
<div class="container">
<h1>inicio Libros Existentes</h1>
@foreach ($libro as $lib)
<table class="table caption-top">
    <caption>List of users</caption>
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
      <tr>
        <th scope="row">{{$lib->id}}</th>
        <td>{{$lib->titulo}}</td>
        <td>{{$lib->autor}}</td>
        <td>{{$lib->editorial}}</td>
        <td>{{$lib->Fecha_de_publicacion}}</td>
        <td>{{$lib->n_paginas}}</td>
      </tr>
    </tbody>
  </table>
  @endforeach




   <a style="align-content: center"> {{$libro->links()}} </a>
</div>
@endsection
