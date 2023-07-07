<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstrumentoController extends Controller
{
    public function index(){
        return view('instrumentos.index');
    }
    public function create(){
        return view('instrumentos.create');
    }
    public function show($id){
        return view('instrumentos.show',compact('id'));
        //return view('instrumentos.show',['id'=>$id]);
    }
}
