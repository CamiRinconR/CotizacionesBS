<x-layout.layout title="Editar cotizacion">

</x-layout.layout>

<h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500 text-center">Formulario de creacion de cotización</h1>
<br>
<form class="max-w-sm mx-auto" action="{{route('cotizaciones.update',$cotizacion)}}" method="POST">
    @csrf @method('PATCH')
    <div class="grid gap-6 mb-6 md:grid-cols-2 align-content-center">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Usuario creacion cotizacion
        <select class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
                name="UserId">
            <option value="">Seleccione un cliente</option>
            @foreach($user as $use)
                <option value="{{$use->id}}">{{$use->name}}</option>
            @endforeach
        </select>
    </label>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Contacto para enviar el producto
        <select class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
                name="ContactoId">
            <option value="">Seleccione un contacto</option>
            @foreach($contacto as $contact)
                <option value="{{$contact->id}}">{{$contact->nombre_contacto}}</option>
            @endforeach
        </select>
    </label>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Producto a cotizar
        <select class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
                name="ProductoId">
            <option value="">Seleccione un producto</option>
            @foreach($producto as $product)
                <option value="{{$product->id}}">{{$product->nombreProducto}}</option>
            @endforeach
        </select>
    </label>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Cantidad de producto a cotizar
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               type="number" name="cantidad" value="{{old('cantidad',$cotizacion->cantidad_cotizar)}}">
    </label>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Observaciones
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
               type="text" name="Observaciones" value="{{old('Observaciones',$cotizacion->observacion)}}">
    </label>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Fecha prevista
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
            dark:focus:ring-blue-500 dark:focus:border-blue-500"
               type="date" name="fechaPrevista" value="{{old('fechaPrevista',$cotizacion->fecha_prevista)}}">
    </label>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Estado del pedido
        <select class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
                name="Estado">
            <option value="">Seleccione un estado</option>
            <option value="Espera">Espera</option>
            <option value="En proceso">En proceso</option>
            <option value="Realizado">Realizado</option>
        </select>
    </label>
        <br>
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
            type="submit">Crear cotizacion</button>
    <a class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
       href="{{route('cotizaciones.Cotizaciones')}}">Regresar</a>
    </div>
</form>
