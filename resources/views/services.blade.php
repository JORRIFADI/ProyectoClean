@extends('layouts.plantilla')

@section('title', 'Servicios')

@section('content')


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <title>Inicio</title>
</head>

<body>

    {{-- Seccion servicios  --}}


    <section class="bg-gray-800 pg-lib-item relative text-white">
        <img class="absolute h-full inset-0 object-center object-cover w-full opacity-60 "
            src="images/{{$datos->urlbanner}}" alt="fondo seccion" />

        <div class="container mx-auto px-4 py-40 relative">
            <div class="flex flex-wrap -mx-4">
                <div class="mx-auto px-4 text-center w-full lg:w-8/12">

                    <h1 class="font-semibold mb-4 text-6xl"> Nuestros servicios</h1>
                </div>
            </div>
        </div>
    </section>


    {{-- Termina Seccion servicios  --}}

    <section class="bg-gray-50 font-light pg-lib-item py-8 text-gray-500">
        <div class="container mx-auto px-4 relative pg-lib-item" data-pg-class-style="container"
            data-pg-class-style-inline="">
            <div class="flex flex-wrap -mx-4  justify-center" data-pg-class-style="column_parent"
                data-pg-class-style-inline=" justify-center">

                @foreach ($servicios as $servicio)

                <div class="p-4 w-full md:w-6/12 lg:w-4/12">
                    <div class="bg-white flex flex-col h-full shadow-lg">
                        <img src="storage/{{$servicio->url_img}}" class="w-full">
                        <div class="p-4 text-lg">
                            <h5 class="font-bold leading-tight text-xl text-center block mb-2 text-blue-500">
                                {{$servicio->nombre_servicio}}</h5>
                            <p class="text-justify">{{$servicio->descripcion}}</p>

                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </section>


</body>

</html>






@endsection