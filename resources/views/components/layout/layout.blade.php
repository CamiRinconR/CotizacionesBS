<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.scss','/resources/js/app.js'])
    <link rel="icon" href="{{URL::asset('/images/logo.png')}}">
    <title>B&S - {{$title}}</title>
</head>
<body  class="antialiased bg-slate-100 dark:bg-slate-900">
{{--@yield('variable')--}}
{{--@include('.partials.menuP')--}}
{{--@yield('prueba2')--}}

{{$slot}}
{{--x-layout.menuP hace referencia a los archivos que ese encuentran dentro de la carpeta resources->views->components--}}
<x-layout.menuP/>
{{--Para el mensaje de creación se muestre en todas donde se cree algo--}}

@if(session('creacion'))
    <div class="max-w-screen-xl text-center py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
        {{session('creacion')}}
    </div>
@endif
</body>
</html>
