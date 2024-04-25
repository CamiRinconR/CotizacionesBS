<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class UsuariosController
{
    public function index(){
        $usuarios = Usuario::get();
        return view('usuarios.Usuarios',['usuarios'=>$usuarios]);
    }

    public function show(Usuario $usuario){
        return view('usuarios.show',['usuario'=>$usuario]);
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(){
        return ('holaaa');
    }

    public function edit(Usuario $usuario){
        return view ('usuarios.edit',['usuario'=>$usuario]);
    }

    public function update(){
        return ('0holaaaa');
    }
}
