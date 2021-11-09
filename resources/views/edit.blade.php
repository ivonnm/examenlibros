@extends('welcome')
@section('contenido')
<h2>Actualizar Registro</h2>
<form action="/libros/{{$lib->id}}" method="POST">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label for="" class="form-label">titulo</label>
    <input id="titulo" name="" type="text" class="form-control" value="{{$lib->titulo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">autor</label>
    <input id="autor" name="" type="text" class="form-control" value="{{$lib->autor}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">editorial</label>
    <input id="editorial" name="" type="text" class="form-control" value="{{$lib->editorial}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">fecha de publicacion</label>
    <input id="f_publicacion" name="" type="text" class="form-control" value="{{$lib->Fecha_de_publicacion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">n de paginas</label>
    <input id="paginas" name="" type="text" class="form-control" value="{{$lib->n_paginas}}">
  </div>
  <a href="libros" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
