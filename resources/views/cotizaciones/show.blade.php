<x-layout.layout title="{{$cotizacion->numero}}">

</x-layout.layout>
<h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500 text-center">Vista cotizaciones</h1>
<main class="align-content: center w-full justify-center center gap-4 px-4 align-items-center max-w-7xl sm:grid-cols-2 md:grid-cols-3">
    <div class="align-items-center max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800 text-center">
        <h1 class="font-serif text-2xl text-sky-600 dark:text-green-500 text-center">Usuario que cotiza</h1>
        <h1 class="font-serif text-1xl text-sky-600 dark:text-red-500 text-center">{{$cotizacion->user->name}}</h1>
        <h1 class="font-serif text-2xl text-sky-600 dark:text-green-500 text-center">Contacto a enviar la cottizacion</h1>
        <h1 class="font-serif text-1xl text-sky-600 dark:text-red-500 text-center">{{$cotizacion->contacto->nombre_contacto}}</h1>
        <p class="text-black dark:text-white">Telefono contacto: {{$cotizacion->contacto->numero_telefono_contacto}}</p>
        <p class="text-black dark:text-white">Direccion de envio: {{$cotizacion->contacto->direccion_servicio}}</p>
        <p class="text-black dark:text-white">Ciudad: {{$cotizacion->contacto->ciudad}}</p>

        <h1 class="font-serif text-2xl text-sky-600 dark:text-green-500 text-center">Producto a cotizar</h1>
        <h1 class="font-serif text-1xl text-sky-600 dark:text-red-500 text-center">{{$cotizacion->producto->nombreProducto}}</h1>
        <p class="text-black dark:text-white">Precio producto: ${{$cotizacion->producto->precio_producto}}</p>
        <p class="text-black dark:text-white">Iva producto: {{$cotizacion->producto->iva_producto}}%</p>
        <p class="text-black dark:text-white">Cantidad a cotizar: {{$cotizacion->cantidad_cotizar}}</p>

        <p class="text-black dark:text-white">Valor subtotal: ${{$cotizacion->producto->precio_producto * $cotizacion->cantidad_cotizar}}</p>
        <p class="text-black dark:text-white">Valor iva: ${{($cotizacion->producto->precio_producto * ((1.+($cotizacion->producto->iva_producto/100))*$cotizacion->cantidad_cotizar))-$cotizacion->producto->precio_producto * $cotizacion->cantidad_cotizar}}</p>
        <p class="text-black dark:text-white">Valor total cotizacion: ${{($cotizacion->producto->precio_producto * $cotizacion->cantidad_cotizar)+($cotizacion->producto->precio_producto * ((1.+($cotizacion->producto->iva_producto/100))*$cotizacion->cantidad_cotizar))-$cotizacion->producto->precio_producto * $cotizacion->cantidad_cotizar}}</p>
    </div>
    <a class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
       href="{{route('cotizaciones.Cotizaciones')}}">Regresar</a>
</main>
