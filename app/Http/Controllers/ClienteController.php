<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        return "Este es el listado de clientes";
    }
    public function create(){
        return "creación de un nuevo cliente";
    }
    public function show($id){
        return "Datos Detallados del cliente: $id";
    }
}
