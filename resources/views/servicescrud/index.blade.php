@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Datos de la pestaña servicios</h1>
<br>
<a href="{{ url('dashboard/datosservicios/create')}}"><button class="btn btn-success">Agregar</button></a>
@stop

@section('content')
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre del servicio</th>
            <th>Descripción</th>
            <th>Icono Servicio</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($servicios as $servicio)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$servicio->nombre_servicio}}</td>
            <td>{{$servicio->descripcion}}</td>
            <td><img src="{{ asset('storage'). '/' . $servicio->url_icon}}" class="img-thumbnail" alt="Imagen del servicio"></td>
            <td><img src="{{ asset('storage'). '/' . $servicio->url_img}}" class="img-thumbnail" alt="Imagen del servicio"></td>
            <td>
                <a href="{{url('dashboard/datosservicios/'. $servicio->id.'/edit')}}"><button
                        class="btn btn-sm btn-primary">Editar</button></a>
                <form method="post" action="{{ url('/dashboard/datosservicios/'. $servicio->id)}}">
                    {{csrf_field() }}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-sm btn-secondary"
                        onclick="return confirm('¿Borrar?');">Borrar</button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>



</table>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop