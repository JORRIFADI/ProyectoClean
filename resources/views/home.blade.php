@extends('layouts.plantilla')

@section('title', 'Jorrifadi | Inicio')

@section('content')


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="{{ asset('css/estyle.css') }}" rel="stylesheet">
  <link rel=”stylesheet” href="bootstrap.min.css">
  <link rel=”stylesheet” href="funciones.js">

  <title>Inicio</title>
</head>

<body>

  {{-- Seccion Imagenes y texto quienes somos  --}}

  <section class="bg-gray-800 relative text-white p-3">
    <a href="/">
      <img class="absolute h-full inset-0 object-center object-cover w-full opacity-70 "
        src="storage/{{$datos1->imagenbanner}}" alt="fondo seccion" />
    </a>

    <div class="container mx-auto px-8 py-10 relative">
      <h1 class=" text-center font-bold mb-5 text-5xl">@foreach ($datos as $dato){{$dato->slogan}} @endforeach</p>
      </h1>

      <div class="flex flex-wrap  -mx-1">

        <div class="py-20 px-7 w-full md:w-10/12 lg:w-7/12">

          <h4 class="mb-1 text-3xl font-semibold uppercase">¿QUIÉNES SOMOS?</h4>
          <h4 class="mb-4  text-5xl text-yellow-600 uppercase">________</h4>
          <p class="mb-6 text-justify text-base	md:text-2xl u-font-family-system-ui">@foreach ($datos as
            $dato){{$dato->descripcion}}@endforeach</p>


          <!--Inicia  Boton -->

          <div class="container align-content-center">
            <a href="storage/@foreach ($datos as $dato){{$dato->url_curriculum}}@endforeach" target="_blank">
              <button
                class="font-bold uppercase px-8 py-3 rounded bg-yellow-500 hover:bg-red-700 hover:text-white  text-white max-w-max shadow-sm hover:shadow-lg">CURRICULUM</button></a>
            <a href="{{route('nosotros')}}">
              <button
                class="font-bold border-2 border-white uppercase px-8 py-3 rounded hover:bg-red-700 hover:text-white max-w-max shadow-sm hover:shadow-lg text-white">CONÓCENOS</button>
            </a>
          </div>
          <!-- Termina Boton -->
        </div>
      </div>
    </div>
    </div>
  </section>

  {{-- Termina Seccion Imagenes y texto quienes somos  --}}



  {{-- Seccion principales servicios--}}

  {{-- Seccion principales servicios--}}

  <section>

    <div class="py-2 bg-gray-100 p-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">

          <p class="mt-2 text-4xl leading-8  text-center tracking-tight text-blue-900">
            Principales servicios
          </p>
        </div>

        <div class="mt-10">
          <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
            <div class="relative">
              <dt>
                <!-- Inicia icono -->
                <div
                  class="absolute flex items-center justify-center h-16 w-16 py-3 px-3 rounded-md border-2 border-yellow-500 text-white">
                  <!-- Heroicon name: outline/globe-alt -->

                  <img src="storage/{{$iconservicios1->url_icon}}" alt="">

                </div>
                <!-- Termina icono -->

                <!-- Inicia texto -->
                <p class="ml-20 leading-13 text-base	md:text-xl font-bold text-black">
                  {{$iconservicios1->nombre_servicio}}</p>
              </dt>

            </div>
            <!-- Termina texto -->



            <!-- Inicia icono construccion y remodelaciones -->

            <div class="relative">
              <dt>
                <div
                  class="absolute flex items-center justify-center h-16 w-16 py-3 px-3 rounded-md border-2 border-yellow-500 text-white">
                  <!-- Heroicon name: outline/scale -->
                  <img src="storage/{{$iconservicios2->url_icon}}" alt="">
                </div>

                <!-- Inicia texto -->

                <p class="ml-20 leading-13 text-base	md:text-xl font-bold text-black">
                  {{$iconservicios2->nombre_servicio}}</p>
              </dt>
            </div>

            <!-- Termina Texto -->

            <!-- Termina icono -->


            <!-- Inicia icono venta e instalacion -->

            <!-- Inicia icono -->

            <div class="relative">
              <dt>
                <div
                  class="absolute flex items-center justify-center h-16 w-16 py-3 px-3 rounded-md border-2 border-yellow-500 text-white">
                  <!-- Heroicon name: outline/lightning-bolt -->

                  <img src="storage/{{$iconservicios3->url_icon}}" alt="">

                </div>
                <!-- Termina icono -->

                <!-- inicia Texto -->

                <p class="ml-20 leading-13 text-base	md:text-xl font-bold text-black">
                  {{$iconservicios3->nombre_servicio}}</p>
              </dt>
            </div>

            <!-- Termina Texto -->
            <!-- Termina icono -->



            <!-- Inicia icono  ejecucion y supervicion -->

            <div class="relative">
              <dt>
                <div
                  class="absolute flex items-center justify-center h-16 w-16 py-3 px-3 rounded-md border-2 border-yellow-500 text-white">
                  <!-- Heroicon name: outline/annotation -->

                  <img src="storage/{{$iconservicios4->url_icon}}" alt="">

                </div>
                <!-- Termina icono  -->


                <!-- inicia Texto -->

                <p class="ml-20 leading-13 text-base	md:text-xl font-bold text-black">
                  {{$iconservicios4->nombre_servicio}}</p>
              </dt>
            </div>

            <!-- Termina texto -->


            <!-- Inicia icono  tramites ante entidades -->

            <div class="relative">
              <dt>
                <div
                  class="absolute flex items-center justify-center h-16 w-16 py-3 px-3 rounded-md border-2 border-yellow-500 text-white">
                  <!-- Heroicon name: outline/lightning-bolt -->

                  <img src="storage/{{$iconservicios5->url_icon}}" alt="">

                </div>

                <!-- Termina icono -->

                <!-- inicia Texto -->

                <p class="ml-20 leading-13 text-base	md:text-xl font-bold text-black">
                  {{$iconservicios5->nombre_servicio}}</p>
              </dt>
            </div>

            <!-- termina Texto -->

            <!-- Termina icono tramites ante entidades -->



            <!-- Inicia icono servicios y asesorias -->

            <div class="relative">
              <dt>
                <div
                  class="absolute flex items-center justify-center h-16 w-16 py-3 px-3 rounded-md border-2 border-yellow-500 text-white">
                  <!-- Heroicon name: outline/lightning-bolt -->

                  <img src="storage/{{$iconservicios6->url_icon}}" alt="">

                </div>

                <!-- Termina icono -->

                <!-- Inicia  texto -->

                <p class="ml-20 leading-13 text-base	md:text-xl font-bold text-black">
                  {{$iconservicios6->nombre_servicio}}</p>
              </dt>
            </div>

            <!-- Termina texto -->

          </dl>
        </div>
      </div>

      <!-- Boton -->



      <div class="relative py-10 text-center">
        <a href="{{route('servicios')}}">
          <button
            class="uppercase bg-yellow-500 hover:bg-red-700  inline-block px-9 py-3 rounded text-blue-50 max-w-max shadow-sm hover:shadow-lg">Ver
            más</button>
        </a>

      </div>

    </div>

  </section>
  {{-- Termina Seccion principales servicios--}}
  {{-- Termina Seccion principales servicios--}}



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

  <script>
    //$('.carousel').carousel();
  </script>




  {{-- termina Nuestros clientes --}}

  {{-- --------------------------------------------------------------------------------------------------------- --}}



  <section class="bg-gray-100  py-4 ">
    <div class="container mx-auto px-4 flex flex-wrap justify-center">


      <div class="p-4 w-full md:w-6/12 lg:w-6/12">
        <div class="block group pb-4 pt-4  relative bg-yellow-500 rounded-md">
          <div class="p-4 text-lg">
            <h4 class="mb-4 text-3xl text-blue-900 font-semibold text-center py-3">Misión</h4>
            <img class="mx-auto" src="{{ url('iconos/mision-128px-white.png') }}">
            <h1 class="text-black text-justify text-base	md:text-2xl py-5 u-font-family-system-ui">{{$datos1->mision}}
            </h1>
          </div>
        </div>
      </div>

      <div class="p-4 w-full md:w-6/12 lg:w-6/12">
        <div class="block group pb-4 pt-4  relative bg-yellow-500 rounded-md">
          <div class="p-4 text-lg ">
            <h4 class="mb-4 text-3xl text-blue-900 font-semibold text-center py-3 ">Visión</h4>
            <img class="mx-auto" src="{{ url('iconos/vision-128px-white.png') }}">
            <h1 class="text-black text-justify text-base	md:text-2xl py-5 u-font-family-system-ui">{{$datos1->vision}}
            </h1>
          </div>
        </div>
      </div>


    </div>
  </section>


  {{-- Termina quienes somos --}}


  {{-- Termina quienes somos --}}


  {{-- Porque elegirnos  --}}
  <section class="bg-white pg-lib-item py-20 text-center text-black text-xl">
    <div data-pg-class-style="container" class="container mx-auto px-4 relative pg-lib-item"
      data-pg-class-style-inline="">
      <div class="flex flex-wrap -mx-4  items-center mb-4" data-pg-class-style="column_parent"
        data-pg-class-style-inline=" items-center mb-4">
        <div class="mx-auto px-2 w-full lg:w-8/12">
          <h2 class="font-bold mb-1 text-2xl text-yellow-600"> JORRIFADI </h2>
          <h2 class="font-semibold mb-1 text-4xl text-blue-900"> ¿Por qué elegirnos?</h2>
          <span class=" bg-yellow-600 block h-1 mx-auto w-40 uppercase mt-4"></span>
        </div>
      </div>
      <div class="flex flex-wrap -mx-4" data-pg-class-style="column_parent">


        {{-- Corazon  --}}

        <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
          <div class="py-4">
            <span class="bg-blue-600 border-4 border-blue-600 inline-block mb-2 p-6 rounded-full ">

              <img src="iconos/{{$cualidades1->url_img}}" alt="">

            </span>
            <h5 class="font-bold mb-2 text-blue-800 text-xl"> PASIÓN </h5>
            <p class="mb-4"> {{$cualidades1->descripcion}}</p>
          </div>
        </div>

        {{-- Medalla  --}}

        <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
          <div class="py-4">
            <span class="bg-blue-600 border-4 border-blue-600 inline-block mb-2 p-6 rounded-full ">

              <img src="iconos/{{$cualidades2->url_img}}" alt="">

            </span>
            <h5 class="font-bold mb-2 text-blue-800 text-xl"> EXCELENCIA </h5>
            <p class="mb-4"> {{$cualidades2->descripcion}}</p>
          </div>
        </div>

        {{-- Relacion  --}}



        <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
          <div class="py-4">
            <span class="bg-blue-600 border-4 border-blue-600 inline-block mb-2 p-6 rounded-full ">

              <img src="iconos/{{$cualidades3->url_img}}" alt="">

            </span>
            <h5 class="font-bold mb-2 text-blue-800 text-xl"> COMPROMISO </h5>
            <p class="mb-4">{{$cualidades3->descripcion}}</p>
          </div>
        </div>

        {{-- Manos  --}}

        <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
          <div class="py-4">
            <span class="bg-blue-600 border-4 border-blue-600 inline-block mb-2 p-6 rounded-full ">

              <img src="iconos/{{$cualidades4->url_img}}" alt="">

            </span>
            <h5 class="font-bold mb-2 text-blue-800 text-xl"> VALORES </h5>
            <p class="mb-4">{{$cualidades4->descripcion}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Termina Porque elegirnos  --}}

  {{-- Nuestros clientes --}}
  <section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="lg:text-center">

        <p class="mt-4 text-4xl leading-8  text-center tracking-tight text-blue-900">Nuestros clientes </p>
        <span class=" bg-yellow-600 block h-1 mx-auto w-40 uppercase mt-4"></span>
      </div>
    </div>
  </section>

  <section class="sliderHome mt-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        @forelse ($bannercliente as $item)
        <div class="carousel-item  @if ($loop->index==0) active  @endif">
          <img class="mx-auto mt-4" src="storage/{{$item->url_imagen}}">
          <br>
          <br>
          <br>
          <div class="container">
            <p>{{$item->nombre_cliente}}</p>
            <h3>{{$item->descripcion}}</h3>

          </div>
        </div>
        @empty
        @endforelse
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

</body>

</html>

@endsection