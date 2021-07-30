@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Tabla de la pestaña proyectos</h1>
<br>
<a href="{{ url('dashboard/datosproyectos/create')}}"><button class="btn btn-success">Agregar</button></a>
@stop

@section('content')
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre del proyecto</th>
            <th>Imagen</th>
            <th>Servicio 1</th>
            <th>Servicio 2</th>
            <th>Servicio 3</th>
            <th>Servicio 4</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($proyectos as $proyecto)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$proyecto->nombre}}</td>
            <td><img src="{{ asset('storage'). '/' . $proyecto->url_img}}" class="card-img-top" ></td>
            <td>{{$proyecto->servicio1}}</td>
            <td>{{$proyecto->servicio2}}</td>
            <td>{{$proyecto->servicio3}}</td>
            <td>{{$proyecto->servicio4}}</td>
            <td>
                <a href="{{url('dashboard/datosproyectos/'. $proyecto->id.'/edit')}}"><button
                        class="btn btn-sm btn-primary">Editar</button></a>
                <form method="post" action="{{ url('/dashboard/datosproyectos/'. $proyecto->id)}}">
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