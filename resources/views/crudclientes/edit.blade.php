@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>EDITAR CLIENTES</h1>
@stop

@section('content')
<form action="{{ url('dashboard/datoscliente/'. $datoscliente->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="nombre_cliente" class="form-label fw-bold text-primary ">Nombre del cliente:</label>
            <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control"
                value="{{$datoscliente->nombre_cliente}}">
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="descripcion" class="form-label fw-bold text-primary">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control"
                value="{{$datoscliente->descripcion}}">
        </div>
    </div>
    <br>


    <label for="descripcion1" class="form-label fw-bold text-primary">Icono del cliente:</label>
    <div class="img-thumbnail" style="width: 20rem;">
        <img src="{{ asset('storage'). '/' . $datoscliente->url_imagen}}" class="img-thumbnail" alt="Imagen del cliente">
        <div class="card-body">
            <input type="file" name="url_imagen" id="url_imagen">
        </div>
    </div>


    <br>
    <a href="/dashboard/datoscliente" class="btn btn-secondary">Cancelar</a>
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