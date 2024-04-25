<x-layout.layout title="Crear contacto">
</x-layout.layout>

<h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500 text-center">Editar contacto</h1>
<form class="max-w-sm mx-auto" action="{{route('contactos.update',$contacto)}}" method="POST">
    @csrf @method('PATCH')
    <div class="grid gap-6 mb-6 md:grid-cols-2 align-content-center">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Cliente creador
        <select class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
                name="userId">
            <option value="">Seleccione un cliente</option>
            @foreach($user as $use)
                <option value="{{$use->id}}">{{($use->name)}}</option>
            @endforeach
        </select>
    </label>
    <br>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre Contacto
        <br>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
            dark:focus:ring-blue-500 dark:focus:border-blue-500"
               type="text" name="nombreContacto" value="{{old('nombreContacto',$contacto->nombre_contacto)}}">
        @error('nombreContacto')
        <br>
        <p>{{$message}}</p>
        @enderror
    </label>
    <br>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección de servicio
        <br>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
            dark:focus:ring-blue-500 dark:focus:border-blue-500"
               type="text" name="direccionServicio" value="{{old('direccionServicio',$contacto->direccion_servicio)}}">
        @error('direccionServicio')
        <br>
        <p>{{$message}}</p>
        @enderror
    </label>
    <br>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad
        <br>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
            dark:focus:ring-blue-500 dark:focus:border-blue-500"
               type="text" name="Ciudad" value="{{old('Ciudad',$contacto->ciudad)}}">
        @error('Ciudad')
        <br>
        <p>{{$message}}</p>
        <br>
        @enderror
    </label>
    <br>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de telefóno
        <br>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
            dark:focus:ring-blue-500 dark:focus:border-blue-500"
               type="tel" name="numeroTelefono" value="{{old('numeroTelefono',$contacto->numero_telefono_contacto)}}">
        @error('numeroTelefono')
        <br>
        <p>{{$message}}</p>
        <br>
        @enderror
    </label>
    <br>
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="submit">Editar contacto</button>
    <a class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
       href="{{route('contactos.Contactos')}}">Regresar</a>
    </div>
</form>
