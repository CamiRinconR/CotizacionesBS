<x-layout.layout title="{{$producto->nombreProducto}}">

</x-layout.layout>
<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Editar producto</h1>
<form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800"  action="{{route('productos.update',$producto)}}" method="POST">
    @csrf @method('PATCH')
    <div  class="flex flex-col items-center justify-between mt-4">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="grid-first-name">
                Nombre del producto
                <br>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="nombre_producto" type="text" value="{{old('nombre_producto', $producto->nombreProducto)}}">
                {{--        Parar mostrar el error si el campo va vacio--}}
                @error('nombre_producto')
                <br>
                <p style="color: red">{{$message}}</p>
                @enderror
            </label>
        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="grid-first-name">
                Precio Producto
                <br>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="precioProducto" type="number" value="{{old('precioProducto', $producto->precio_producto)}}">
                {{--        Parar mostrar el error si el campo va vacio--}}
                @error('precioProducto')
                <br>
                <p style="color: red">{{$message}}</p>
                @enderror
            </label>
        </div>

        <div class=" ease-in-out md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="grid-first-name">
                Iva Producto
                <br>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="ivaProducto" type="number" value="{{old('ivaProducto', $producto->iva_producto)}}">
                {{--        Parar mostrar el error si el campo va vacio--}}
                @error('ivaProducto')
                <br>
                <p style="color: red">{{$message}}</p>
                @enderror
            </label>
        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="grid-first-name">
                descripcion Producto
                <br>
                <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="descripcionProducto"> {{old('descrpcionProducto', $producto->descripcion_producto)}}</textarea>
                {{--        Parar mostrar el error si el campo va vacio--}}
                @error('descripcionProducto')
                <br>
                <p style="color: red">{{$message}}</p>
                @enderror
            </label>
        </div>

        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="grid-first-name">Categoria del Producto
                <br>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="categoria_producto" value="{{old('categoria_producto', $producto->categoriaProducto)}}">
                {{--        Mostrar el error si el campo va vacio --}}
                @error('categoria_producto')
                <br>
                <p style="color: red">{{$message}}</p>
                @enderror
            </label>
        </div>
    <div class="flex items-center justify-between mt-4">
    <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Actualizar producto</button>
        <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="/productos">Regresar</a>
    </div>
    </div>
</form>



