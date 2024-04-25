<?php

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductosController;
use \App\Http\Controllers\MovimientoController;
use \App\Http\Controllers\UsersController;
use \App\Http\Controllers\ContactosController;
use \App\Http\Controllers\CotizacionesController;
use Illuminate\Support\Facades\Route;

//Ruta que viene por defecto en laravel
//Ruta de la página principal
Route::view('/','Welcome')->name('welcome');
//Ruta de Contactanos
Route::view('/contacto', 'Contacto')->name('Contacto');
//Ruta de quienes somos
Route::view('/nosotros','Nosotros')->name('Nosotros');

//Ruta de productos y servicios
//Con la primera ruta mostraremos todos los productos que tenemos creados en la base de datos el nombre listaProductos es el index
Route::get('/productos',[ProductosController::class,'listaProductos'])->name('productos.Productos');
//Ruta para crear productos
Route::get('/productos/crear',[ProductosController::class,'create'])->name('productos.create');
//Ruta que almacena lo que envia el metodo create
Route::post('/productos',[ProductosController::class,'store'])->name('productos.store');
//Con esta segunda ruta de productos mostraremos el detalle cuando se le de clic en algun producto
Route::get('/productos/{producto}',[ProductosController::class,'show'])->name('productos.show');
//Con esta ruta es la que utilizaremos para editar o actualizar un produycto
Route::get('/productos/{producto}/edit',[ProductosController::class,'edit'])->name('productos.edit');
//Esta es la ruta que recibe los datos que trae la antereior para poder actualizar
Route::patch('/productos/{producto}',[ProductosController::class,'update'])->name('productos.update');
//Esta es la ruta que recibe los datos del producto a Eliminar
Route::delete('/productos/{producto}',[ProductosController::class,'destroy'])->name('productos.destroy');

//Mostrar todos los usuarios
Route::get('/usuarios',[UsersController::class,'index'])->name('usuarios.Usuarios');
//Ruta para crear el usuario
Route::get('/usuarios/create',[UsersController::class,'create'])->name('usuarios.create');
//Recibir datos de la creacion
Route::post('/usuarios',[UsersController::class,'store'])->name('usuarios.store');
//Ruta para la vista de la edicion del producto
Route::get('usuarios/{user}/edit}',[UsersController::class,'edit'])->name('usuarios.edit');
//Mostrar usuarios a detalle
Route::get('/usuarios/{user}',[UsersController::class,'show'])->name('usuarios.show');
Route::patch('/usuarios/{user}',[UsersController::class,'update'])->name('usuarios.update');
Route::delete('/usuarios/{user}',[UsersController::class,'destroy'])->name('usuarios.destroy');

Route::get('/contactos',[ContactosController::class,'index'])->name('contactos.Contactos');
Route::get('/contactos/create', [ContactosController::class,'create'])->name('contactos.create');
Route::post('/contactos',[ContactosController::class,'store'])->name('contactos.store');
Route::get('/contactos/{contacto}',[ContactosController::class,'show'])->name('contactos.show');
Route::get('/contactos/{contacto}/edit',[ContactosController::class,'edit'])->name('contactos.edit');
Route::patch('/contactos/{contacto}',[ContactosController::class,'update'])->name('contactos.update');
Route::delete('/contactos/{contacto}',[ContactosController::class,'destroy'])->name('contactos.destroy');

Route::get('/cotizaciones',[CotizacionesController::class,'index'])->name('cotizaciones.Cotizaciones');
Route::get('cotizaciones/create',[CotizacionesController::class,'create'])->name('cotizaciones.create');
Route::post('/cotizaciones',[CotizacionesController::class,'store'])->name('cotizaciones.store');
Route::get('/cotizaciones/{cotizacion}/edit',[CotizacionesController::class,'edit'])->name('cotizaciones.edit');
Route::get('/cotizaciones/{cotizacion}',[CotizacionesController::class,'show'])->name('cotizaciones.show');
Route::patch('/cotizaciones/{cotizacion}',[CotizacionesController::class,'update'])->name('cotizaciones.update');
Route::delete('/cotizaciones/{cotizacion}',[CotizacionesController::class,'destroy'])->name('cotizaciones.destroy');

Route::resource('/movimientos',MovimientoController::class);
