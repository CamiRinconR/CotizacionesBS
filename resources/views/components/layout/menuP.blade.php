<nav class="w-screen overflow-scroll bg-white border-b dark:bg-slate-900 border-slate-900/10 lg:px-8 dark:border-slate-300/10 lg:mx-0">
    <div class="px-4 mx-auto max-w-7xl sm:px-16 lg:px-20">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('welcome') }}">
                        <img src="public/images/logo.png" class="img-fluid image-fit" alt="logo">
                    </a>
                </div>
                <div class="mx-auto">
                    <div class="flex space-x-4">
                        <a href="{{ route('welcome') }}"
                           class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('welcome') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Inicio
                        </a>
                        <a href="{{ route('productos.Productos') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('productos.*') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Productos
                        </a>
                        <a href="{{ route('Nosotros') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('Nosotros') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Nosotros
                        </a>
{{--                        <a href="{{ route('Contacto') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('Contacto') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">--}}
{{--                            Contacto--}}
{{--                        </a>--}}
                        <a href="{{route('usuarios.Usuarios')}}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{request()->routeIs('Usuarios') ? 'text-sky-600 dark:text-white': 'text-slate-400'}}">
                                Usuarios
                        </a>
                        <a href="{{route('contactos.Contactos')}}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{request()->routeIs('contactos.*') ? 'text-sky-600 dark:text-white': 'text-slate-400'}}">
                            Contactos
                        </a>
                        <a href="{{route('cotizaciones.Cotizaciones')}}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{request()->routeIs('cotizaciones.*') ? 'text-sky-600 dark:text-white': 'text-slate-400'}}">
                            Cotizaciones
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
