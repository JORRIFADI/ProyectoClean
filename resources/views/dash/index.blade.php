@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Bienvenido</h1>
@stop

@section('content')
<div class="container">
    <main class="grid">
        <article>
            <img src="/iconos/homedash.png" alt="">
            <div class="text">
                <h3>INICIO</h3>
                <p class="text-justify">Usted puede realizar los cambios de su preferencia de la vista <b>Inicio</b> en
                    el siguiente enlace.
                </p>
                <a href="{{url('dashboard/datosempresa')}}"><button>Editar</button></a>
            </div>
        </article>
        <article>
            <img src="/iconos/nosotrosdash.png" alt="">
            <div class="text">
                <h3>NOSOTROS</h3>
                <p class="text-justify">Usted puede realizar los cambios de su preferencia de la vista <b>Nosotros</b>
                    en
                    el siguiente enlace.
                </p>
                <a href="{{url('dashboard/nosotros')}}"><button>Editar</button></a>
            </div>
        </article>

        <article>
            <img src="/iconos/serviciosdash.png" alt="">
            <div class="text">
                <h3>SERVICIOS</h3>
                <p class="text-justify">Usted puede realizar los cambios de su preferencia de la vista <b>Servicios</b>
                    en
                    el siguiente enlace.
                </p>
                <a href="{{url('dashboard/datosservicios')}}"> <button>Editar</button></a>
            </div>
        </article>


        <article>
            <img src="/iconos/proyectosdash.png" alt="">
            <div class="text">
                <h3>PROYECTOS</h3>
                <p class="text-justify">Usted puede realizar los cambios de su preferencia de la vista <b>Proyectos</b>
                    en
                    el siguiente enlace.
                </p>
                <a href="{{url('dashboard/datosproyectos')}}"><button>Editar</button></a>
            </div>
        </article>
    </main>
</div>


@stop

@section('css')
<link rel="stylesheet" href="{{ asset('../css/stylebanner.css') }}" />

@stop

@section('js')
<script>

</script>
@stop