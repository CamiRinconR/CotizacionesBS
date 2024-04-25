<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use resources\views\productos;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{

    //Función listaProductos nos muestra todos los productos que hemos creado en la base de datos
    public function listaProductos(){
        $producto = Producto::get();
        return view('productos.Productos',['productos'=>$producto]);
    }

    //Función show la utilizamos para el detalle de cada uno de los productos cuando se le da clic sobre el enlace del nombre
    public function show(Producto $producto){
        return view('productos.show',['producto'=>$producto]);
    }

    //funcion para crear los productos
    public function create(){
        return view('productos.create');
    }

    //funcion para recibir lo digitado en el create
    public function store(Request $request){
//      Para mostrar los mensajes de error
        $request->validate([
            'nombre_producto'=>['required'],
            'precioProducto' =>['required'],
            'ivaProducto' =>['required'],
            'descripcionProducto' =>['required'],
            'categoria_producto'=>['required']
        ]);
//      Para crear un nuevo producto
        $producto = new Producto;
        //Almacena el dato del nombre del producto que trae el formulario de create
        $producto->nombreProducto=$request->input('nombre_producto');
        $producto->precio_producto=$request->input('precioProducto');
        $producto->iva_producto=$request->input('ivaProducto');
        $producto->descripcion_producto=$request->input('descripcionProducto');
        //Almacena el dato de la categoria del producto que trae el formulario de create
        $producto->categoriaProducto=$request->input('categoria_producto');
        //guarda los datos antes suministrados en la bd
        $producto->save();
        //Mensaje de la creacion del producto
        session()->flash('creacion','producto creado exitosamente');
        //Redireccionando a la vista despues de crear el producto
        return redirect()->route('productos.Productos');
    }

    //Funcion para editar un producto
    public function edit(Producto $producto){
        return view('productos.edit',['producto'=>$producto]);
    }

    public function update(Request $request,Producto $producto){
        //      Para mostrar los mensajes de error
         $request->validate([
             'nombre_producto'=>['required'],
             'precioProducto' =>['required'],
             'ivaProducto' =>['required'],
             'descripcionProducto' =>['required'],
             'categoria_producto'=>['required']
        ]);
        //Almacena el dato del nombre del producto que trae el formulario de create
        $producto->nombreProducto=$request->input('nombre_producto');
        $producto->precio_producto=$request->input('precioProducto');
        $producto->iva_producto=$request->input('ivaProducto');
        $producto->descripcion_producto=$request->input('descripcionProducto');
        //Almacena el dato de la categoria del producto que trae el formulario de create
        $producto->categoriaProducto=$request->input('categoria_producto');
        //guarda los datos antes suministrados en la bd
        $producto->save();
        //Mensaje de la creacion del producto
        session()->flash('creacion','producto actualizado exitosamente');
        //Redireccionando a la vista despues de crear el producto y despues de la, contiene el id del proiducto que nos va amostrar despues de actualizarlo
        return redirect()->route('productos.show', $producto);
    }

    //Funcion para eliminar el registro de la base de datos con respecto a un producto
    public function destroy(Producto $producto){
        //Para eliminar el producto en la base de datos
        $producto->delete();
        //Muestra el mensaje de eliminación de un producto
        session()->flash('creacion','producto eliminado exitosamente');
        //Redirecciona la vista que queremos mostrar cuando eliminamos el producto
        return redirect()->route('productos.Productos');

    }
}
