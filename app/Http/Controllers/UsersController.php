<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsersController
{
    public function index(){
        $user = User::get();
        return view('usuarios.Usuarios',['user'=>$user]);
    }

    public function show(User $user){
        return view('usuarios.show',['user'=>$user]);
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $request->validate([
           'nombre'=>['required'],
            'Usuario'=>['required'],
            'numeroCedula'=>['required'],
            'correoUsuario'=>['required'],
            'contrasenaUsuario'=>['required'],
            'Codigo'=>['required']

        ]);
         $usuario = new User;
         $usuario->name=$request->input('nombre');
         $usuario->usuario=$request->input('Usuario');
         $usuario->numero_cedula=$request->input('numeroCedula');
         $usuario->email=$request->input('correoUsuario');
         $usuario->password=$request->input('contrasenaUsuario');
         $usuario->codigo=$request->input('Codigo');
         $usuario->tipo=$request->input('Tipo');
         $usuario->save();
         session()->flash('creacion','usuario creado exitosamente');
         return redirect()->route('usuarios.Usuarios');
    }

    public function edit(User $user){
        return view('usuarios.edit',['user'=>$user]);
    }

    public function update(Request $request, User $user){

        $request->validate([
            'nombre'=>['required'],
            'Usuario'=>['required'],
            'numeroCedula'=>['required'],
            'correoUsuario'=>['required'],
            'contrasenaUsuario'=>['required'],
            'Codigo'=>['required']

        ]);
        $user->name=$request->input('nombre');
        $user->usuario=$request->input('Usuario');
        $user->numero_cedula=$request->input('numeroCedula');
        $user->email=$request->input('correoUsuario');
        $user->password=$request->input('contrasenaUsuario');
        $user->codigo=$request->input('Codigo');
        $user->tipo=$request->input('Tipo');
        $user->save();
        session()->flash('creacion','usuario editado exitosamente');
        return redirect()->route('usuarios.Usuarios');
    }

    public function destroy(User $user){
        $user ->delete();
        session()->flash('creacion','usuario eliminado exitosamente');
        return redirect()->route('usuarios.Usuarios');
    }
}
