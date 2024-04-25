{{--@component('components.layout');--}}
{{--La x la podemos indicar como si apuntara a la carpeta de views->components y seguido le colocamos el archivo layout--}}
<x-layout.layout title="Productos">
</x-layout.layout>
<header class="px-6 py-4 space-y-2 text-center">
    <h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500">Productos y servicios</h1>
{{--    Enlace para la creación de los productos--}}
    <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{route('productos.create')}}">Crear producto</a>
</header>
<main class="grid w-full gap-4 px-4 align-items-center max-w-7xl sm:grid-cols-2 md:grid-cols-3">
    @foreach($productos as $producto)
        <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">
            {{--nombreProducto es el que hace referencia al campo de la base de datos--}}
            <h2 class="text-xl text-center text-slate-600 dark:text-slate-300 hover:underline">
                {{--Ruta para revisar los productos creados en la base de datos uno a uno--}}
                <a href="{{route('productos.show',$producto)}}">
                    {{$producto->nombreProducto}}</a>
            </h2>
            <div class="flex justify-between">
            {{--  Ruta donde vamos a tomar el id del producto y lo vamos a pasar para poderlo editar *$producto* es el id del producto--}}
            <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{route('productos.edit',$producto)}}">Editar producto</a>
{{--            Debemops crear eñ formulario y colocarle @method('DELETE') para que nos acepte el metodo y nos muestre la ruta que es y no utilize la del get--}}
            <form action="{{route('productos.destroy', $producto)}}" method="POST">
                @csrf @method('DELETE')
                <button class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none" type="submit">Eliminar producto</button>
            </form>
            </div>
        </div>
        @endforeach
</main>



