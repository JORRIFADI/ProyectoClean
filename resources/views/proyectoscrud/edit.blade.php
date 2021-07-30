@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Editar el proyecto</h1>
@stop

@section('content')
<form action="{{ url('dashboard/datosproyectos/'. $datosproyectos->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT')}}

    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="nombre" class="form-label fw-bold text-primary ">Nombre del proyecto:</label>
            <input type="text" name="nombre" id="nombre" class="form-control"
                value="{{$datosproyectos->nombre}}">
        </div>
    </div>
    <br>
    <label for="desurl_img" class="form-label fw-bold text-primary">Imagen:</label>
    <div class="card" style="width: 30rem;">
            <img src="{{ asset('storage'). '/' . $datosproyectos->url_img}}" class="card-img-top" alt="Imagen del proyecto">
        <div class="card-body">
                <input type="file" value="" name="url_img" id="url_img">
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="servicio1" class="form-label fw-bold text-primary">Servicio 1:</label>
            <input type="text" name="servicio1" id="servicio1" class="form-control"
                value="{{$datosproyectos->servicio1}}">
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="servicio2" class="form-label fw-bold text-primary">Servicio 2:</label>
            <input type="text" name="servicio2" id="servicio2" class="form-control"
                value="{{$datosproyectos->servicio1}}">
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="servicio3" class="form-label fw-bold text-primary">Servicio 3:</label>
            <input type="text" name="servicio3" id="servicio3" class="form-control"
                value="{{$datosproyectos->servicio1}}">
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="servicio4" class="form-label fw-bold text-primary">Servicio 4:</label>
            <input type="text" name="servicio4" id="servicio4" class="form-control"
                value="{{$datosproyectos->servicio1}}">
        </div>
    </div>
    <br>

    <a href="/dashboard/datosproyectos" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop