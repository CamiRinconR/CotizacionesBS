<x-layout.layout title="actualizar usuario">

</x-layout.layout>
<h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500 text-center">Actualizar usuario</h1>
<br>
<form class="max-w-sm mx-auto" action="{{route('usuarios.update',$user)}}" method="POST">
    @csrf @method('PATCH')
    <div class="grid gap-6 mb-6 md:grid-cols-2 align-content-center">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre y apellido
        <br>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
        dark:focus:ring-blue-500 dark:focus:border-blue-500"
               name="nombre" placeholder="Santiago Torres P" type="text" value="{{old('name', $user->name)}}">
        {{--        Parar mostrar el error si el campo va vacio--}}
        @error('name')
        <br>
        <p style="color: red">{{$message}}</p>
        @enderror
    </label>

    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usuario
        <br>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
        dark:focus:ring-blue-500 dark:focus:border-blue-500"
               name="Usuario" placeholder="Santi" type="text" value="{{old('usuario',$user->usuario)}}">
        {{--        Parar mostrar el error si el campo va vacio--}}
        @error('Usuario')
        <br>
        <p style="color: red">{{$message}}</p>
        @enderror
    </label>

    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de cedula
        <br>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
        dark:focus:ring-blue-500 dark:focus:border-blue-500"
               name="numeroCedula" placeholder="10228523" type="text" value="{{old('numero_cedula',$user->numero_cedula)}}">
        {{--        Parar mostrar el error si el campo va vacio--}}
        @error('numeroCedula')
        <br>
        <p style="color: red">{{$message}}</p>
        @enderror
    </label>

    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo del usuario
        <br>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
        dark:focus:ring-blue-500 dark:focus:border-blue-500"
               name="correoUsuario" type="email" value="{{old('email', $user->email)}}">
        {{--        Mostrar el error si el campo va vacio --}}
        @error('correoUsuario')
        <br>
        <p style="color: red">{{$message}}</p>
        @enderror
    </label>

    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña usuario
        <br>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
        dark:focus:ring-blue-500 dark:focus:border-blue-500"
               name="contrasenaUsuario" type="password">
        @error('contrasenaUsuario')
        <br>
        <p style="color: red">{{$message}}</p>
        @enderror
    </label>

    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Codigo
        <br>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
        dark:focus:ring-blue-500 dark:focus:border-blue-500"
               name="Codigo" type="text" placeholder="STP" value="{{old('codigo',$user->codigo)}}">
        @error('Codigo')
        <br>
        <p style="color: red">{{$message}}</p>
        @enderror
    </label>

{{--        <label>Tipo--}}
{{--            <br>--}}
{{--            <input name="Tipo" type="text" value="{{old('tipo', $user->tipo)}}">--}}
{{--            @error('Tipo')--}}
{{--            <br>--}}
{{--            <p style="color: red">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </label>--}}
{{--        <br>--}}
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="submit">Actualizar usuario</button>

        <a class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
           href="/usuarios">Regresar</a>
    </div>
</form>



