@extends('welcome')
@section('contenido')
<h1> Libro {{$libro}}</h1>
<h1>En esta pagina podras ver los libros</h1>
 <form action="">
    <label> nombre;
        <br>
        <input type="text" name="name">
    </label>
    <label> Descripccion;
        <br>
        <input type="text" name="name">
    </label>
    <label> Categoria;
        <br>
        <input type="text" name="name">
    </label>
 </form>
@endsection
