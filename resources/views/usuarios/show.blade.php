<x-layout.layout title="{{$user->name}}">

</x-layout.layout>
<h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500 text-center">{{$user->name}}</h1>
<main class="align-content: center w-full justify-center center gap-4 px-4 align-items-center max-w-7xl sm:grid-cols-2 md:grid-cols-3">
    <div class="align-items-center max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800 text-center">
        <h2 class="font-serif text-2xl text-sky-600 dark:text-green-500 text-center">Correo</h2>
        <p class="text-black dark:text-white text-center">{{$user->email}}</p>
        <a class=" inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
           href="/usuarios">Regresar</a>
    </div>

</main>
