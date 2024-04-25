<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\Cotizacion;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;


class CotizacionesController
{
    public function index(){
        $cotizaciones = Cotizacion::get();
        return view('cotizaciones.Cotizaciones',['cotizacion'=>$cotizaciones]);
    }

    public function show(Cotizacion $cotizacion){
        return view('cotizaciones.show',['cotizacion'=>$cotizacion]);
    }

    public function create(){
        $user=User::all();
        $contacto=Contacto::all();
        $producto=Producto::all();
        return view('cotizaciones.create',['user'=>$user,
                                                'contacto'=>$contacto,
                                                'producto'=>$producto]);
    }

    public function store(Request $request){
        $request->validate([
            'UserId'=>['required'],
            'ContactoId'=>['required'],
            'ProductoId'=>['required'],
            'cantidad'=>['required'],
            'Observaciones'=>['required'],
            'fechaPrevista'=>['required'],
        ]);
//        $sumar=intval('select max(numero) from cotizacions');

        $cotizacion = new Cotizacion;
        $ultimo= Cotizacion::all()->last()->id;
        $cotizacion->numero=$ultimo+1;
        $cotizacion->fecha_creacion = now();
        $cotizacion->user_id=$request->input('UserId');
        $cotizacion->contacto_id=$request->input('ContactoId');
        $cotizacion->producto_id=$request->input('ProductoId');
        $cotizacion->cantidad_cotizar=$request->input('cantidad');
        $cotizacion->observacion=$request->input('Observaciones');
        $cotizacion->fecha_prevista=$request->input('fechaPrevista');
        $cotizacion->estado=$request->input('Estado');
        $cotizacion->save();
        session()->flash('creacion','cotización realizada exitosamente');
        return redirect()->route('cotizaciones.Cotizaciones');
    }
    public function edit(Cotizacion $cotizacion){
        $user=User::all();
        $contacto=Contacto::all();
        $producto=Producto::all();
        return view('cotizaciones.edit',[
            'cotizacion'=>$cotizacion,
            'user'=>$user,
            'contacto'=>$contacto,
            'producto'=>$producto]);
    }
    public function update(Request $request,Cotizacion $cotizacion){
        $request->validate([
            'UserId'=>['required'],
            'ContactoId'=>['required'],
            'ProductoId'=>['required'],
            'cantidad'=>['required'],
            'Observaciones'=>['required'],
            'fechaPrevista'=>['required'],
        ]);
        $cotizacion->user_id=$request->input('UserId');
        $cotizacion->contacto_id=$request->input('ContactoId');
        $cotizacion->producto_id=$request->input('ProductoId');
        $cotizacion->cantidad_cotizar=$request->input('cantidad');
        $cotizacion->observacion=$request->input('Observaciones');
        $cotizacion->fecha_prevista=$request->input('fechaPrevista');
        $cotizacion->estado=$request->input('Estado');
        $cotizacion->save();
        session()->flash('creacion','cotización realizada exitosamente');
        return redirect()->route('cotizaciones.Cotizaciones');
    }

    public function destroy(Cotizacion $cotizacion){
        $cotizacion->delete();
        session()->flash('creacion','Cotizacion eliminada exitosamente');
        return redirect()->route('cotizaciones.Cotizaciones');
    }
}
