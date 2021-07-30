<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>@yield('title')</title>
</head>
{{-- Favicon --}}
{{-- Estilos --}}

<body>
    {{-- Header --}}
    {{-- nav --}}


    <nav class="flex items-center justify-between flex-wrap bg-white p-6 fixed w-full z-10 top-0">
        <div class="flex items-center flex-shrink-0 text-white mr-5">

            {{-- Logo --}}
            <a class="md:py-0" href="/">
                <img class="h-35 w-60 pl-6 self-center text-black mx-10" src="{{url('images/JORRIFADI_LOGO.png')}}"
                    alt="Logotipo Empresa">
            </a>
        </div>

        {{-- Menu --}}
        <div class="block lg:hidden">
            <button id="nav-toggle"
                class="flex items-center px-3 py-2 border rounded text-black-500 border-gray-600 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>

        {{-- Texto del menu --}}

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center text-xl no-underline">
                <li class="mr-3 no-underline">
                    <a class=" inline-block py-2 px-4 text-black hover:text-yellow-500 no-underline"
                        href="{{route('index')}}">Inicio</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black hover:text-yellow-500  py-2 px-4 no-underline"
                        href="{{route('nosotros')}}">Nosotros</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black hover:text-yellow-500 py-2 px-4 no-underline"
                        href="{{route('servicios')}}">Servicios</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black  hover:text-yellow-500  py-2 px-4 no-underline"
                        href="{{route('proyectos')}}">Proyectos</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black hover:text-yellow-500  py-2 px-4 no-underline"
                        href="{{route('contactanos')}}">Contáctanos</a>
                </li>

            </ul>
        </div>
    </nav>

    {{-- Termina header --}}

    <br>
    <br>
    <br>
    <br>
    <br>


    {{-- Icono watsap --}}
    @yield('content')
    <a href="https://api.whatsapp.com/send?phone=+529984093452&text=Hola,%20quiero%20informacion.%20" class="whatsapp"
        target="_blank">
        <i class="fa fa-whatsapp whatsapp-icon">
        </i>
    </a>
    {{-- termina Icono watsap --}}


    {{-- Script --}}

    <script>
        //Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function(){
			document.getElementById("nav-content").classList.toggle("hidden");
		}
    </script>

</body>


{{-- Footer --}}

<footer class="footer bg-gray-300 relative pt-2 gab-y ">
    <div class="container mx-auto px-2">

        <div class="sm:flex sm:mt-auto">
            <div class=" mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">



                <div class="flex flex-col">
                    <span class="font-bold text-blue-800 uppercase mt-4 md:mt-0 mb-2">Nuestra empresa</span>
                    <span class="my-1"><a href="{{route('index')}}"
                            class="text-black  text-md hover:text-yellow-500">Inicio</a></span>
                    <span class="my-1"><a href="{{route('nosotros')}}"
                            class="text-black  text-md hover:text-yellow-500">¿Quiénes
                            somos?</a></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Servicios</a></span>
                    <span class="my-1"><a href="{{route('proyectos')}}"
                            class="text-black  text-md hover:text-yellow-500">Proyectos</a></span>
                    <span class="my-1"><a href="{{route('contactanos')}}"
                            class="text-black  text-md hover:text-yellow-500">Contáctanos</a></span>
                </div>

                <div class="flex flex-col">
                    <span class="font-bold text-blue-800 uppercase mt-4 md:mt-0 mb-2">Servicios</span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Proyectos
                            ejecutivos</b></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Construcción y/o
                            remodelaciones en general</a></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Ejecución y
                            supervisión de obras </a></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Trámites ante
                            entidades municipales, estatales y federales<a></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Unidad de
                            verificación de instalaciones eléctrica<a></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Servicio de
                            asesoría</a></span>
                    <span class="my-1"><a href="{{route('servicios')}}"
                            class="text-black  text-md hover:text-yellow-500">Venta e instalación
                            de material eléctrico</a></span>
                </div>



                <div class="flex flex-col">
                    <span class="font-bold text-blue-800 uppercase mt-4 md:mt-0 mb-2">Contáctanos</span>
                    <span class="my-1"><i class="fa fa-mobile"></i><a
                            class="text-black ml-1.5 text-md hover:text-yellow-500"> 044 (998) 1022645</a></span>
                    <span class="my-1"><i class="fa fa-envelope"></i><a
                            class="text-black mr-1  text-md hover:text-yellow-500">Direccion@jorrifadi.com</a></span>


                    {{-- Logo redes sociales --}}
                    {{-- Facebook --}}
                    <div class="flex-wrap inline-flex py-2 space-x-3">
                        <a href="https://www.facebook.com/Jorrifadi-Instalaciones-y-Proyectos-SA-de-CV-103039931507645/"
                            target="_blank" class="hover:text-yellow-500 text-black"> <svg viewBox="0 0 24 24"
                                fill="currentColor" class="h-6 w-6">
                                <path
                                    d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z">
                                </path>
                            </svg></a>
                        {{-- Twitter --}}
                        <a class="hover:text-yellow-500 text-black"> <svg viewBox="0 0 24 24" fill="currentColor"
                                class="h-6 w-6">
                                <path
                                    d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z">
                                </path>
                            </svg></a>
                        {{-- Instagram --}}
                        <a class="hover:text-yellow-500 text-black"> <svg viewBox="0 0 24 24" fill="currentColor"
                                class="h-6 w-6">
                                <path
                                    d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z">
                                </path>
                            </svg></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Franja naranja --}}
    <div class=" bg-yellow-500 mx-auto px-5">
        <div class="mt-5  flex flex-col items-center">
            <div class="sm:w-2/4 text-center py-4">
                <h1 class="text-sm text-black-700 font-bold mb-2">
                    © 2021 Jodifarri Instalación y Proyectos S.A. de C.V. ​Todos los Derechos Reservados.
                </h1>
            </div>
        </div>
    </div>




</footer>



{{-- Termina Footer --}}

</html>