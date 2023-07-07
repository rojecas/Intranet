<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        return view('clientes.index');
    }
    public function create(){
        return view('clientes.create');
    }
    public function show($id){
        return view('clientes.show',['id'=>$id]);
        //return "Datos Detallados del instrumento: $id";
    }
}
