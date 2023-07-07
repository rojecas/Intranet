<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstrumentoController extends Controller
{
    public function index(){
        return "Este es el listado de instrumentos";
    }
    public function create(){
        return "creación de un nuevo instrumentos";
    }
    public function show($id){
        return "Datos Detallados del instrumento: $id";
    }
}
