@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Agregar un nuevo cliente</h1>
@stop

@section('content')
<form action="{{ url('dashboard/datoscliente/create')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="mb-3 mt-4">

        <div class="mb-3">
            <label for="nombre_cliente" class="form-label fw-bold text-primary ">Nombre del cliente:</label>
            <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control" value="">
        </div>
    </div>
    <br>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="descripcion" class="form-label fw-bold text-primary">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="">
        </div>
    </div>
    <br>

    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="url_imagen" class="form-label fw-bold text-primary">Url-Imagen:</label>
            <input type="file" name="url_imagen" id="url_imagen" class="form-control" value="">
        </div>
    </div>
    <br>
    
    <a href="/dashboard/datosempresa" class="btn btn-secondary">Cancelar</a>
    <input type="submit" class="btn btn-primary" value="Agregar">
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

