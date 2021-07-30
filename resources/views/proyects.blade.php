@extends('layouts.plantilla')

@section('title', 'Proyectos')

@section('content')


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>Inicio</title>
</head>

<body>

    {{-- inicia Titulo con imagen de fondo   --}}

    <section class="bg-gray-800 pg-lib-item relative text-white">
        <img class="absolute h-full inset-0 object-center object-cover w-full opacity-60 "
            src="{{ url('images/sliderproyectos.png') }}" alt="fondo seccion" />

        <div class="container mx-auto px-4 py-40 relative">
            <div class="flex flex-wrap -mx-4">
                <div class="mx-auto px-4 text-center w-full lg:w-8/12">

                    <h1 class="font-semibold mb-4 text-6xl"> Obras y Proyectos</h1>
                </div>
            </div>
        </div>
    </section>

    {{-- Termina Titulo con imagen de fondo   --}}

    {{-- inicia texto con imagenes    --}}

    <section class="bg-white pg-lib-item py-20 text-gray-500">
        <div data-pg-class-style="container"
            class="container mx-auto px-4 relative pg-lib-item  lg:text-left text-center"
            data-pg-class-style-inline=" lg:text-left text-center">

            @foreach ($proyectos as $proyecto)

            <div class="flex flex-wrap -mx-4  items-center" data-pg-class-style="column_parent"
                data-pg-class-style-inline=" items-center">
                <div class="p-4 w-full lg:order-2 lg:w-6/12">
                    <img class="text-black" src="storage/{{$proyecto->url_img}}" alt="imagen-ilustrativa">
                </div>
                <div class="p-4 w-full lg:order-1 lg:w-6/12">
                    <div class="py-4">
                        <h5 class="mt-2 text-3xl leading-8 text-justify  tracking-tight text-blue-900 sm:text-4xl">
                            {{$proyecto->nombre}}
                        </h5>
                    </div>
                    <div class="container text-justify">

                        <ul class="list-disc text-black mt-1 text-xl">
                            <li>{{$proyecto->servicio1}}</li>
                            <li>{{$proyecto->servicio2}}</li>
                            <li>{{$proyecto->servicio3}}</li>
                            <li>{{$proyecto->servicio4}}</li>
                        </ul>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </section>

    {{-- Termina texto con imagenes    --}}

</body>

</html>

@endsection