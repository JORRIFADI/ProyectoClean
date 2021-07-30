@extends('layouts.plantilla')

@section('title', 'Nosotros')


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

  <link rel=”stylesheet” href="css/style.css">
  <link rel=”stylesheet” href="bootstrap.min.css">


  <title>Inicio</title>
</head>

<body>


  {{-- Seccion Imagenes y texto quienes somos  --}}


  <section class="bg-gray-800 pg-lib-item relative text-white">
    <img class="absolute h-full inset-0 object-center object-cover w-full opacity-60 "
      src="storage/{{$datos2->urlbanner}}" alt="fondo seccion" />

    <div class="container mx-auto px-4 py-40 relative">
      <div class="flex flex-wrap -mx-4">
        <div class="mx-auto px-4 text-center w-full lg:w-8/12">

          <h1 class="font-semibold mb-4 text-2xl md:text-6xl">{{$datos2->titulo}}</h1>
        </div>
      </div>
    </div>
  </section>


  {{-- Termina Seccion Imagenes y texto quienes somos  --}}






  {{-- Inicia Seccion texto y descarga  --}}
  <section>
    <div class="mt-5">
      <div class="container mx-auto pg-lib-item px-4">
        <div class="flex flex-wrap -mx-4">
          <div class="pg-empty-placeholder px-4 w-full md:w-1/2">
            <h1 class=" mb-6 text-base	 md:text-2xl  text-justify text-black ">{{$datos2->descripcion1}}</h1>



          </div>
          <div class="pg-empty-placeholder px-4 w-full md:w-1/2">
            <h1 class=" mb-6  text-base	 md:text-2xl text-justify text-black ">{{$datos2->descripcion2}} </h1>
            <img class="mx-auto mt-8" src="{{ url('iconos/pdf64px.png') }}">

            <div class=" container relative py-10 text-center">
              <button
                class="transition duration-500 ease-in-out bg-blue-600 hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110 ">
                <a href="storage/@foreach ($datos1 as $dato){{$dato->url_curriculum}}@endforeach"
                  class="bg-blue-700 px-5 py-2 rounded text-white item-center" target="_blank"> Descargar Curriculum
                </a>
              </button>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Termina Seccion texto y descarga  --}}

  {{-- Certificaciones slader  --}}

  <section>
    <div>
      <H1 class="mt-5 text-4xl leading-8 text-center  tracking-tight text-blue-900 font-semibold py-2"> Certificaciones
      </H1>

      <span class=" bg-yellow-600 block h-1 mx-auto w-40 uppercase mt-4"></span>
    </div>
  </section>


  <section class="about mt-4">
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-controls">
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="carousel-inner">
        @forelse ($banner as $item)
        <div class="carousel-item @if ($loop->index==0) active  @endif"
          style="background-image:url('storage/{{ $item->url_img}}')">
          <div class="container">
            <h2>{{$item->descripcion}}</h2>
            <p></p>
          </div>
        </div>
        @empty
        @endforelse
      </div>

    </div>
  </section>

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
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    //$('.carousel').carousel();
  </script>
  {{-- Termina Certificaciones slader  --}}



  {{-- Inicia Seccion mision y vision  --}}

  <section class="bg-gray-100  py-4 ">
    <div class="container mx-auto px-4 flex flex-wrap justify-center">


      <div class="p-4 w-full md:w-6/12 lg:w-6/12">
        <div class="block group pb-4 pt-4  relative bg-white rounded-md">
          <div class="p-4 text-lg">
            <h4 class="mb-4 text-3xl text-yellow-500  font-semibold text-center py-3">Misión</h4>
            <img class="mx-auto" src="{{ url('iconos/mision-128px.png') }}">
            <h1 class="text-black text-justify text-base	 md:text-2xl py-5 u-font-family-system-ui">
              @foreach ($datos1 as
              $dato){{$dato->mision}}@endforeach</h1>

          </div>
        </div>
      </div>

      <div class="p-4 w-full md:w-6/12 lg:w-6/12">
        <div class="block group pb-4 pt-4  relative bg-white rounded-md">
          <div class="p-4 text-lg ">
            <h4 class="mb-4 text-3xl text-yellow-500 font-semibold text-center py-3 ">Visión</h4>
            <img class="mx-auto" src="{{ url('iconos/vision-128px.png') }}">
            <h1 class="text-black text-justify text-base	md:text-2xl py-5 u-font-family-system-ui">@foreach ($datos1
              as
              $dato){{$dato->vision}}@endforeach</h1>
          </div>
        </div>
      </div>


    </div>
  </section>


  {{-- Ternina Seccion mision y vision  --}}


  {{-- Ternina Seccion mision y vision  --}}





</body>

</html>

@endsection