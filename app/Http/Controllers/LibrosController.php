<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index(){
        $libro = Libro::paginate();


        return view('libros', compact('libro'));
    }
    public function listado(){


       return view('lista');

    }
}
