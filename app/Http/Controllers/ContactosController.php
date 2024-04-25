<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ContactosController
{
    public function index(){
        $contactos = Contacto::get();
        return view('contactos.Contactos',['contactos'=>$contactos]);
    }

    public function show(Contacto $contacto){
        return view('contactos.show',['contacto'=>$contacto]);
    }

    public function create(){
        $user=User::all();
        return view('contactos.create',
        [
            'user'=>$user
        ]
        );
    }

    public function store(Request $request){
        $request->validate([
            'userId'=>['required'],
            'nombreContacto'=>['required'],
            'direccionServicio'=>['required'],
            'Ciudad'=>['required'],
            'numeroTelefono'=>['required'],
        ]);
//        DB::beginTransaction();
        $contacto = new Contacto;
        $contacto->user_id=$request->input('userId');
        $contacto->nombre_contacto=$request->input('nombreContacto');
        $contacto->direccion_servicio=$request->input('direccionServicio');
        $contacto->ciudad=$request->input('Ciudad');
        $contacto->numero_telefono_contacto=$request->input('numeroTelefono');
        $contacto->save();
//        $user=User::find($request->user);
//        $user->save($contacto);
        session()->flash('creacion','contacto creado exitosamente');
        return redirect()->route('contactos.Contactos');
    }

    public function edit(Contacto $contacto){
        $user=User::all();
        return view('contactos.edit',['contacto'=>$contacto,'user'=>$user]);
    }

    public function update(Request $request, Contacto $contacto){
        $request->validate([
            'userId'=>['required'],
            'nombreContacto'=>['required'],
            'direccionServicio'=>['required'],
            'Ciudad'=>['required'],
            'numeroTelefono'=>['required'],
        ]);
        $contacto->user_id=$request->input('userId');
        $contacto->nombre_contacto=$request->input('nombreContacto');
        $contacto->direccion_servicio=$request->input('direccionServicio');
        $contacto->ciudad=$request->input('Ciudad');
        $contacto->numero_telefono_contacto=$request->input('numeroTelefono');
        $contacto->save();
//        $user=User::find($request->user);
//        $user->save($contacto);
        session()->flash('creacion','contacto editado exitosamente');
        return redirect()->route('contactos.Contactos');
    }

    public function destroy (Contacto $contacto){
        $contacto ->delete();
        session()->flash('creacion','contacto eliminado exitosamente');
        return redirect()->route('contactos.Contactos');
    }
}
