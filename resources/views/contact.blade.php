@extends('layouts.plantilla')

@section('title', 'Contacto')

@section('content')

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel=”stylesheet” href="js/enviar.js">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Inicio</title>
</head>

<body>


    {{--  Inicia seccion de formulario --}}

    <section class="bg-gray-800 relative text-white">
        <img src="{{ url('images/contactanos.jpg') }}"
            class="absolute h-full inset-0 object-center object-cover w-full opacity-50" />
        <div class="container mx-auto px-4 py-20 relative">
            <div class="flex flex-wrap -mx-4">
                <div class="px-4 w-full md:w-10/12 lg:w-full">
                    <h4 class="mb-16 text-bold text-2xl md:text-4xl font-normal text-center">Si desea más
                        información,complete
                        este
                        formulario. Nos pondremos en contacto con usted a la brevedad posible</h4>
                </div>
            </div>

            {{--  Inicia formulario --}}

            <form class="formulario-contacto" action="{{route('contactanos.store')}}" method="POST">
                @csrf
                <div class="mb-6 px-8 w-full md:w-6/12 lg:w-6/12">
                    <label class="block font-bold mb-2 text-white" for="inputEmail">Correo Electrónico</label>
                    <input
                        class="appearance-none border-2 border-white text-black focus:shadow-lg outline-none px-5 py-3 w-full"
                        placeholder="Escribe tu correo" type="email" id="inputEmail" name="correo">
                </div>

                @error('correo')
                <p><strong>{{$message}}</strong></p>
                @enderror


                <div class="mb-6 px-8 w-full md:w-6/12 lg:w-6/12">
                    <label class="block font-bold mb-2 text-white" for="inputNumber">Número de telefono</label>
                    <input
                        class="appearance-none border-2 border-white text-black focus:shadow-lg outline-none px-5 py-3 w-full"
                        placeholder="Escribe tu número" type="text" id="inputNumber" name="telefono">
                </div>

                @error('telefono')
                <p><strong>{{$message}}</strong></p>

                @enderror

                <div class="mb-6 px-8 w-full md:w-6/12 lg:w-6/12">
                    <label class="block font-bold mb-2 text-white" for="inputName">Nombre y apellido</label>
                    <input
                        class="appearance-none border-2 border-white text-black focus:shadow-lg outline-none px-5 py-3 w-full"
                        placeholder="Escribe tu nombre" type="text" id="inputName" name="nombre">
                </div>

                @error('nombre')
                <p><strong>{{$message}}</strong></p>
                @enderror
                <div class="mb-6 px-8 w-full md:w-6/12 lg:w-6/12">
                    <label class="block font-bold mb-2 text-white" for="inputMessage">Mensaje</label>
                    <textarea rows="6"
                        class="appearance-none border-2 border-white text-black focus:shadow-lg outline-none px-5 py-3 w-full"
                        placeholder="Escribe tu mensaje" id="inputMessage" name="mensaje"></textarea>
                </div>

                @error('mensaje')
                <p><strong>{{$message}}</strong></p>
                @enderror

                <div class="text-left mb-6 px-8 w-full md:w-1/4 lg:w-1/4">
                    <button id="btnEnviar" type="submit"
                        class="bg-yellow-500 font-medium hover:bg-red-700 inline-block px-6 py-2 text-center rounded text-white ">Enviar</button>
                </div>

            </form>
        </div>

        {{--   Este If validad si hay informacion de sesion para mostrar el mensaje que esta en el alert --}}
        {{--@if (session('info')) 

        <script>

            alert(session('info'));
            
        </script>

        @endif--}}


    </section>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="js/enviar.js"></script>

</body>

</html>

@endsection